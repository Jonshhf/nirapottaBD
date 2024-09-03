<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch complaints
$sql = "SELECT id, location, description, created_at, image_path FROM complaints ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching complaints: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibrant Complaints Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #f39c12;
            --background-color: #f0f4f8;
            --card-color: #ffffff;
            --text-color: #333333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5em;
            margin-bottom: 40px;
            font-weight: 600;
        }
        .complaint-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        .complaint-card {
            background-color: var(--card-color);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            animation: popIn 0.5s cubic-bezier(0.26, 0.53, 0.74, 1.48) forwards;
        }
        .complaint-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .complaint-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .complaint-content {
            padding: 20px;
        }
        .complaint-id {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8em;
            font-weight: 600;
        }
        .complaint-location {
            font-size: 1.2em;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        .complaint-description {
            font-size: 0.9em;
            color: var(--text-color);
            margin-bottom: 15px;
        }
        .complaint-date {
            font-size: 0.8em;
            color: #777;
            text-align: right;
            font-style: italic;
        }
        .no-complaints {
            grid-column: 1 / -1;
            text-align: center;
            color: #777;
            font-style: italic;
        }
        @keyframes popIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vibrant Complaints Dashboard</h1>
        
        <div class="complaint-grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = htmlspecialchars($row["id"]);
                    $location = htmlspecialchars($row["location"]);
                    $description = htmlspecialchars($row["description"]);
                    $created_at = date("F j, Y, g:i a", strtotime($row["created_at"]));
            ?>
                <div class="complaint-card">
                    <div class="complaint-id">#<?php echo $id; ?></div>
                    <br><br>
                    <div class="complaint-content">
                        <div class="complaint-location"><?php echo $location; ?></div>
                        <div class="complaint-description"><?php echo $description; ?></div>
                        <div class="complaint-date"><?php echo $created_at; ?></div>
                    </div>
                </div>
            <?php
                }
            } else {
                echo "<p class='no-complaints'>No complaints found.</p>";
            }

            // Close the database connection after finishing all operations
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
