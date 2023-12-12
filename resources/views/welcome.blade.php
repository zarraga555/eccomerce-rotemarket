<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--* favicon -->
    <link
        rel="shortcut icon"
        href="{{ asset('/image/rotemarket_favicon/favicon.ico') }}"
        type="image/x-icon"
    />
    <!--! css link -->
    <link rel="stylesheet" href="./assets/style.css"/>
    <!--? swiperjs cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--todo tailwind cdn link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>

    <title>eCommerece</title>
</head>
<body>
<!--! newspaper popup -->
<div
    id="newspaper"
    class="z-20 fixed w-screen h-screen hidden items-center justify-center"
>
    <div
        id="newspaperOverlay"
        class="z-10 fixed top-0 w-screen h-screen bg-[#00000066]"
    ></div>
    <div
        id="newspaperBox"
        class="z-20 w-4/5 lg:w-3/6 h-2/5 lg:h-3/5 bg-white flex items-center rounded-md overflow-hidden border shadow-md"
    >
        <div class="hidden md:flex md:w-1/2 h-full">
            <img
                class="w-full h-full"
                src="./assets/images/newsletter.png"
                alt="newsletter"
            />
        </div>
        <div
            class="w-full md:w-1/2 h-full flex flex-col justify-center p-12 px-8 gap-4 relative"
        >
            <button
                class="closeButton absolute top-4 right-4 text-2xl hover:text-red-500"
            >
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
            <h3 class="text-xl font-bold text-gray-800">Subscribe Newsletter.</h3>
            <p class="text-md text-gray-600 font-semibold">
                Subscribe the <span class="text-lg font-semibold">Anon</span> to get
                latest products and discount update.
            </p>
            <input class="border p-2" type="email" placeholder="Email Address"/>
            <button
                class="rounded-md self-center py-2 px-3 bg-gray-900 text-white hover:bg-red-500"
            >
                SUBSCRIBE
            </button>
        </div>
    </div>
</div>

