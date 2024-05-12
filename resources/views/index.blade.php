<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
</head>

<body class="bg-slate-950">

    <!-- nav bar -->
    <nav class="sticky top-0 py-4 text-gray-300 shadow-md shadow-slate-950 backdrop-blur-md bg-slate-950/30">
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


    <section class="w-full bg-left bg-cover bg-[url('/public/assets/images/glow-bottom.svg')]">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-center w-full py-24 space-x-2 shadow-lg">
                <div class="text-[40px] text-gray-300">
                    <h1>Welcome </h1>
                    <h1 class="text-[25px]">to kabir dev</h1>

                    <div class="text-lg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente reprehenderit
                            repellat possimus veniam non recusandae eius dignissimos impedit. Officia in placeat
                            accusamus consequatur qui odio a dolorum excepturi autem?</p>
                    </div>
                </div>
                <div class="w-full text-[40px] text-gray-300 text-right">
                    <div class="flex justify-end w-full">
                        <img class="w-full" src="{{ asset('assets/images/doodles_mixed_round.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-center w-full py-16 space-x-2">

                <div class="text-[40px] text-gray-300 text-right">
                    <div class="">
                        <img class="w-full" src="{{ asset('assets/images/doodles_mixed_round.svg') }}" alt="">
                    </div>
                </div>

                <div class="text-[40px] text-gray-300">
                    <h1 class="font-bold underline">About Us </h1>
                    <h1 class="text-[25px]">to kabir dev</h1>

                    <div class="text-lg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente reprehenderit
                            repellat possimus veniam non recusandae eius dignissimos impedit. Officia in placeat
                            accusamus consequatur qui odio a dolorum excepturi autem?</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full py-16 space-x-2">

                <div class="flex justify-center">
                    <h1 class="text-[40px] text-gray-300 font-bold">Protfolio</h1>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>
                    <div class="p-2 border">
                        <img src="https://picsum.photos/seed/picsum/800/800" alt="">

                        <div class="text-gray-300">
                            <h1 class="font-bold">Hello</h1>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>





</body>

</html>
