<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section>
    <div id="form_data">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="full_form">
                <h2 class="text-center text-2xl mt-5 mb-5 font-bold">Login</h2>
                <?php if (!empty($errorMessage)): ?>
                    <p style="color: red; text-align: center;"><?= htmlspecialchars($errorMessage) ?></p>
                <?php endif; ?>
                <div id="input_label">
                    <label for="email">Email</label><br>
                    <input type="email" name="inputEmail" id="email" placeholder="Enter Your Email" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="inputPassword" id="password" placeholder="Enter Password" required><br>
                </div>
                <div id="submit_btn">
                    <button type="submit" name="btn_submit" value="Submit">Log In</button>
                </div>
                <div class="mt-5 text-center">
                    <a href="../main.php">Back To Home..?</a>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>



<?php
session_start();

// Error message variable
$errorMessage = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $email = filter_var($_POST['inputEmail'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['inputPassword'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email format.";
    } elseif (strlen($password) < 8) {
        $errorMessage = "Password must be at least 8 characters long.";
    } else {
        // Simulated database validation (replace with actual DB check)
        $validEmail = "user@example.com";
        $validPasswordHash = password_hash("password123", PASSWORD_DEFAULT);

        if ($email === $validEmail && password_verify($password, $validPasswordHash)) {
            // Successful login
            $_SESSION['logged_in'] = true;
            $_SESSION['user_email'] = $email;
            header("Location: ../main.php"); // Redirect to main page
            exit;
        } else {
            $errorMessage = "Invalid email or password.";
        }
    }
}
?>