<header class="header w-full">
    <!--! topHeader -->
    <div
        class="top-header w-screen flex flex-col items-center justify-between border-b"
    >
        <div class="flex w-full items-center justify-between p-4 md:px-20 border-b">
            <div class="icons hidden lg:flex items-center gap-2">
                <a
                    class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                    href="#"
                >
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a
                    class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                    href="#"
                >
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a
                    class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                    href="#"
                >
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </div>
            <h3 class="text-gray-400 font-semibold text-xs">
                FREE SHIPPING THIS WEEK ORDER OVER - $55
            </h3>
            <div class="select hidden md:flex">
                <select class="mr-2 p-1 px-2 text-sm font-semibold" id="currency">
                    <option value="USD">USD $</option>
                    <option value="EUR">EUR €</option>
                </select>
                <select class="mr-2 p-1 px-2 text-sm font-semibold" id="language">
                    <option value="Persian">English</option>
                    <option value="English">Persian</option>
                </select>
            </div>
        </div>
        <div
            class="gap-4 flex flex-col sm:flex-row w-full items-center justify-between p-6 md:px-24"
        >
{{--            <h1 class="font-semibold text-4xl text-gray-600">Anon</h1>--}}
            <a href="{{ url('/') }}">
                <img src="{{ asset('image/logo/rotemarket_logo.png') }}" alt="logo rotemarket" style="width: 90px;">
            </a>

            <form class="relative w-full sm:w-3/5">
                <input
                    class="w-full h-full p-2 border rounded-xl"
                    placeholder="Enter Your Product Name..."
                    id="search"
                    type="text"
                />
                <label class="absolute right-2 top-2" for="search">
                    <i class="fa-solid fa-magnifying-glass cursor-pointer"></i>
                </label>
            </form>
            <div class="icons hidden mr-2 text-3xl md:flex gap-8 text-gray-600">
                <div class="relative">
                    <ion-icon name="person-outline"></ion-icon>
                </div>
                <div class="relative">
              <span
                  class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full"
              >0</span
              >
                    <ion-icon name="heart-outline"></ion-icon>
                </div>
                <div class="relative">
              <span
                  class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full"
              >0</span
              >
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <!--! topHeader -->
    <!--? navbar -->
    <!--todo desktop Navbar -->
    <div class="desktopNavbar">
        <nav class="my-4 hidden lg:flex justify-center">
            <ul
                class="desktopNavbarUl flex justify-center items-center gap-12 font-sm font-bold text-gray-600"
            >
                <li class="nav_items relative">
                    <a href="#Home">HOME</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                </li>
                <li class="nav_items relative category_nav_item">
                    <a href="#Categories">CATEGORIES</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                    <!--? hoverItems -->
                    <ul
                        class="categoriesItem absolute top-10 shadow-lg rounded-xl hidden grid-cols-4 p-4 gap-4 border text-gray-400 font-normal bg-white z-10"
                    >
                        <li>
                            <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                                Electronics
                            </h3>
                            <ul class="flex flex-col items-start justify-start gap-2">
                                <li>
                                    <a href="#"> Desktop </a>
                                </li>
                                <li>
                                    <a href="#"> Laptop </a>
                                </li>
                                <li>
                                    <a href="#"> Camera </a>
                                </li>
                                <li>
                                    <a href="#"> Tablet </a>
                                </li>
                                <li>
                                    <a href="#"> Headphone </a>
                                </li>
                                <li>
                                    <img
                                        src="./assets/images/electronics-banner-1.jpg"
                                        alt="pic"
                                    />
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                                Men's
                            </h3>
                            <ul class="flex flex-col items-start justify-start gap-2">
                                <li>
                                    <a href="#"> Formal </a>
                                </li>
                                <li>
                                    <a href="#"> Casual </a>
                                </li>
                                <li>
                                    <a href="#"> Sports </a>
                                </li>
                                <li>
                                    <a href="#"> Jacket </a>
                                </li>
                                <li>
                                    <a href="#"> Sunglasses </a>
                                </li>
                                <li>
                                    <img
                                        src="./assets/images/electronics-banner-2.jpg"
                                        alt="pic"
                                    />
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                                Women's
                            </h3>
                            <ul class="flex flex-col items-start justify-start gap-2">
                                <li>
                                    <a href="#"> Formal </a>
                                </li>
                                <li>
                                    <a href="#"> Casual </a>
                                </li>
                                <li>
                                    <a href="#"> Perfume </a>
                                </li>
                                <li>
                                    <a href="#"> Cosmetics </a>
                                </li>
                                <li>
                                    <a href="#"> Bags </a>
                                </li>
                                <li><img src="./assets/images/mens-banner.jpg" alt="pic"/></li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                                Electronics
                            </h3>
                            <ul class="flex flex-col items-start justify-start gap-2">
                                <li>
                                    <a href="#"> Smart </a>
                                    Watch
                                </li>
                                <li>
                                    <a href="#"> Smart </a>
                                    TV
                                </li>
                                <li>
                                    <a href="#"> Keyboard </a>
                                </li>
                                <li>
                                    <a href="#"> Mouse </a>
                                </li>
                                <li>
                                    <a href="#"> Microphone </a>
                                </li>
                                <li>
                                    <img src="./assets/images/womens-banner.jpg" alt="pic"/>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--? hoverItems -->
                </li>
                <li class="nav_items relative men_nav_item">
                    <a href="#Men">MEN'S</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                    <!--? hoverItems -->
                    <ul
                        class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white"
                    >
                        <li>
                            <a href="#">Shirt</a>
                        </li>
                        <li>
                            <a href="#">Shorts & Jeans</a>
                        </li>
                        <li>
                            <a href="#">Safety</a>
                        </li>
                        <li>
                            <a href="#">Wallet</a>
                        </li>
                    </ul>
                    <!--? hoverItems -->
                </li>
                <li class="nav_items relative women_nav_item">
                    <a href="#Women">WOMEN'S</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                    <!--? hoverItems -->
                    <ul
                        class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white"
                    >
                        <li>
                            <a href="#">Dress & Frock</a>
                        </li>
                        <li>
                            <a href="#">Earrings</a>
                        </li>
                        <li>
                            <a href="#">Necklace</a>
                        </li>
                        <li>
                            <a href="#">Makeup Kit</a>
                        </li>
                    </ul>
                    <!--? hoverItems -->
                </li>
                <li class="nav_items relative jewelry_nav_item">
                    <a href="#Jewelry">JEWELRY</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                    <!--? hoverItems -->
                    <ul
                        class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white"
                    >
                        <li>
                            <a href="#">Earrings</a>
                        </li>
                        <li>
                            <a href="#">Couple Rings</a>
                        </li>
                        <li>
                            <a href="#">Necklace</a>
                        </li>
                        <li>
                            <a href="#">Bracelets</a>
                        </li>
                    </ul>
                    <!--? hoverItems -->
                </li>
                <li class="nav_items relative perfume_nav_item">
                    <a href="#Perfume">PERFUME</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                    <!--? hoverItems -->
                    <ul
                        class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white"
                    >
                        <li>
                            <a href="#">Clothes Perfume</a>
                        </li>
                        <li>
                            <a href="#">Flower Fragrance</a>
                        </li>
                        <li>
                            <a href="#">Safety</a>
                        </li>
                        <li>
                            <a href="#">Air Freshener</a>
                        </li>
                    </ul>
                    <!--? hoverItems -->
                </li>
                <li class="nav_items relative">
                    <a href="#Blog">BLOG</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                </li>
                <li class="nav_items relative">
                    <a href="#HotOffers">HOT OFFERS</a>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"
                    ></span>
                </li>
            </ul>
        </nav>
    </div>

    <!--? mobile Navbar -->
    <div class="mobileNavbar">
        <!--? navbar button -->
        <div
            style="box-shadow: 0 0 0.3rem lightgray"
            class="z-10 bg-white w-96 lg:hidden flex justify-around items-center p-4 border rounded-t-xl fixed bottom-0 left-1/2 -translate-x-1/2 text-lg"
        >
            <button id="openNavbarButton" type="button">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="relative" type="button">
            <span
                class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full"
            >
              0
            </span>
                <ion-icon name="bag-handle-outline"></ion-icon>
            </button>

            <button type="button">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="relative" type="button">
            <span
                class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full"
            >
              0
            </span>
                <ion-icon name="heart-outline"></ion-icon>
            </button>

            <button id="categoriesBtn" type="button">
                <ion-icon name="grid-outline"></ion-icon>
            </button>
        </div>
        <!--* overlay -->
        <div
            id="overlayNavbar"
            class="hidden fixed top-0 left-0 w-screen h-screen bg-gray-500/30 z-10"
        ></div>

        <!--! sidebarNavbar -->
        <div
            class="fixed top-0 w-72 h-screen bg-white p-4 shadow-lg hidden flex-col justify-start gap-4 text-lg font-semibold overflow-auto z-20"
            id="sidebarNavbar"
        >
            <div class="flex justify-between border-b-2 py-4">
                <h3 class="text-red-400">Menu</h3>
                <button class="closeButton hover:text-red-500">
                    <ion-icon name="close-circle-outline"></ion-icon>
                </button>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">Home</div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <a href="#">Shirt</a>
                    <a href="#">Shorts & Jeans</a>
                    <a href="#">Safety Shoes</a>
                    <a href="#">Wallet</a>
                    <summary>Men's</summary>
                </details>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <a href="#">Dress & Frock</a>
                    <a href="#">Earrings</a>
                    <a href="#">Necklace</a>
                    <a href="#">Makeup Kit</a>
                    <summary>Women's</summary>
                </details>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <a href="#">Earrings</a>
                    <a href="#">Couple Rings</a>
                    <a href="#">Necklace</a>
                    <a href="#">Bracelets</a>
                    <summary>Jewelry</summary>
                </details>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <a href="#">Clothes Perfume</a>
                    <a href="#">Deodorant</a>
                    <a href="#">Flower Fragrance</a>
                    <a href="#">Air Freshener</a>
                    <summary>Perfume</summary>
                </details>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <a href="#">Blog</a>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <a href="#">Hot Offers</a>
            </div>

            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <div class="border rounded-xl shadow-xl flex flex-col items-start">
                        <a class="border-b w-full pb-2" href="#">English</a>
                        <a class="border-b w-full pb-2" href="#">Persian</a>
                    </div>
                    <summary>Language</summary>
                </details>
            </div>
            <div class="mobile_navbar_item border-b pb-3 text-gray-600">
                <details>
                    <div class="border rounded-xl shadow-xl flex flex-col items-start">
                        <a class="border-b w-full pb-2" href="#">USD $</a>
                        <a class="border-b w-full pb-2" href="#">EUR €</a>
                    </div>
                    <summary>Currency</summary>
                </details>
            </div>

            <div class="icons flex items-center justify-center gap-4">
                <a
                    class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                    href="#"
                >
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a
                    class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                    href="#"
                >
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a
                    class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                    href="#"
                >
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </div>
        </div>

        <!--todo sidebarCategories -->
        <div
            id="sidebarCategories"
            class="fixed top-0 w-80 h-screen bg-white p-6 shadow-lg hidden flex-col justify-start gap-4 font-semibold overflow-auto z-20"
        >
            <div class="categories w-full h-auto">
                <div class="w-full flex items-center justify-between">
                    <h1 class="text-lg font-semibold mb-4">CATEGORY</h1>
                    <button class="closeButton text-xl hover:text-red-500">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Shirt</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Shorts & Jeans</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Jacket</a>
                            <span>50</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Dress & Frock</a>
                            <span>120</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Clothes
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/dress.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Sports</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Formal</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Casual</a>
                            <span>50</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Safety Shoes</a>
                            <span>120</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Footwear
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/shoes.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Earrings</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Couple Rings</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Necklace</a>
                            <span>50</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Jewelry
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/jewelry.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Clothes Perfume</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Deodorant</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Jacket</a>
                            <span>50</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Dress & Frock</a>
                            <span>120</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Perfume
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/perfume.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Shampoo</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Sunscreen</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Body Wash</a>
                            <span>50</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Makeup Kit</a>
                            <span>120</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Cosmetics
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/cosmetics.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Sunglasses</a>
                            <span>23</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Lenses</a>
                            <span>53</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Glasses
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/glasses.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
                <div class="border-b pb-3 text-lg text-gray-600">
                    <details>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Wallet</a>
                            <span>300</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Purse</a>
                            <span>30</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Gym Backpack</a>
                            <span>50</span>
                        </div>
                        <div class="flex justify-between items-baseline text-sm">
                            <a href="#">Shopping Bag</a>
                            <span>120</span>
                        </div>
                        <summary>
                            <div class="flex items-center gap-2">
                                Bags
                                <img
                                    class="w-4 h-4"
                                    src="./assets/images/icons/bag.svg"
                                    alt="productPicture"
                                />
                            </div>
                        </summary>
                    </details>
                </div>
            </div>

            <div
                class="bestsellers w-full h-auto mt-2 flex flex-col items-start justify-start gap-4"
            >
                <h2 class="text-lg font-semibold">BEST SELLERS</h2>
                <div class="flex items-center justify-start gap-2">
                    <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                        <img
                            class="w-full h-full"
                            src="./assets/images/products/1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="text-gray-700">
                        <h4 class="text-gray-900">Baby Fabric Shoes</h4>
                        <div class="stars text-yellow-500">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                        </div>
                        <div class="flex items-center justify-start gap-4">
                            <s class="text-gray-500">$14.00</s> <strong>$7.00</strong>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-start gap-2">
                    <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                        <img
                            class="w-full h-full"
                            src="./assets/images/products/2.jpg"
                            alt=""
                        />
                    </div>
                    <div class="text-gray-700">
                        <h4 class="text-gray-900">Men's Hoodies T-Shirt</h4>
                        <div class="stars text-yellow-500">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>
                        <div class="flex items-center justify-start gap-4">
                            <s class="text-gray-500">$5.00</s> <strong>$2.00</strong>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-start gap-2">
                    <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                        <img
                            class="w-full h-full"
                            src="./assets/images/products/3.jpg"
                            alt=""
                        />
                    </div>
                    <div class="text-gray-700">
                        <h4 class="text-gray-900">Girls T-Shirt</h4>
                        <div class="stars text-yellow-500">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>
                        <div class="flex items-center justify-start gap-4">
                            <s class="text-gray-500">$10.00</s> <strong>$5.00</strong>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-start gap-2">
                    <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                        <img
                            class="w-full h-full"
                            src="./assets/images/products/4.jpg"
                            alt=""
                        />
                    </div>
                    <div class="text-gray-700">
                        <h4 class="text-gray-900">Woolen Hat For Men</h4>
                        <div class="stars text-yellow-500">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                        </div>
                        <div class="flex items-center justify-start gap-4">
                            <s class="text-gray-500">$24.00</s> <strong>$17.00</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Navbar -->
