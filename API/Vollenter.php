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
            transform: scale(1.1);
        }
        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .card-title {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }
        .btn-danger {
            background-color: #ff5f6d;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #ff2a40;
            transform: scale(1.1);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fadeInUp {
            animation: fadeInUp 0.8s ease forwards;
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
            <li><a class="active" onclick="Vollenter()">সেচ্ছাসেবক</a></li>
            <li><a onclick="prosason()">প্রশাসন</a></li>
            <li><a onclick="pulice()">পুলিশ কর্মকর্তা</a></li>
        </ul>
    </nav>

    <div class="container fadeInUp">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">এমার্জেন্সি সাহায্য</h5>
                        <p class="card-text">এমার্জেন্সি সাহায্যের জন্য স্বেচ্ছাসেবকদের সাথে যোগাযোগ করুন!</p>
                        <p><i class="fa fa-envelope"></i> Email: example@email.com</p>
                        <a href="tel:+1234567890" class="btn btn-danger"><i class="fa fa-phone"></i> Emergency Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h6 class="text-center mb-5"></h6>
        <div class="row d-flex justify-content-center align-items-center">
            <!-- Teacher 1 -->
            <div class="col-md-4 mb-4">
                <div class="teacher-card">
                    <div class="card-content">
                        <img src="img/pranto.jpeg" alt="Sarah Johnson" class="teacher-image floating">
                        <h3>প্রান্ত রায়</h3>
                        <p>সফটওয়্যার ডেভেলপার</p>
                        <p><i class="fa-solid fa-phone"></i> 01842494422</p>
                        <p><i class="fa-regular fa-envelope"></i>  prantoroy23006@gmail.com</p>
                        <a href="tel:01842494422" class="btn btn-primary mt-2"><i class="fa-solid fa-phone"></i> Live Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
