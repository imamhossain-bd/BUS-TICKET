<?php session_start(); ?>
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
            <div id="navbar" class="w-full h-28 px-12 py-5">
                <div class="flex justify-between h-20 py-5">
                    <div id="logo">
                        <h2 class="text-2xl font-bold"><a href="">P-TICKET</a></h2>
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
                            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                                <!-- Log Out Button -->
                                <button>
                                    <a href="Pages/login.php" class="h-11 rounded-xl text-xl py-3 px-7 border-2 border-[#1DD100] font-bold w-24 bg-[#1DD100]/10 text-[#1DD100]">
                                        Log Out
                                    </a>
                                </button>
                            <?php else: ?>
                                <!-- Log In Button -->
                                <button>
                                    <a href="Pages/login.php" class="h-11 rounded-xl text-xl py-3 px-7 border-2 border-[#1DD100] font-bold w-24 bg-[#1DD100]/10 text-[#1DD100]">
                                        Log In
                                    </a>
                                </button>
                            <?php endif;?>
                        </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-[url('images/Rectangle3.png')] z-10 h-screen bg-cover bg-center">
                
            </div>
        </section>
    </header>
    <main>
        
    </main>

<?php
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header("Location: Pages/login.php");
            exit;
        }
?>
</body>
</html>
