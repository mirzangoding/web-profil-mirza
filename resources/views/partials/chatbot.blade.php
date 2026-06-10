{{-- ===================== CHATBOT WIDGET ===================== --}}

{{-- Floating Button --}}
<button id="chatbot-toggle-btn" class="chatbot-toggle-btn" aria-label="Buka Chatbot AI" title="Chat dengan MirzaBot">
    <span class="chatbot-btn-icon chatbot-icon-open">
        <i class="fas fa-comment-dots"></i>
    </span>
    <span class="chatbot-btn-icon chatbot-icon-close" style="display:none;">
        <i class="fas fa-times"></i>
    </span>
    <span class="chatbot-notification-dot"></span>
</button>

{{-- Chat Window --}}
<div id="chatbot-window" class="chatbot-window" aria-hidden="true">

    {{-- Header --}}
    <div class="chatbot-header">
        <div class="chatbot-header-info">
            <div class="chatbot-avatar">
                <i class="fas fa-robot"></i>
                <span class="chatbot-status-dot"></span>
            </div>
            <div class="chatbot-header-text">
                <strong>MirzaBot</strong>
                <span>Asisten Virtual Mirza · Online</span>
            </div>
        </div>
        <button class="chatbot-close-btn" id="chatbot-close-btn" aria-label="Tutup chatbot">
            <i class="fas fa-times"></i>
        </button>
    </div>

    {{-- Messages Area — typingEl ada DI DALAM sini agar insertBefore bekerja --}}
    <div class="chatbot-messages" id="chatbot-messages">

        <div class="chatbot-message bot">
            <div class="chatbot-bubble">
                <p>Halo! 👋 Saya <strong>MirzaBot</strong>, asisten virtual Mirza.</p>
                <p>Saya siap menjawab pertanyaan tentang portofolio, keahlian, atau layanan Mirza. Bisa juga tanya apa saja! 😊</p>
            </div>
            <span class="chatbot-time">Sekarang</span>
        </div>

        <div class="chatbot-suggestions" id="chatbot-suggestions">
            <button class="suggestion-chip" data-msg="Apa saja keahlian Mirza?">💡 Keahlian Mirza</button>
            <button class="suggestion-chip" data-msg="Layanan apa saja yang tersedia?">🎨 Layanan</button>
            <button class="suggestion-chip" data-msg="Tools apa yang digunakan Mirza?">🛠️ Tools</button>
            <button class="suggestion-chip" data-msg="Bagaimana cara menghubungi Mirza?">📞 Kontak</button>
        </div>

        {{-- ✅ PERBAIKAN: typingEl dipindah KE DALAM messagesEl --}}
        <div class="chatbot-typing" id="chatbot-typing" style="display:none;">
            <div class="chatbot-bubble typing-bubble">
                <span class="typing-dot"></span>
                <span class="typing-dot"></span>
                <span class="typing-dot"></span>
            </div>
        </div>

    </div>{{-- /chatbot-messages --}}

    {{-- Input Area --}}
    <div class="chatbot-input-area">
        <div class="chatbot-input-wrapper">
            <textarea
                id="chatbot-input"
                class="chatbot-input"
                placeholder="Ketik pesan..."
                rows="1"
                maxlength="1000"
                aria-label="Pesan untuk MirzaBot"
            ></textarea>
            <button type="button" id="chatbot-send-btn" class="chatbot-send-btn" aria-label="Kirim pesan">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
        <p class="chatbot-powered">Powered by <strong>Gemini AI</strong></p>
    </div>

</div>{{-- /chatbot-window --}}

