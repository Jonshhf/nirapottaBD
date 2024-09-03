<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Teacher Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .custom-navbar {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }
        .custom-navbar li a {
            text-decoration: none;
            cursor: pointer;
            color: #4a4a4a;
            font-size: 20px;
            padding: 10px 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .custom-navbar li a:hover,
        .custom-navbar li a.active {
            background-color: #fad0c4;
            color: black;
        }
        .teacher-card {
            height: 400px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .teacher-card:hover {
            transform: translateY(-10px);
        }
        .card-content {
            background-color: #ffffff;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .teacher-image {
            width: 150px;
            height: 150px;
            border-radius: 10%;
            object-fit: cover;
            border: 2px solid black;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .teacher-card:hover .teacher-image {
            transform: scale(1.1);
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <nav class="custom-navbar mb-4">
        <ul>
            <li><a href="#" onclick="Vollenter()">সেচ্ছাসেবক</a></li>
            <li><a onclick="prosason()">প্রশাসন</a></li>
            <li><a class="active">পুলিশ কর্মকর্তা</a></li>
        </ul>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-5">পুলিশ প্রশাসন</h1>
        <div class="row d-flex justify-content-center align-items-center">
            <!-- Teacher 1 -->
            <div class="col-md-4 mb-4">
                <div class="teacher-card">
                    <div class="card-content">
                        <img src="img/police_mujibur.jpg" alt="Sarah Johnson" class="teacher-image floating">
                        <h3>মজিবুর রহমান</h3>
                        <p>পুলিশ পরিদর্শক (নিরস্ত্র)</p>
                        <p><i class="fa-solid fa-phone"></i> 01320-136495</p>
                        <p><i class="fa-regular fa-envelope"></i>  ocbirganjpsdinajpur@gmail.com</p>
                        <a href="tel:01320136495" class="btn btn-primary mt-2"><i class="fa-solid fa-phone"></i> Live Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
