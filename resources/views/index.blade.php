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

                <div class="w-full text-[40px] text-gray-300 text-right">
                    <div class="flex justify-end w-full">
                        <img class="w-full" src="{{ asset('assets/images/doodles_mixed_round.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="w-full bg-slate-900">
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

                <div class="grid grid-cols-2 gap-2 md:gap-4 md:grid-cols-3">
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Web Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Web Development</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">UI/UX Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">App Design & Develop</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Graphic Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">SEO Marketing</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>





    <section class="w-full bg-slate-900">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full py-16 space-x-2">

                <div class="py-4 text-center">
                    <h1 class="text-4xl font-bold text-gray-300">Let's Work Together!</h1>
                    <p class="py-6 text-gray-200">
                        I am available for freelance projects. Hire me and get your project done.
                    </p>

                    <a class="px-4 py-2 border rounded-lg bg-slate-950 border-slate-600 text-slate-200" href="">HIRE ME</a>
                </div>

            </div>
        </div>
    </section>



    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full py-16 space-x-2">

                <div class="py-4 text-center">
                    <h1 class="text-4xl font-bold text-gray-300">My Latest Portfolio</h1>
                    <p class="text-gray-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet maximus est.
                    </p>
                </div>



                <div class="grid grid-cols-2 gap-2 md:gap-4 md:grid-cols-3">
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Web Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Web Development</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">UI/UX Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">App Design & Develop</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">Graphic Design</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>
                    <div class="p-4 py-6 border hover:shadow-lg border-slate-700">
                        <div class="flex items-center justify-center py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="64" viewBox="0 0 640 512">
                                <path fill="#c55d07" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16M576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512zm-64 272H128V64h384z" />
                            </svg>
                        </div>

                        <div class="text-center text-gray-300">
                            <h1 class="text-2xl font-bold">SEO Marketing</h1>
                            <p>In nisi tortor, consequat eu semper ut, consequat in massa. Maecenas at odio a felis commodo pulvinar quis eu neque.</p>
                        </div>
                    </div>

                </div>





            </div>
        </div>
    </section>



    <section class="w-full bg-slate-900">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full py-16 space-x-2">

                <div class="py-4 text-center">
                    <h1 class="text-2xl font-bold text-gray-300">ANY QUESTION YOU HAVE</h1>
                    <p class="py-6 text-6xl font-bold text-gray-200">
                        +0158 852 1252
                    </p>

                    <a class="px-4 py-2 border rounded-lg bg-slate-950 border-slate-600 text-slate-200" href="">MAKE ME</a>
                </div>

            </div>
        </div>
    </section>



    <section class="w-full">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full space-x-2">

                <div class="py-4 text-center text-slate-300">
                    <p>
                        © 2021 Kabir, All Rights Reserved.
                    </p>
                </div>

            </div>
        </div>
    </section>


</body>

</html>
