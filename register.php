<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $grade = $_POST["grade"];
    $email = $_POST["email"];

    // Saving data to admin HTML file
    $admin_html = "<p>Name: $name</p><p>Age: $age</p><p>Grade: $grade</p><p>Email: $email</p>";
    file_put_contents('admin_registration.html', $admin_html, FILE_APPEND);

    // Redirecting back to the registration page
    header('Location: admin_registration.html');
    exit;
}
?>

