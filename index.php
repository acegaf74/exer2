<?php
include "content/header.php";
include "resources/item.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exer2</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#fff]">
    <header>
        <div class="hidden md:block items-center md:max-w-[1280px] bg-[#000] text-[#fff] text-xs px-25 py-1.5 mx-auto">
            <span><?= $currentDate ?></span>
        </div>
        <div class="md:hidden flex justify-center px-3 py-3">
            <a href="">
                Banner here
                <!-- <img src="" class="h-20" alt=""> -->
            </a>
        </div>
        <div class="hidden md:flex md:max-w-[1280px] justify-center gap-10 mx-auto py-5">
            <img src="resources/image/Logo.jpg" class="h-20 w-20" alt="Logo Auditores Company">
            <a href="">
                Banner here
                <!-- <img src="" class="h-20" alt=""> -->
            </a>
        </div>
        <div class="flex justify-around md:max-w-[1080px] md:justify-start gap-5 bg-[#141414] text-[#fff] py-1 px-5 md:py-0 md:px-3 mx-auto">
            <a href="#" class="hidden md:block bg-[#e50]">Home</a>
            <a href="#" class="hidden md:block">Movie</a>
            <a href="#" class="hidden md:block">Series</a>
            <img src="resources/image/Logo.jpg" class="md:hidden h-15 w-15" alt="Logo Auditores Company">
        </div>
    </header>
    <main>
        <h2></h2>
    </main>
</body>

</html>