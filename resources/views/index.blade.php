<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
                font-family: "Ubuntu", sans-serif;
                /* font-weight: 700;
                font-style: normal; */
            }
    </style>
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
</head>

<body class="bg-slate-950">

    <!-- nav bar -->
    <nav class="absolute sticky top-0 py-4 text-gray-300 shadow-md shadow-slate-950 backdrop-blur-md bg-slate-950/30">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between space-x-4 text-lg font-bold">
                <div>
                    <a href="#">Kabir.dev</a>
                </div>
                <div>
                    <ul class="flex items-center justify-between space-x-4">
                        <li>Home</li>
                        <li>About</li>
                        <li>Services</li>
                        <li>Protfolio</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav bar end -->


    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-center w-full py-24 space-x-2">

                <div class="text-[40px] text-gray-300">
                    <h1 class="text-2xl ">Hello, my name is Humayon Kabir </h1>
                    <h1 class="text-[40px] font-bold">I'm Professional Web Designer & Wordpress Developer</h1>

                    <div class="text-lg">
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.
                        </p>
                    </div>
                </div>

                <div class="w-full text-[40px] text-gray-300 text-right w-2/5">
                    <div class="flex justify-end w-full">
                        <img class="w-full" src="{{ asset('assets/images/doodles_mixed_round.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-center w-full py-16 space-x-4">

                <div class="w-2/4 text-right text-gray-300">
                    <div class="">
                        <img class="w-full" src="{{ asset('assets/images/about.png') }}" alt="">
                    </div>
                </div>

                <div class="w-2/4 text-gray-300">
                    <h1 class="font-bold underline">About Us </h1>
                    <h1 class="text-2xl font-bold text-orange-300">Humayon Kabir</h1>
                    <h1 class="text-4xl font-bold">A professional web designer & developer</h1>

                    <div class="py-4 text-lg">
                        <p>
                            I design and develop services for customers specializing creating stylish, modern websites,
                            web services and online stores. My passion is to design digital user experiences through My
                            passion is to design digital user experiences through meaningful interactions. Check out my
                            Portfolio
                        </p>
                        <br>
                        <p>
                            I design and develop services for customers specializing creating stylish, modern websites,
                            web services and online stores.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full py-16 space-x-2">

                <div class="py-4 text-center">
                    <h1 class="text-4xl font-bold text-gray-300">My Services</h1>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet
                        maximus est.</p>
                </div>

                <div class="grid grid-cols-2 gap-2 md:gap-4 md:grid-cols-4">
                    <div class="p-2 border">
                        <div>
                            <span class="icon-[fa-solid--laptop-code]" style="width: 24px; height: 24px; color: #c55d07;"></span>
                        </div>

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello
                                <span class="icon-[material-symbols--10k-outline]" style="width: 24px; height: 24px; color: #c55d07;"></span>
                            </h1>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>





</body>

</html>
