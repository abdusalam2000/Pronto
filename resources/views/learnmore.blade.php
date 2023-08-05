<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Landing</title>
</head>

<body class="text antialiased">

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="{{ url('logo.jpg') }}" class="h-9 mr-3" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <div class="flex md:order-2">
                <a href="learnmore/ar"><button type="button"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xl px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i
                            class="fa fa-language" aria-hidden="true"></i></button></a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    </div>
    <main>
        <div class="relative pt-32 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
            ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="">
                            <h1 class="text-white font-semibold text-5xl">
                                Effortless Shopping Experience
                            </h1>
                            <p class="mt-4 text-lg text-white">
                                Welcome to Pronto, where we make shopping effortless and bring all your favorite
                                products right to your doorstep. We believe that shopping should be easy and
                                stress-free, which is why we've created an online shopping experience that's simple and
                                straightforward.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div {{-- class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
            style="transform: translateZ(0px)" --}}>
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-8 pb-2 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Wide Selection of High-Quality Products</h6>
                                <p class="mt-2 mb-8 ">
                                    Our goal is to provide you with a wide selection of high-quality products at
                                    affordable prices. Whether you're looking for the latest fashion trends, home decor
                                    essentials, or the hottest tech gadgets, we've got you covered. With Pronto, you can
                                    shop from the comfort of your own home and have your purchases delivered right to
                                    your door.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <h6 class="text-xl font-semibold">User-Friendly and Intuitive Platform</h6>
                                <p class="mt-2 mb-4 text">
                                    We understand that shopping online can be overwhelming, which is why we've designed
                                    our platform to be user-friendly and intuitive. You can easily search for products,
                                    filter your search results, and read reviews from other customers. Plus, our
                                    customer support team is always available to assist you with any questions or
                                    concerns you may have.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                    <i class="fa-solid fa-coins"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Save Time and Money</h6>
                                <p class="mt-2 mb-3 text">
                                    At Pronto, we're dedicated to providing you with an effortless shopping experience
                                    that saves you time and money. Our user-friendly platform offers a wide selection of
                                    high-quality products at affordable prices, including the latest fashion trends,
                                    home decor essentials, and the hottest tech gadgets. Sign up for our email list to
                                    stay up-to-date on our latest deals and promotions, and start shopping with Pronto
                                    today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <footer class="relative bg-gray-800 pt-8 pb-6">

        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-center lg:text-center">
                <div class="w-full  px-4">
                    <h4 class="text-3xl font-semibold text-white">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-white">
                        Find us on any of these platforms
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-linkedin"></i>
                        </button>
                    </div>
                </div>

            </div>
            <hr class="my-6 border-gray-300" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4  text-center text-white">
                    <div class="text-sm text font-semibold py-1">
                        Copyright © <span id="get-current-year"></span>
                        All rights reserved.
                        by
                        <a href="/" class="text hover:text-800">Pronto</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
