<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; color: #222; background: #f8f8f8; margin: 0; padding: 0; }
        .wrapper { max-width: 560px; margin: 40px auto; background: #fff; border-radius: 8px; overflow: hidden; }
        .header { background: #1a1a1a; padding: 28px 32px; }
        .header span { font-family: monospace; font-size: 1.2rem; font-weight: bold; color: #c8a97e; letter-spacing: 0.2em; }
        .body { padding: 32px; }
        .label { font-family: monospace; font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase; color: #c8a97e; margin-bottom: 4px; }
        .value { font-size: 0.95rem; color: #222; margin-bottom: 20px; }
        .message-box { background: #f8f8f8; border-left: 3px solid #c8a97e; padding: 16px 20px; border-radius: 4px; }
        .footer { padding: 16px 32px; border-top: 1px solid #eee; font-family: monospace; font-size: 0.7rem; color: #999; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <span>GRIND</span>
        </div>
        <div class="body">
            <p class="label">From</p>
            <p class="value">{{ $senderName }} &lt;{{ $senderEmail }}&gt;</p>

            <p class="label">Message</p>
            <div class="message-box">
                <p class="value" style="margin:0; white-space: pre-wrap;">{{ $senderMessage }}</p>
            </div>
        </div>
        <div class="footer">
            Sent via the contact form at grindcoffee.ph
        </div>
    </div>
</body>
</html>
