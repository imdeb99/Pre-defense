<?php
session_start();

if (isset($_POST['login'])) {
    $l_email = $_POST['l_email'];
    $l_pass = $_POST['l_pass'];

    if (empty($l_email) || empty($l_pass)) {
        $_SESSION['login_error'] = "Please fill in all the fields";
        header('Location: login.php');
        exit();
    }

    include 'config.php';

    // Check if the email and password match a user in the database (case-insensitive)
    $result = mysqli_query($conn, "SELECT * FROM register WHERE LOWER(db_email) = '$l_email'");
    
    if (mysqli_num_rows($result) > 0) {
        $userRow = mysqli_fetch_assoc($result);

        if ($userRow['is_verified'] == 1 && password_verify($l_pass, $userRow['db_password'])) {
            $_SESSION['email'] = $l_email; // Create a session variable for the logged-in user
            header('Location: resturents.php'); // Redirect to the regular user home page
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid Credentials or Email not verified";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found";
        header('Location: login.php');
        exit();
    }
}
?>

