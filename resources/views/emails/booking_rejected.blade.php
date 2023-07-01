<!DOCTYPE html>
<html>
<head>
    <title>Booking Rejected</title>
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

        .refund {
            margin-top: 20px;
        }

        .mentor-message {
            margin-top: 20px;
            border: 1px solid #dddddd;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .mentor-message p {
            margin: 0;
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
            <h2>Booking Rejected</h2>
        </div>
        <div class="content">
            <p>Dear Mentee,</p>
            <p>Unfortunately, your booking has been rejected. Here are the details:</p>
            <ul>
                <li><strong>Mentor:</strong> {{ $mentorName }}</li>
                <li><strong>Mentor Email:</strong> {{ $mentorEmail }}</li>
                <li><strong>Timing Details:</strong>  {{ $day }}, From: {{$start_time}}, To: {{$end_time}}</li>
                <li><strong>Total Fees:</strong> {{ $totalFees }}</li>
            </ul>
            <p>We apologize for any inconvenience caused.</p>
            <div class="mentor-message">
                <p><strong>Rejection Message from Mentor:</strong></p>
                <p>{{ $rejectionMessage }}</p>
            </div>
            <p>Your payment will be refunded in accordance with our refund policy.</p>
            <div class="refund">
                <p><strong>Refund Information:</strong></p>
                <ul>
                    <li>Refund Amount: ${{ $totalFees }}</li>
                    <li>Refund Method: Please allow 5-7 business days for the refund to be processed to the original payment method.</li>
                </ul>
            </div>
            <p>If you have any further questions, please feel free to contact us.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} MentorQuest. All rights reserved.
        </div>
    </div>
</body>
</html>