@push('scripts')
<script>
(function () {
    'use strict';

    var toggleBtn     = document.getElementById('chatbot-toggle-btn');
    var closeBtn      = document.getElementById('chatbot-close-btn');
    var chatWindow    = document.getElementById('chatbot-window');
    var messagesEl    = document.getElementById('chatbot-messages');
    var typingEl      = document.getElementById('chatbot-typing');
    var inputEl       = document.getElementById('chatbot-input');
    var sendBtn       = document.getElementById('chatbot-send-btn');
    var suggestionsEl = document.getElementById('chatbot-suggestions');
    var notifDot      = document.querySelector('.chatbot-notification-dot');
    var iconOpen      = document.querySelector('.chatbot-icon-open');
    var iconClose     = document.querySelector('.chatbot-icon-close');

    var isOpen      = false;
    var isLoading   = false;
    var chatHistory = [];

    var csrfToken = (document.querySelector('meta[name="csrf-token"]') || {}).content || '';

    /* ── Open / Close ── */
    function openChat() {
        isOpen = true;
        chatWindow.classList.add('is-open');
        chatWindow.setAttribute('aria-hidden', 'false');
        iconOpen.style.display  = 'none';
        iconClose.style.display = 'flex';
        notifDot.style.display  = 'none';
        inputEl.focus();
        scrollToBottom();
    }

    function closeChat() {
        isOpen = false;
        chatWindow.classList.remove('is-open');
        chatWindow.setAttribute('aria-hidden', 'true');
        iconOpen.style.display  = 'flex';
        iconClose.style.display = 'none';
    }

    toggleBtn.addEventListener('click', function () {
        isOpen ? closeChat() : openChat();
    });
    closeBtn.addEventListener('click', closeChat);

    /* ── Auto-resize textarea ── */
    inputEl.addEventListener('input', function () {
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, 120) + 'px';
    });

    /* ── Enter to send ── */
    inputEl.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            if (!isLoading) submitMessage();
        }
    });

    /* ── Send button ── */
    sendBtn.addEventListener('click', function () {
        if (!isLoading) submitMessage();
    });

    /* ── Suggestion chips ── */
    var chips = document.querySelectorAll('.suggestion-chip');
    for (var i = 0; i < chips.length; i++) {
        chips[i].addEventListener('click', function () {
            var msg = this.getAttribute('data-msg');
            if (msg && !isLoading) {
                suggestionsEl.style.display = 'none';
                sendMessage(msg);
            }
        });
    }

    /* ── Submit ── */
    function submitMessage() {
        var text = inputEl.value.trim();
        if (!text) return;
        inputEl.value = '';
        inputEl.style.height = 'auto';
        suggestionsEl.style.display = 'none';
        sendMessage(text);
    }

    /* ── Send to Gemini ── */
    function sendMessage(text) {
        appendMessage('user', text);
        chatHistory.push({ role: 'user', text: text });
        setLoading(true);

        var historyForApi = chatHistory.slice(0, -1).map(function (h) {
            return { role: (h.role === 'user' ? 'user' : 'model'), text: h.text };
        });

        fetch('{{ route("chatbot.chat") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ message: text, history: historyForApi })
        })
        .then(function (res) { return res.json(); })
        .then(function (data) {
            setLoading(false);
            var reply = data.reply || 'Maaf, saya tidak mendapat respons.';
            appendMessage('bot', reply);
            chatHistory.push({ role: 'bot', text: reply });
        })
        .catch(function (err) {
            console.error('Chatbot fetch error:', err);
            setLoading(false);
            appendMessage('bot', '😔 Terjadi gangguan koneksi. Silakan coba lagi.');
        });
    }

    /* ── Append bubble ── */
    function appendMessage(role, text) {
        var wrapper = document.createElement('div');
        wrapper.className = 'chatbot-message ' + role;

        var bubble = document.createElement('div');
        bubble.className = 'chatbot-bubble';
        bubble.innerHTML = formatText(text);

        var time = document.createElement('span');
        time.className = 'chatbot-time';
        time.textContent = getCurrentTime();

        wrapper.appendChild(bubble);
        wrapper.appendChild(time);

        // typingEl sekarang ada di dalam messagesEl → insertBefore bekerja ✅
        messagesEl.insertBefore(wrapper, typingEl);
        scrollToBottom();
    }

    /* ── Format markdown sederhana ── */
    function formatText(text) {
        if (!text) return '';
        var out = text
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
            .replace(/\*(.*?)\*/g, '<em>$1</em>')
            .replace(/`([^`]+)`/g, '<code>$1</code>')
            .replace(/^[-•]\s+(.+)/gm, '<li>$1</li>')
            .replace(/\n\n/g, '</p><p>')
            .replace(/\n/g, '<br>');
        // Wrap in paragraph if not already a block element
        if (out.indexOf('<p>') === -1 && out.indexOf('<li>') === -1) {
            out = '<p>' + out + '</p>';
        }
        return out;
    }

    /* ── Loading ── */
    function setLoading(state) {
        isLoading        = state;
        sendBtn.disabled = state;
        inputEl.disabled = state;
        typingEl.style.display = state ? 'flex' : 'none';
        if (state) scrollToBottom();
    }

    function scrollToBottom() {
        setTimeout(function () {
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }, 60);
    }

    function getCurrentTime() {
        return new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
    }

    /* ── Notification dot setelah 3 detik ── */
    setTimeout(function () {
        if (!isOpen) notifDot.style.display = 'block';
    }, 3000);

})();
</script>
@endpush
