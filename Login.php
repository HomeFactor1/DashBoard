<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = "admin";
    $admin_password = "admin123";

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    // Check if entered credentials match the admin credentials
    if ($entered_username === $admin_username && $entered_password === $admin_password) {
        // Redirect to the admin panel or perform other actions
        header("Location: admin.html");
        exit();
    } else {
        // Incorrect credentials, handle accordingly (e.g., display an error message)
        echo "Incorrect username or password";
    }
}
?>
