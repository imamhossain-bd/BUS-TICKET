<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: Pages/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turist Authentication</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <section>
            <div id="navbar" class="w-full h-28 px-10 py-5 bg-slate-200">
                <div class="flex justify-between h-20 py-5">
                    <div id="logo">
                        <h2 class="text-2xl font-bold">P-TICKET</h2>
                    </div>
                    <div id="menu" class="py-1 text-xl font-semibold">
                        <ul class="flex gap-10">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#destination">Destination</a></li>
                            <li><a href="#search">Search</a></li>
                        </ul>
                    </div>
                    <div id="login_logout">
                        <a href="logout.php" class="h-11 rounded-xl text-xl font-bold w-24 bg-red-700 text-white">Log Out</a>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        <h1 class="text-center mt-10 text-3xl">Welcome, <?= htmlspecialchars($_SESSION['email']); ?>!</h1>
    </main>
</body>
</html>
