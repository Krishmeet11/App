<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mobile = htmlspecialchars($_POST["mobile"]);
    $course = htmlspecialchars($_POST["course"]);
    $interest = htmlspecialchars($_POST["interest"]);
    $gender = htmlspecialchars($_POST["gender"]);

    echo "<html><head><link rel='stylesheet' href='style.css'></head><body>";
    echo "<div class='form-container'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile No:</strong> $mobile</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Interest:</strong> $interest</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<a href='index.html' style='display:block;margin-top:16px;'>Back to Form</a>";
    echo "</div></body></html>";
} else {
    echo "Access denied.";
}
?>
