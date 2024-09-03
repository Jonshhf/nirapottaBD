<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Simple Complaint System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #f4f4f4;
            --text-color: #333;
            --accent-color: #e74c3c;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .complaint-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .complaint-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color), var(--accent-color));
        }

        .form-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2.2rem;
            position: relative;
        }

        .form-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
            margin: 10px auto 0;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #e0e0e0;
            border-radius: 0;
            padding: 0.75rem 0;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }

        .form-label {
            color: var(--text-color);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .custom-file-upload {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .custom-file-upload:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .image-preview {
            max-width: 100%;
            max-height: 200px;
            border-radius: 10px;
            margin-top: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            color: var(--primary-color);
        }

        .info-text {
            background-color: #e8f4fd;
            border-left: 4px solid var(--primary-color);
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 0 5px 5px 0;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="complaint-container">
        <h2 class="form-title">অভিযোগ ফরম</h2>
        <div class="info-text">
        <p style="color:red;">অভিযোগ গ্রহণের সর্বোচ্চ ৮ ঘন্টার মধ্যেই ব্যবস্থা গ্রহণ করা হবে।</p>
            <p>✔ পরিচয় গোপন রাখতে চাইলে পরিচয় গোপন বাটনটি চালু করুন।</p>
        </div>
        <form id="complaintForm" action="submit_complaint.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="hidePersonalInfo" name="hidePersonalInfo">
                <label class="form-check-label" for="hidePersonalInfo">পরিচয় গোপন রাখুন</label>
            </div>

            <div class="personal-info">
                <div class="mb-4 form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="আপনার নাম">
                    <label for="name">নাম</label>
                </div>
                <div class="mb-4 form-floating">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="মোবাইল নম্বর">
                    <label for="phone">মোবাইল নম্বর</label>
                </div>
            </div>

            <div class="mb-4 form-floating">
                <input type="text" class="form-control" id="location" name="location" placeholder="ঘটনাস্থলের ঠিকানা">
                <label for="location">ঘটনাস্থলের ঠিকানা</label>
            </div>

            <div class="mb-4 form-floating">
                <textarea class="form-control" id="description" name="description" placeholder="আপনার অভিযোগ বর্ণনা করুন" style="height: 100px"></textarea>
                <label for="description">আপনার অভিযোগ বর্ণনা করুন</label>
            </div>
            <div class="info-text">
            <p>প্রমান হিসেবে কোনো ছবি থাকলে পাঠান। </p>
        </div>
            <div class="mb-4">
                <label for="imageUpload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt"></i> ছবি আপলোড করুন
                </label>
                <input type="file" id="imageUpload" name="imageUpload" accept="image/*" style="display:none;">
                <div id="imagePreviewContainer" class="mt-3" style="display:none;">
                    <img id="imagePreview" class="image-preview" src="#" alt="Image Preview">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">অভিযোগ জমা দিন</button>
        </form>
    </div>
  <br> <br> <br> 
    <script>
        const hidePersonalInfoCheckbox = document.getElementById('hidePersonalInfo');
        const personalInfoSection = document.querySelector('.personal-info');

        hidePersonalInfoCheckbox.addEventListener('change', function () {
            if (this.checked) {
                personalInfoSection.classList.add('hidden');
            } else {
                personalInfoSection.classList.remove('hidden');
            }
        });

        const imageUploadInput = document.getElementById('imageUpload');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');

        imageUploadInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.setAttribute('src', e.target.result);
                    imagePreview.style.opacity = "1";
                    imagePreview.style.transform = "translateY(0)";
                    imagePreviewContainer.style.display = "block";
                }
                reader.readAsDataURL(file);
            } else {
                imagePreviewContainer.style.display = "none";
            }
        });

        document.getElementById('complaintForm').addEventListener('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            fetch('submit_complaint.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Redirect to success.php
                        window.location.href = data.redirect;
                    } else {
                        // Show error popup
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while submitting the form.');
                });
        });
    </script>
</body>

</html>
