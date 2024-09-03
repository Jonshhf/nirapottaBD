<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Submitted Successfully</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <style>
        body {
            background-color: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .success-message {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h1 {
            color: #27ae60;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            color: #34495e;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .gif-container {
            margin-bottom: 1.5rem;
            animation: bounceIn 1s ease-in-out;
        }

        @keyframes bounceIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #countdown {
            font-size: 1.2rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        @media (max-width: 576px) {
            .success-message {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="success-message" id="successMessage">
        <div class="gif-container">
            <img src="img/success.gif" alt="Success GIF" class="img-fluid">
        </div>
        <h1>অভিযোগ সফলভাবে জমা দেওয়া হয়েছে।</h1>
        <p><br>আমাদের নির্ধারিত সময় শেষ হওয়ার আগেই পদক্ষেপ গ্রহণ করা হবে।</p>
        <div id="countdown"></div>
        <a href="index.php" class="btn btn-primary">হোমপেজে ফিরে যান</a>
    </div>

    <script>
       // Set the date we're counting down to
var countDownDate = new Date().getTime() + 8 * 60 * 60 * 1000; // 8 hours from now

// Update the countdown every 1 second
var x = setInterval(function() {
    // Get the current time
    var now = new Date().getTime();

    // Calculate the remaining time
    var distance = countDownDate - now;

    // Calculate hours, minutes, and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById("countdown").innerHTML = 
        hours + " ঘন্টা " + minutes + " মিনিট " + seconds + " সেকেন্ড ";

    // If the countdown is finished, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "সময় শেষ হয়েছে";
    }
}, 1000);
    </script>
</body>

</html>