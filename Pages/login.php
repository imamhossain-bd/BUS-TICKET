<?php
session_start();

// Dummy credentials
$validEmail = "user@gmail.com";
$validPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];

    if ($email === $validEmail && $password === $validPassword) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirect to home page
        header("Location: ../main.php");
        exit();
    } else {
        $errorMessage = "Invalid email or password.";
    }
}
?>

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
