<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $mobile = htmlspecialchars($_POST["mobile"] ?? "");
    $course = htmlspecialchars($_POST["course"] ?? "");
    $interest = htmlspecialchars($_POST["interest"] ?? "");
    $gender = htmlspecialchars($_POST["gender"] ?? "");

    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Registration Successful</title>
        <link rel='stylesheet' href='../style.css'>
        <style>
            body { 
                background: #0b3079;
                min-height: 100vh;
                padding-top: 40px;
                font-family: 'Segoe UI', Arial;
            }
            .form-container {
                background: white;
                max-width: 600px;
                margin: auto;
                padding: 30px;
                border-radius: 16px;
                box-shadow: 0 8px 40px rgba(51, 83, 196, 0.15);
            }
            h2 {
                color: #3a5a98;
                text-align: center;
            }
            p {
                color: #2c3568;
                font-size: 16px;
            }
            a {
                display: block;
                margin-top: 20px;
                text-align: center;
                color: #3a5a98;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class='form-container'>
            <h2>Registration Successful!</h2>

            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mobile No:</strong> $mobile</p>
            <p><strong>Course:</strong> $course</p>
            <p><strong>Interest:</strong> $interest</p>
            <p><strong>Gender:</strong> $gender</p>

            <a href='../index.html'>Back to Registration Form</a>
        </div>
    </body>
    </html>";
} else {
    echo "Access denied.";
}
?>
