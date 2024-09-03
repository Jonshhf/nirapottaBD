<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize response array
$response = array('status' => 'error', 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $conn->real_escape_string($_POST['name'] ?? '');
    $phone = $conn->real_escape_string($_POST['phone'] ?? '');
    $location = $conn->real_escape_string($_POST['location']);
    $description = $conn->real_escape_string($_POST['description']);
    $is_anonymous = isset($_POST['hidePersonalInfo']) ? 1 : 0;

    // Handle file upload
    $image_path = '';
    if (isset($_FILES['imageUpload']) && $_FILES['imageUpload']['error'] == 0) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
        if($check !== false) {
            // Allow certain file formats
            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
                if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
                    $image_path = $target_file;
                } else {
                    $response['message'] = "Sorry, there was an error uploading your file.";
                }
            } else {
                $response['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        } else {
            $response['message'] = "File is not an image.";
        }
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO complaints (name, phone, location, description, image_path, is_anonymous) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $phone, $location, $description, $image_path, $is_anonymous);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = "অভিযোগ সফলভাবে জমা দেওয়া হয়েছে।";
        $response['redirect'] = 'success.php';
    } else {
        $response['status'] = 'error';
        $response['message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>