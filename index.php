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
        <div class="flex justify-around md:max-w-[1080px] md:justify-start gap-3 bg-[#141414] text-[#fff] py-1 px-5 md:py-0 md:px-3 mx-auto">
            <a href="#" class="hidden md:block bg-[#e50] px-2">Home</a>
            <a href="#" class="hidden md:block px-2">Movie</a>
            <a href="#" class="hidden md:block px-2">Series</a>
            <img src="resources/image/Logo.jpg" class="md:hidden h-15 w-15" alt="Logo Auditores Company">
        </div>
    </header>
    <main>
        <div class="flex max-w-[1080px] mx-auto pt-5">
            <div class="bg-[#000] text-[#fff] px-2 pt-0.5 w-full max-w-fit">
                <h2 class="text-sm">LATEST ARTICLES</h2>
            </div>
            <div class="bg-[#fff] border-b-2 border-[#000] text-[#fff] w-full">
                <h2 class="text-md">...</h2>
            </div>
        </div>
        <div class="flex max-w-[1080px] mx-auto pt-5">
            <img src="resources/image/Salak.jpg" class="w-60 h-40 object-cover" alt="Salak">
            <div class="px-5">
                <a href="#" class="text-lg font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo ut consequatur nihil officiis facilis.</a>
                <div class="flex pt-1">
                    <div class="bg-[#121212] p-1 text-[#fff] text-xs max-w-fit mr-1">
                        <a href="#">News</a>
                    </div>
                    <a href="#" class="text-[#121212] text-xs p-1 font-bold mr-1">Ace Auditore</a>
                    <span class="text-[#bbb] text-xs p-1"><?= $currentDate ?></span>
                </div>
                <div class="text-md text-[#777] pt-1 max-w-200">
                    <span><?= $currentDate ?> - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor recusandae assumenda ex tempore debitis corporis, nesciunt eaque exercitationem excepturi. In, repellat suscipit recusandae animi quasi explicabo accusamus perferendis rerum dolorum?</span>
                </div>
            </div>
        </div>
        <div class="flex max-w-[1080px] mx-auto pt-10 justify-between text-sm">
            <div>
                <button class="border px-2 mx-1">1</button>
                <button class="border px-2 mx-1">2</button>
                <button class="border px-2 mx-1">3</button>
                <span class="px-2 mx-1">...</span>
                <button class="border px-2 mx-1">10</button>
                <button class="border px-2 mx-1">></button>
            </div>
            <span class="text-[#777]">Page 1 of 10</span>
        </div>
    </main>
    <footer>
        <div class="flex justify-start items-center bg-[#121212] gap-5 mt-10 py-10 px-25">
            <img src="resources/image/Logo.jpg" class="h-50" alt="Logo">
            <div class="text-[#fff]">
                <h2 class="font-bold">ABOUT US</h2>
                <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iste repudiandae neque voluptate quos, explicabo expedita ratione nostrum sit excepturi earum minima reprehenderit ullam facere in, debitis nobis? Illum, reiciendis.</span>
            </div>
            <div class="text-[#fff]">
                <h2 class="font-bold">FOLLOW US</h2>
                <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iste repudiandae neque voluptate quos, explicabo expedita ratione nostrum sit excepturi earum minima reprehenderit ullam facere in, debitis nobis? Illum, reiciendis.</span>
            </div>
        </div>
        <div class="bg-[#000] text-[#fff] text-xs flex justify-between py-1 px-25">
            <span>&copy; Auditores Company</span>
            <a href="#">Contact Us</a>
        </div>
    </footer>
</body>

</html>