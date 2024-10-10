<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response to Your Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
            font-size: 24px;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
            color: #555;
        }
        .email-footer {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Hi {{ $contactName }},</h1>
        <p>Thank you for reaching out to us. We truly value your interest in SMK Lentera Bangsa. Below is the response to your inquiry:</p>
        <p><strong>{{ $responseMessage }}</strong></p>
        <p>If you have any further questions or need more information, feel free to <a href="mailto:info@lenterabangsa.sch.id">contact us</a>.</p>
        <p>Best regards,<br><strong>SMK Lentera Bangsa</strong></p>
        <div class="email-footer">
            <p>&copy; 2024 SMK Lentera Bangsa. All Rights Reserved.<br>
            Visit us at <a href="https://lenterabangsa.sch.id">www.lenterabangsa.sch.id</a></p>
        </div>
    </div>
</body>
</html>
