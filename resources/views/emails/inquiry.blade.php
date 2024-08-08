<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 0;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007BFF;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
        .details {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #555;
        }
        /* Responsive Styles */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
            h2 {
                font-size: 1.2em;
            }
            p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Inquiry Received</h2>
        <p>Dear Team,</p>
        <p>I hope this email finds you well.</p>
        <p>We’ve received a new inquiry through our website. Below are the details:</p>
        <div class="details">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Company:</strong> {{ $user->company_name }}</p>
            <p><strong>Phone:</strong> {{ $user->phone_number }}</p>
            <p><strong>GST Number:</strong> {{ $user->gst_number }}</p>
            <p><strong>Prospect Type:</strong> {{ $user->occupation_type === 'D' ? 'Distributor' : ($user->occupation_type === 'EPC' ? 'EPC' : 'End-User') }}</p>
            <p><strong>Interested In:</strong> {{ $user->phase === 'SP' ? 'Single Phase' : 'Three Phase' }}</p>
            <p><strong>Quantity:</strong> {{ $user->quantity_range }}</p>
        </div>
        <p>Reach out to the prospect at your earliest convenience to offer assistance, answer questions, and guide them through the next steps in our sales process.</p>
        <p class="footer">Thank you for your continued dedication to driving our business forward.</p>
        <p class="footer">Best regards,<br>Xwatt</p>
    </div>
</body>
</html>
