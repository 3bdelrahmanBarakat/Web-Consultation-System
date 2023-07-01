<!DOCTYPE html>
<html>
<head>
    <title>Booking Accepted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            margin-top: 20px;
        }

        .content h2 {
            margin-top: 0;
        }

        .content ul {
            padding-left: 20px;
            list-style-type: none;
        }

        .content ul li {
            margin-bottom: 10px;
        }

        .content ul li strong {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Booking Accepted</h2>
        </div>
        <div class="content">
            <p>Dear Mentee,</p>
            <p>Your booking has been accepted. Here are the details:</p>
            <ul>
                <li><strong>Mentor:</strong> {{ $mentorName }}</li>
                <li><strong>Mentor Email:</strong> {{ $mentorEmail }}</li>
                <li><strong>Timing Details:</strong> {{ $day }}, From: {{$start_time}}, To: {{$end_time}}</li>
                <li><strong>Total Fees:</strong> {{ $totalFees }}</li>
            </ul>
            <p>Thank you for booking with us!</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} MentorQuest. All rights reserved.
        </div>
    </div>
</body>
</html>

