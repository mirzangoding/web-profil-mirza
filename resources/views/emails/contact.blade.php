<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f1f5f9; color: #1e293b; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        .header { background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%); padding: 40px 32px; text-align: center; }
        .header h1 { color: #ffffff; font-size: 22px; font-weight: 700; letter-spacing: -0.3px; }
        .header p { color: rgba(255,255,255,0.75); font-size: 13px; margin-top: 6px; }
        .badge { display: inline-block; background: rgba(255,255,255,0.15); color: #fff; font-size: 11px; font-weight: 600; padding: 4px 14px; border-radius: 50px; margin-top: 12px; letter-spacing: 0.08em; text-transform: uppercase; }
        .body { padding: 36px 32px; }
        .greeting { font-size: 15px; color: #64748b; margin-bottom: 24px; }
        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 28px; }
        .info-table tr { border-bottom: 1px solid #f1f5f9; }
        .info-table tr:last-child { border-bottom: none; }
        .info-table td { padding: 12px 8px; font-size: 14px; vertical-align: top; }
        .info-table .label { color: #94a3b8; font-weight: 600; width: 130px; text-transform: uppercase; font-size: 11px; letter-spacing: 0.06em; padding-top: 14px; }
        .info-table .value { color: #1e293b; font-weight: 500; }
        .service-tag { display: inline-block; background: #eff6ff; color: #2563eb; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 50px; }
        .message-box { background: #f8fafc; border-left: 4px solid #2563eb; border-radius: 0 8px 8px 0; padding: 20px 24px; margin-bottom: 28px; }
        .message-box .msg-label { font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px; }
        .message-box p { font-size: 14px; line-height: 1.7; color: #334155; white-space: pre-line; }
        .reply-btn { display: block; text-align: center; background: linear-gradient(135deg, #1e3a5f, #2563eb); color: #ffffff !important; text-decoration: none; padding: 14px 32px; border-radius: 8px; font-size: 14px; font-weight: 600; margin-bottom: 8px; }
        .footer { background: #f8fafc; padding: 24px 32px; text-align: center; border-top: 1px solid #e2e8f0; }
        .footer p { font-size: 12px; color: #94a3b8; line-height: 1.6; }
        .footer strong { color: #64748b; }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="header">
            <h1>✉️ Pesan Baru Masuk!</h1>
            <p>Seseorang menghubungi kamu melalui portfolio website</p>
            <span class="badge">Mirza Creative Portfolio</span>
        </div>

        <!-- Body -->
        <div class="body">
            <p class="greeting">Hallo <strong>Mirza</strong>, kamu mendapat pesan baru dari portfolio website kamu:</p>

            <table class="info-table">
                <tr>
                    <td class="label">Nama</td>
                    <td class="value">{{ $senderName }}</td>
                </tr>
                <tr>
                    <td class="label">Email</td>
                    <td class="value"><a href="mailto:{{ $senderEmail }}" style="color:#2563eb;">{{ $senderEmail }}</a></td>
                </tr>
                <tr>
                    <td class="label">Subjek</td>
                    <td class="value">{{ $subject }}</td>
                </tr>
                <tr>
                    <td class="label">Layanan</td>
                    <td class="value">
                        @if($service && $service !== '-')
                            <span class="service-tag">{{ ucfirst($service) }}</span>
                        @else
                            <span style="color:#94a3b8;">—</span>
                        @endif
                    </td>
                </tr>
            </table>

            <!-- Message -->
            <div class="message-box">
                <div class="msg-label">Pesan</div>
                <p>{{ $userMessage }}</p>
            </div>

            <!-- CTA -->
            <a href="mailto:{{ $senderEmail }}?subject=Re: {{ $subject }}" class="reply-btn">
                Balas Pesan Sekarang →
            </a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Email ini dikirim otomatis dari <strong>Mirza Creative Portfolio</strong>.<br>
            Jangan membalas email ini secara langsung — gunakan tombol di atas.</p>
        </div>
    </div>
</body>
</html>