</header>
<main>
    <!-- !banner -->
    <div class="banner mt-10 lg:-mt-4 flex items-center justify-center">
        <div class="swiper swiper-js">
            <div
                class="swiper-wrapper h-64 lg:h-96 w-full lg:w-5/6 relative"
                id="swiperSlide"
            ></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <!--todo Title Categories  -->
    <div class="flex items-center justify-center mt-10">
        <div class="swiper categories_swiper">
            <div class="swiper-wrapper relative gap-4" id="titlecategories"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <!--? Products and categories  -->
    <section
        class="w-full min-h-auto px-8 lg:px-0 lg:w-5/6 mx-auto mt-16 flex gap-8"
    >
        <aside class="sticky top-0 hidden lg:flex flex-col lg:w-1/4 max-h-screen">
            <div class="aside_section overflow-y-auto">
                <div class="categories w-full rounded-xl p-4 bg-white border shadow-lg">
                    <h1 class="text-xl font-semibold mb-4">CATEGORY</h1>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Shirt</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Shorts & Jeans</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Jacket</a>
                                <span>50</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Dress & Frock</a>
                                <span>120</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Clothes
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/dress.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Sports</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Formal</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Casual</a>
                                <span>50</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Safety Shoes</a>
                                <span>120</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Footwear
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/shoes.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Earrings</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Couple Rings</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Necklace</a>
                                <span>50</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Jewelry
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/jewelry.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Clothes Perfume</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Deodorant</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Jacket</a>
                                <span>50</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Dress & Frock</a>
                                <span>120</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Perfume
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/perfume.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Shampoo</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Sunscreen</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Body Wash</a>
                                <span>50</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Makeup Kit</a>
                                <span>120</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Cosmetics
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/cosmetics.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Sunglasses</a>
                                <span>23</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Lenses</a>
                                <span>53</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Glasses
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/glasses.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                    <div class="border-b pb-3 text-lg text-gray-600">
                        <details>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Wallet</a>
                                <span>300</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Purse</a>
                                <span>30</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Gym Backpack</a>
                                <span>50</span>
                            </div>
                            <div class="flex justify-between items-baseline text-sm">
                                <a href="#">Shopping Bag</a>
                                <span>120</span>
                            </div>
                            <summary>
                                <div class="flex items-center gap-2">
                                    Bags
                                    <img
                                        class="w-4 h-4"
                                        src="./assets/images/icons/bag.svg"
                                        alt="productPicture"
                                    />
                                </div>
                            </summary>
                        </details>
                    </div>
                </div>

                <div
                    class="bestsellers 2-72 h-auto mt-10 flex flex-col items-start justify-start gap-4"
                >
                    <h2 class="text-lg font-semibold">BEST SELLERS</h2>
                    <div class="flex items-center justify-start gap-2">
                        <div
                            class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md"
                        >
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="text-gray-900">Baby Fabric Shoes</h4>
                            <div class="stars text-yellow-500">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half-outline"></ion-icon>
                            </div>
                            <div class="flex items-center justify-start gap-4">
                                <s class="text-gray-500">$14.00</s> <strong>$7.00</strong>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-2">
                        <div
                            class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md"
                        >
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="text-gray-900">Men's Hoodies T-Shirt</h4>
                            <div class="stars text-yellow-500">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <div class="flex items-center justify-start gap-4">
                                <s class="text-gray-500">$5.00</s> <strong>$2.00</strong>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-2">
                        <div
                            class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md"
                        >
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="text-gray-900">Girls T-Shirt</h4>
                            <div class="stars text-yellow-500">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <div class="flex items-center justify-start gap-4">
                                <s class="text-gray-500">$10.00</s> <strong>$5.00</strong>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-2">
                        <div
                            class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md"
                        >
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/4.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="text-gray-900">Woolen Hat For Men</h4>
                            <div class="stars text-yellow-500">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half-outline"></ion-icon>
                            </div>
                            <div class="flex items-center justify-start gap-4">
                                <s class="text-gray-500">$24.00</s> <strong>$17.00</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="products w-full lg:w-3/4 flex flex-col">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="NewArrivals flex flex-col gap-4">
                    <h1 class="text-xl font-semibold border-b pb-4">New Arrivals</h1>

                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/clothes-1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm text-sm">
                                Relaxed Short Full...
                            </h4>
                            <h4>Clothes</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$7.00</strong>
                                <s class="text-gray-500">$14.00</s>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/clothes-2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm text-sm">
                                Girls Pnk Embro Desi...
                            </h4>
                            <h4>Clothes</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$21.00</strong>
                                <s class="text-gray-500">$24.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/clothes-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm text-sm">
                                Black Floral Wrap...
                            </h4>
                            <h4>Clothes</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$5.00</strong>
                                <s class="text-gray-500">$15.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/shirt-1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm text-sm">
                                Pure Garment Dye...
                            </h4>
                            <h4>Mens Fashion</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$30.00</strong>
                                <s class="text-gray-500">$40.00</s>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Trending flex flex-col gap-4">
                    <h1 class="text-xl font-semibold border-b pb-4">Trending</h1>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/sports-5.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm text-sm">
                                Running & Trekking...
                            </h4>
                            <h4>Sports</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$82.00</strong>
                                <s class="text-gray-500">$101.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/sports-2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Trekking & Running...
                            </h4>
                            <h4>Sports</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$78.00</strong>
                                <s class="text-gray-500">$93.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/party-wear-1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Womens Party Wea...
                            </h4>
                            <h4>Party Wear</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$27.00</strong>
                                <s class="text-gray-500">$32.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/sports-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Sports Claw Women...
                            </h4>
                            <h4>Sports</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$12.00</strong>
                                <s class="text-gray-500">$24.00</s>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="TopRated flex flex-col gap-4">
                    <h1 class="text-xl font-semibold border-b pb-4">Top Rated</h1>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/watch-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Pocket Watch Leather...
                            </h4>
                            <h4>Watches</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$32.00</strong>
                                <s class="text-gray-500">$53.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/jewellery-3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Silver Deer Heart Neck...
                            </h4>
                            <h4>Jewellery</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$12.00</strong>
                                <s class="text-gray-500">$32.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/perfume.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Titan 100 Ml Womens
                            </h4>
                            <h4>Perfume</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$74.00</strong>
                                <s class="text-gray-500">$104.00</s>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-28 bg-white border shadow-sm rounded-lg flex items-center justify-start gap-2 cursor-pointer"
                    >
                        <div class="w-20 h-20 p-2">
                            <img
                                class="w-full h-full"
                                src="./assets/images/products/belt.jpg"
                                alt=""
                            />
                        </div>
                        <div class="text-gray-700">
                            <h4 class="font-bold text-gray-900 text-sm">
                                Men's Leather Rever...
                            </h4>
                            <h4>Belt</h4>
                            <div class="flex items-center justify-start gap-4">
                                <strong class="text-red-400">$17.00</strong>
                                <s class="text-gray-500">$23.00</s>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="day my-10">
                <h1 class="font-semibold text-xl border-b py-4">Deal Of The Day</h1>
                <div
                    class="mt-10 w-full h-auto border rounded-lg flex flex-col lg:flex-row justify-between"
                >
                    <img
                        class="lg:w-1/2"
                        src="./assets/images/products/shampoo.jpg"
                        alt=""
                    />
                    <div class="lg:w-1/2 flex flex-col items-start gap-2 p-4">
                        <div class="stars text-yellow-500">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                        </div>
                        <h4 class="font-bold text-lg">
                            SHAMPOO, CONDITIONER & FACEWASH PACKS
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit
                            amet consectetur Lorem ipsum dolor
                        </p>
                        <div>
                            <strong class="text-red-400 font-bold text-xl">$150.00</strong>
                            <s class="text-xl text-gray-500">$200.00</s>
                        </div>
                        <button
                            class="bg-red-500 text-white rounded-xl py-2 px-4 text-md font-semibold"
                        >
                            ADD TO CART
                        </button>
                        <h3 class="mt-4 font-semibold text-sm">HURRY UP! OFFER ENDS IN:</h3>
                        <div
                            id="reverseTimer"
                            class="flex justify-between items-center gap-4 font-semibold text-sm text-black"
                        >
                            <h1
                                class="flex flex-col items-center justify-center bg-gray-300/20 border shadow-lg p-2 w-12 h-12 rounded-lg"
                                id="days"
                            ></h1>
                            <h1
                                class="flex flex-col items-center justify-center bg-gray-300/20 border shadow-lg p-2 w-12 h-12 rounded-lg"
                                id="hour"
                            ></h1>
                            <h1
                                class="flex flex-col items-center justify-center bg-gray-300/20 border shadow-lg p-2 w-12 h-12 rounded-lg"
                                id="minute"
                            ></h1>
                            <h1
                                class="flex flex-col items-center justify-center bg-gray-300/20 border shadow-lg p-2 w-12 h-12 rounded-lg"
                                id="second"
                            ></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="newProductsContainer">
                <h1 class="font-semibold text-xl border-b py-4">New Products</h1>
                <div
                    id="newProducts"
                    class="newProducts grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"
                ></div>
            </div>
        </div>
    </section>

    <div
        class="mt-10 w-full px-8 lg:px-0 lg:w-5/6 mx-auto flex flex-wrap lg:flex-nowrap flex-col lg:flex-row gap-8 mb-20"
    >
        <div class="testimonial w-full lg:w-2/6">
            <h1 class="text-xl font-semibold border-b pb-4 mb-8">Testimonial</h1>
            <div
                style="height: 23rem"
                class="w-full border rounded-xl flex flex-col items-center justify-center p-4"
            >
                <img
                    class="w-20 h-20 rounded-full"
                    src="./assets/images/testimonial-1.jpg"
                    alt="testimonial"
                />
                <h2 class="text-lg font-bold text-gray-600">ALAN DOE</h2>
                <h5 class="text-md">CEO & Founder Invision</h5>
                <img
                    class="w-6 h-6 my-4"
                    src="./assets/images/icons/quotes.svg"
                    alt="quotes"
                />
                <p class="text-sm w-4/5 mx-auto text-center">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit
                    amet.
                </p>
            </div>
        </div>

        <div
            class="w-full lg:w-3/6 rounded-lg flex items-center justify-center"
            style="background-image: url('./assets/images/cta-banner.jpg')"
        >
            <div
                class="flex flex-col items-center justify-center p-8 gap-4 bg-gray-100/70 rounded-lg w-3/4"
            >
                <button class="bg-gray-900 text-white p-2 rounded-lg">
                    25% DISCOUNT
                </button>
                <h1 class="w-56 text-4xl font-bold text-center text-gray-800">
                    Summer Collection
                </h1>
                <h5 class="text-lg font-semibold text-gray-500">Starting @ $10</h5>
                <button class="text-lg font-semibold text-gray-500">SHOP NOW</button>
            </div>
        </div>

        <div class="OurServices w-full lg:w-2/6">
            <h1 class="text-xl font-semibold border-b pb-4 mb-8">Our Services</h1>
            <div
                style="height: 23rem"
                class="w-full border rounded-xl flex flex-wrap justify-between lg:flex-col items-center lg:justify-center p-4 lg:px-8 lg:gap-8"
            >
                <div
                    class="w-1/2 lg:w-full flex justify-center lg:justify-between items-center gap-2"
                >
                    <ion-icon class="text-red-500 text-4xl" name="boat-outline"></ion-icon>
                    <div>
                        <h3 class="font-semibold text-gray-700">Worldwide Delivery</h3>
                        <p class="text-xs text-gray-600">For Order Over $100</p>
                    </div>
                </div>

                <div
                    class="w-1/2 lg:w-full flex justify-center lg:justify-between items-center gap-2"
                >
                    <ion-icon
                        class="text-red-500 text-4xl"
                        name="rocket-outline"
                    ></ion-icon>
                    <div>
                        <h3 class="font-semibold text-gray-700">Worldwide Delivery</h3>
                        <p class="text-xs text-gray-600">For Order Over $100</p>
                    </div>
                </div>

                <div
                    class="w-1/2 lg:w-full flex justify-center lg:justify-between items-center gap-2"
                >
                    <ion-icon class="text-red-500 text-4xl" name="call-outline"></ion-icon>
                    <div>
                        <h3 class="font-semibold text-gray-700">Worldwide Delivery</h3>
                        <p class="text-xs text-gray-600">For Order Over $100</p>
                    </div>
                </div>

                <div
                    class="w-1/2 lg:w-full flex justify-center lg:justify-between items-center gap-2"
                >
                    <ion-icon
                        class="text-red-500 text-4xl"
                        name="arrow-undo-outline"
                    ></ion-icon>
                    <div>
                        <h3 class="font-semibold text-gray-700">Worldwide Delivery</h3>
                        <p class="text-xs text-gray-600">For Order Over $100</p>
                    </div>
                </div>

                <div
                    class="w-1/2 lg:w-full flex justify-center lg:justify-between items-center gap-2"
                >
                    <ion-icon
                        class="text-red-500 text-4xl"
                        name="ticket-outline"
                    ></ion-icon>
                    <div>
                        <h3 class="font-semibold text-gray-700">Worldwide Delivery</h3>
                        <p class="text-xs text-gray-600">For Order Over $100</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full mx-auto flex my-10">
        <div class="swiper blog_swiper">
            <div class="swiper-wrapper" id="blog_swiper"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</main>

