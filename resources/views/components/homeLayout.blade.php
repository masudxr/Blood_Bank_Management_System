<!doctype html>

<title>Kpur Blood Bank</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
        margin: 0px 170px;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }

    .column {
        flex: 50%;
        padding: 10px;
        height: 300px;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: flex;
    }

    .pic {
        max-width: 60%;
        height: 16;
    }

<<<<<<< HEAD
    .con {
        text-align: center;
        margin-top: -27px;

    }

    .banner {
        background-image: url("images/donate.webp");
        height: 402px;
        width: 65%;
        margin-bottom: 30px;
        color: azure;
        text-align: center;
        background-repeat: no-repeat;
        margin: auto;

    }

    .banner h1 {
        padding-top: 180px;
        font-weight: 500;
        text-transform: uppercase;
    }
    .banner h2 {
        font-weight: 500;
        text-transform: uppercase;
        font-size: xx-large;
=======
    ul.li {
        list-style-type: circle;
>>>>>>> ed0b8591a03704f4b88beae12f34c42d172f2465
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <div class="con">
            <h3>
                Gmail: masudxr@gmail.com
                Contact: +8801737629952
            </h3>
        </div>
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                <a href="/" class="ml-6 text-xs font-bold uppercase">Home</a>
                <a href="/blog" class="ml-6 text-xs font-bold uppercase">Blog</a>
                <a href="/contact" class="ml-6 text-xs font-bold uppercase">Contact</a>
                <a href="/about" class="ml-6 text-xs font-bold uppercase">About US</a>
                <!-- <a href="/donar" class="ml-6 text-xs font-bold uppercase">Donor List</a> -->
                <!-- <a href="/list" class="ml-6 text-xs font-bold uppercase">Stock Blood List</a> -->
            </div>
        </nav>
        {{ $slot }}
        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest Blood Donation Update</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>