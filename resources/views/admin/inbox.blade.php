<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox Pesan — Mirza Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0f172a; color: #e2e8f0; min-height: 100vh; }

        /* Topbar */
        .topbar { background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%); padding: 1.25rem 2rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 4px 20px rgba(0,0,0,0.3); }
        .topbar-brand { display: flex; align-items: center; gap: .75rem; }
        .topbar-brand i { font-size: 1.4rem; color: #93c5fd; }
        .topbar-brand h1 { font-size: 1.1rem; font-weight: 700; color: #fff; }
        .topbar-brand span { font-size: .75rem; color: rgba(255,255,255,.6); display: block; }
        .topbar-back { text-decoration: none; color: rgba(255,255,255,.75); font-size: .85rem; display: flex; align-items: center; gap: .4rem; transition: color .2s; }
        .topbar-back:hover { color: #fff; }

        /* Stats bar */
        .stats-bar { background: #1e293b; border-bottom: 1px solid #334155; padding: .85rem 2rem; display: flex; gap: 2rem; }
        .stat-pill { display: flex; align-items: center; gap: .5rem; font-size: .82rem; color: #94a3b8; }
        .stat-pill strong { color: #e2e8f0; font-size: 1rem; font-weight: 700; }
        .badge-unread { background: #ef4444; color: #fff; font-size: .65rem; font-weight: 700; padding: .15rem .55rem; border-radius: 50px; }

        /* Main */
        .main { max-width: 900px; margin: 2.5rem auto; padding: 0 1.5rem 4rem; }

        /* Alert */
        .alert { background: #134e4a; border: 1px solid #2dd4bf; color: #ccfbf1; padding: .85rem 1.25rem; border-radius: 10px; margin-bottom: 1.5rem; font-size: .88rem; display: flex; align-items: center; gap: .6rem; }

        /* Empty state */
        .empty-state { text-align: center; padding: 5rem 2rem; color: #475569; }
        .empty-state i { font-size: 3.5rem; margin-bottom: 1rem; color: #334155; display: block; }
        .empty-state h3 { font-size: 1.1rem; color: #64748b; margin-bottom: .5rem; }
        .empty-state p { font-size: .85rem; }

        /* Message Card */
        .msg-card { background: #1e293b; border: 1px solid #334155; border-radius: 14px; margin-bottom: 1rem; overflow: hidden; transition: border-color .2s, box-shadow .2s; }
        .msg-card:hover { border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f620, 0 8px 24px rgba(0,0,0,.2); }
        .msg-card.unread { border-left: 4px solid #3b82f6; }
        .msg-card.unread .msg-header { background: #1e3a5f22; }

        .msg-header { display: flex; align-items: flex-start; justify-content: space-between; padding: 1.25rem 1.5rem 1rem; gap: 1rem; }
        .msg-meta { flex: 1; min-width: 0; }
        .msg-top { display: flex; align-items: center; gap: .6rem; flex-wrap: wrap; margin-bottom: .35rem; }
        .msg-name { font-weight: 700; font-size: .95rem; color: #f1f5f9; }
        .msg-new { background: #3b82f6; color: #fff; font-size: .6rem; font-weight: 700; padding: .15rem .55rem; border-radius: 50px; letter-spacing: .05em; text-transform: uppercase; }
        .msg-email { font-size: .8rem; color: #64748b; }
        .msg-email a { color: #60a5fa; text-decoration: none; }
        .msg-email a:hover { text-decoration: underline; }

        .msg-subject { font-size: .88rem; font-weight: 600; color: #cbd5e1; margin-bottom: .2rem; }
        .msg-service { display: inline-flex; align-items: center; gap: .35rem; background: #0f172a; border: 1px solid #334155; color: #94a3b8; font-size: .72rem; padding: .2rem .65rem; border-radius: 50px; }

        .msg-actions { display: flex; flex-direction: column; align-items: flex-end; gap: .5rem; flex-shrink: 0; }
        .msg-date { font-size: .72rem; color: #475569; white-space: nowrap; }

        .msg-body { padding: 0 1.5rem 1.25rem; }
        .msg-text { background: #0f172a; border-radius: 8px; padding: 1rem 1.25rem; font-size: .86rem; color: #cbd5e1; line-height: 1.7; white-space: pre-line; }

        .msg-footer { display: flex; align-items: center; gap: .6rem; padding: .75rem 1.5rem; border-top: 1px solid #1e293b; background: #0f172a22; }
        .btn { display: inline-flex; align-items: center; gap: .4rem; padding: .45rem 1rem; border-radius: 7px; font-size: .78rem; font-weight: 600; cursor: pointer; border: none; transition: all .2s; text-decoration: none; }
        .btn-mark { background: #1d4ed8; color: #fff; }
        .btn-mark:hover { background: #2563eb; }
        .btn-reply { background: #0f766e; color: #fff; }
        .btn-reply:hover { background: #0d9488; }
        .btn-delete { background: transparent; color: #ef4444; border: 1px solid #ef444440; margin-left: auto; }
        .btn-delete:hover { background: #ef444420; }
        .btn-done { background: #134e4a; color: #2dd4bf; border: 1px solid #2dd4bf40; cursor: default; }
    </style>
</head>
<body>

<div class="topbar">
    <div class="topbar-brand">
        <i class="fas fa-inbox"></i>
        <div>
            <h1>Inbox Pesan</h1>
            <span>Mirza Creative Portfolio — Admin Panel</span>
        </div>
    </div>
    <a href="{{ route('home') }}" class="topbar-back">
        <i class="fas fa-arrow-left"></i> Kembali ke Website
    </a>
</div>

<div class="stats-bar">
    <div class="stat-pill">
        <i class="fas fa-envelope"></i>
        <strong>{{ $messages->count() }}</strong> Total Pesan
    </div>
    <div class="stat-pill">
        <i class="fas fa-circle" style="color:#3b82f6;font-size:.5rem;"></i>
        <strong>{{ $messages->where('is_read', false)->count() }}</strong>
        Belum Dibaca
        @if($messages->where('is_read', false)->count() > 0)
            <span class="badge-unread">{{ $messages->where('is_read', false)->count() }}</span>
        @endif
    </div>
    <div class="stat-pill">
        <i class="fas fa-check-circle" style="color:#22c55e;"></i>
        <strong>{{ $messages->where('is_read', true)->count() }}</strong> Sudah Dibaca
    </div>
</div>

<div class="main">

    @if(session('deleted'))
        <div class="alert">
            <i class="fas fa-trash"></i> {{ session('deleted') }}
        </div>
    @endif

    @if($messages->isEmpty())
        <div class="empty-state">
            <i class="fas fa-inbox"></i>
            <h3>Inbox Kosong</h3>
            <p>Belum ada pesan yang masuk dari pengunjung website.</p>
        </div>
    @else
        @foreach($messages as $msg)
        <div class="msg-card {{ !$msg->is_read ? 'unread' : '' }}" id="msg-{{ $msg->id }}">
            <div class="msg-header">
                <div class="msg-meta">
                    <div class="msg-top">
                        <span class="msg-name">{{ $msg->name }}</span>
                        @if(!$msg->is_read)
                            <span class="msg-new">Baru</span>
                        @endif
                    </div>
                    <div class="msg-email">
                        <i class="fas fa-envelope" style="font-size:.7rem;margin-right:.3rem;color:#475569;"></i>
                        <a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a>
                    </div>
                    @if($msg->subject)
                        <div class="msg-subject" style="margin-top:.5rem;">{{ $msg->subject }}</div>
                    @endif
                    @if($msg->service)
                        <div style="margin-top:.4rem;">
                            <span class="msg-service">
                                <i class="fas fa-tag" style="font-size:.65rem;"></i>
                                {{ ucfirst($msg->service) }}
                            </span>
                        </div>
                    @endif
                </div>
                <div class="msg-actions">
                    <span class="msg-date">
                        <i class="fas fa-clock" style="font-size:.65rem;margin-right:.3rem;"></i>
                        {{ $msg->created_at->diffForHumans() }}
                    </span>
                    <span class="msg-date">{{ $msg->created_at->format('d M Y, H:i') }}</span>
                </div>
            </div>

            <div class="msg-body">
                <div class="msg-text">{{ $msg->message }}</div>
            </div>

            <div class="msg-footer">
                <a href="mailto:{{ $msg->email }}?subject=Re: {{ $msg->subject ?? 'Portfolio' }}" class="btn btn-reply">
                    <i class="fas fa-reply"></i> Balas via Email
                </a>

                @if(!$msg->is_read)
                    <form action="{{ route('admin.message.read', $msg) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-mark">
                            <i class="fas fa-check"></i> Tandai Dibaca
                        </button>
                    </form>
                @else
                    <span class="btn btn-done">
                        <i class="fas fa-check-double"></i> Sudah Dibaca
                    </span>
                @endif

                <form action="{{ route('admin.message.delete', $msg) }}" method="POST" style="display:inline;margin-left:auto;" onsubmit="return confirm('Hapus pesan dari {{ $msg->name }}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    @endif

</div>

</body>
</html>
