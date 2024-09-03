<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Complaint Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            background-image: linear-gradient(135deg, rgba(240,240,240,1) 25%, rgba(255,255,255,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            position: relative;
        }

        /* Background Animation */
        .floating-circles {
            position: absolute;
            top: -50px;
            left: -50px;
            right: -50px;
            bottom: -50px;
            z-index: -1;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 123, 255, 0.1);
            animation: float 10s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(20px); }
        }

        .circle:nth-child(1) {
            width: 200px;
            height: 200px;
            top: 20%;
            left: 20%;
            animation-duration: 15s;
        }

        .circle:nth-child(2) {
            width: 150px;
            height: 150px;
            bottom: 15%;
            right: 25%;
            animation-duration: 12s;
        }

        .circle:nth-child(3) {
            width: 300px;
            height: 300px;
            top: 60%;
            left: 60%;
            animation-duration: 20s;
        }

        .complaint-card {
            background: #ffffff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            width: 360px;
            text-align: center;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .complaint-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .complaint-card img {
            max-width: 190px;
            animation: pop 0.6s ease-in-out;
        }

        @keyframes pop {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .btn-custom {
            width: 100%;
            margin-top: 15px;
            padding: 15px;
            border: none;
            border-radius: 50px;
            background: linear-gradient(45deg, #007bff, #00c6ff);
            color: #ffffff;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
        }

        .btn-custom:hover {
            background: linear-gradient(45deg, #0056b3, #0080ff);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
        }

        .btn-custom-danger {
            background: linear-gradient(45deg, #ff3860, #ff6b6b);
            box-shadow: 0 4px 10px rgba(255, 56, 96, 0.2);
        }

        .btn-custom-danger:hover {
            background: linear-gradient(45deg, #ff1744, #ff4f5e);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 56, 96, 0.3);
        }

        .divider-line {
            height: 2px;
            width: 80px;
            background-color: #dee2e6;
            margin: 25px auto;
        }
    </style>
</head>
<body>

    <!-- Floating Circles Background Animation -->
    <div class="floating-circles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    
    <!-- Complaint Card -->
    <div class="complaint-card">
        <img src="img/complaingif.gif" alt="Complain Gif">
        <div class="divider-line"></div>
        <p>অভিযোগ স্থান: বীরগঞ্জ, দিনাজপুর </p>
        <button class="btn2 btn-custom " onclick="general_complain()">অভিযোগ করুন </button>
       
    </div>
     <br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