<!--todo footer -->
<footer class="footer bg-[#212121]">
    <div
        class="brands flex flex-col justify-start items-start gap-4 px-6 py-8 md:px-8 md:py-10 lg:px-16 lg:py-12"
    >
        <h3 class="text-red-400 font-semibold text-md lg:text-lg">
            BRAND DIRECTORY
        </h3>
        <div class="fashion flex flex-wrap gap-2 mr-4 text-sm lg:text-md">
            <h4 class="font-semibold text-[darkgray]">FASHION:</h4>
            <a class="text-gray-500" href="#">T-Shirt |</a>
            <a class="text-gray-500" href="#">Shirts |</a>
            <a class="text-gray-500" href="#">Jacket |</a>
            <a class="text-gray-500" href="#">Dress & Frock |</a>
            <a class="text-gray-500" href="#">Innerwear |</a>
            <a class="text-gray-500" href="#">Hosiery</a>
        </div>
        <div class="footwear flex flex-wrap gap-2 mr-4 text-sm lg:text-md">
            <h4 class="font-semibold text-[darkgray]">FOOTWEAR :</h4>
            <a class="text-gray-500" href="#">Sports |</a>
            <a class="text-gray-500" href="#">Formal |</a>
            <a class="text-gray-500" href="#">Boots |</a>
            <a class="text-gray-500" href="#">Casua |</a>
            <a class="text-gray-500" href="#">Cowboy Shoes |</a>
            <a class="text-gray-500" href="#">Party Wear Shoes |</a>
            <a class="text-gray-500" href="#">Branded |</a>
            <a class="text-gray-500" href="#">Firstcopy |</a>
            <a class="text-gray-500" href="#">Long Shoes</a>
        </div>
        <div class="jewellery flex flex-wrap gap-2 mr-4 text-sm lg:text-md">
            <h4 class="font-semibold text-[darkgray]">JEWELLERY :</h4>
            <a class="text-gray-500" href="#">Necklace |</a>
            <a class="text-gray-500" href="#">Earrings |</a>
            <a class="text-gray-500" href="#">Couple Rings |</a>
            <a class="text-gray-500" href="#">Pendants |</a>
            <a class="text-gray-500" href="#">Crystal |</a>
            <a class="text-gray-500" href="#">Bangles |</a>
            <a class="text-gray-500" href="#">Bracelets |</a>
            <a class="text-gray-500" href="#">Nosepin |</a>
            <a class="text-gray-500" href="#">Chain |</a>
            <a class="text-gray-500" href="#">Earrings |</a>
            <a class="text-gray-500" href="#">Couple Rings</a>
        </div>
        <div class="cosmetics flex flex-wrap gap-2 mr-4 text-sm lg:text-md">
            <h4 class="font-semibold text-[darkgray]">COSMETICS :</h4>
            <a class="text-gray-500" href="#">Shampoo |</a>
            <a class="text-gray-500" href="#">Bodywash |</a>
            <a class="text-gray-500" href="#">Facewash |</a>
            <a class="text-gray-500" href="#">Makeup Kit |</a>
            <a class="text-gray-500" href="#">Liner |</a>
            <a class="text-gray-500" href="#">Lipstick |</a>
            <a class="text-gray-500" href="#">Prefume |</a>
            <a class="text-gray-500" href="#">Body Soap |</a>
            <a class="text-gray-500" href="#">Scrub |</a>
            <a class="text-gray-500" href="#">Hair Gel |</a>
            <a class="text-gray-500" href="#">Hair Colors |</a>
            <a class="text-gray-500" href="#">Hair Dye |</a>
            <a class="text-gray-500" href="#">Sunscreen |</a>
            <a class="text-gray-500" href="#">Skin Loson |</a>
            <a class="text-gray-500" href="#">Liner |</a>
            <a class="text-gray-500" href="#">Lipstick</a>
        </div>
    </div>
    <hr/>
    <div class="px-6 py-8 md:px-8 md:py-10 lg:px-16 lg:py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div>
                <h2 class="font-bold text-md text-white">POPULAR CATEGORIES</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex flex-col justify-start text-gray-500 gap-2">
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Electronic</a></li>
                    <li><a href="#">Cosmetic</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Watches</a></li>
                </ul>
            </div>
            <div>
                <h2 class="font-bold text-md text-white">PRODUCTS</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex flex-col justify-start text-gray-500 gap-2">
                    <li><a href="#">Prices Drop</a></li>
                    <li><a href="#">New Products</a></li>
                    <li><a href="#">Best Sales</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>

            <div>
                <h2 class="font-bold text-md text-white">OUR COMPANY</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex flex-col justify-start text-gray-500 gap-2">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Legal Notice</a></li>
                    <li><a href="#">Terms And Conditions</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Secure Payment</a></li>
                </ul>
            </div>
            <div>
                <h2 class="font-bold text-md text-white">SERVICES</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex flex-col justify-start text-gray-500 gap-2">
                    <li><a href="#">Prices Drop</a></li>
                    <li><a href="#">New Products</a></li>
                    <li><a href="#">Best Sales</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div>
                <h2 class="font-bold text-md text-white">CONTACT</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex flex-col justify-start text-gray-500 gap-2">
                    <li>
                        <ion-icon class="text-lg" name="location-outline"></ion-icon>
                        <a href="#"
                        >419 State 414 Rte Beaver Dams, New York(NY), 14812, USA</a
                        >
                    </li>
                    <li>
                        <ion-icon class="text-lg" name="call-outline"></ion-icon>
                        <a href="#">(607) 936-8058</a>
                    </li>
                    <li>
                        <ion-icon class="text-lg" name="mail-outline"></ion-icon>
                        <a href="#">Example@Gmail.Com</a>
                    </li>
                </ul>
            </div>
            <div class="lg:hidden">
                <h2 class="font-bold text-md text-white">FOLLOW US</h2>
                <hr class="title w-16 mb-4 mt-2"/>
                <ul class="flex justify-start text-gray-500 gap-2 text-lg">
                    <li>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr/>
    <div
        class="mx-auto flex items-center justify-center flex-col gap-4 py-10 pb-20 lg:pb-10"
    >
        <img class="w-80" src="./assets/images/payment.png" alt="payment"/>
        <h4 class="text-gray-500 text-md lg:text-lg font-semibold">
            Copyright © Anon All Rights Reserved.
        </h4>
    </div>
</footer>
<!--! icons -->
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
></script>
<!--!javascript file  -->
<script type="module" src="./assets/index.js"></script>
</body>
</html>
