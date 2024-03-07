<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-color-primary text-color-white tracking-wider">
    <header class="sticky top-0 z-50">
        <nav class="container flex justify-between items-center ">
            <div class=" p-5 text-color-secondary font-bold text-3xl">
                <a href="#home">
                    <span class="text-color-white">Light</span>Code
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6 ">
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#posts">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="hover:text-color-secondary ease-in duration-200" href="#contact">Contact</a>
                    </li>

                    <li>
                        <button
                            class="bg-color-secondary px-9 py-3 rounded-md capitalize hover:opacity-80 ease-in duration-200 ">Free
                            Trial</button>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div id="menu" class="hidden bg-color-primary h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#home">Home</a>
                    </li>
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#features">Features</a>
                    </li>
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#services">Services</a>
                    </li>
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#posts">Blog</a>
                    </li>
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a id="hlink" class="hover:text-color-secondary ease-in duration-200"
                            href="#contact">Contact</a>
                    </li>

                    <li>
                        <button class="btn ">Free Trial</button>
                    </li>
                </ul>
            </div>


        </nav>
    </header>
    <main>
        <section id="home" class="relative">
            <div class="blod1"></div>
            <div class="blod2"></div>
            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="title">Awesome App for your Future</h1>
                        <p class="leading-relaxed mb-10">Get your blood tests delivered at home collect a sample from
                            the news your blood tests.
                            Then a doctor reviews your order and you have your results in 24 hours. That's it!</p>
                        </p>
                        <button class="btn ">Download Apps</button>

                    </div>
                    <div class="md:w-1/2">
                        <img src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bg-color-primary-light">
            <div class="containter py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="text-color-secondary mb-4">Our Features</h4>
                    <h1 class="title ">Easy to manage andcan connect at any way</h1>
                </div>
                <div class="grid lg:grid-cols-3  md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- Card no1-->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class=" bg-color-secondary inline-block rounded-2xl py-5 px-6 ">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-bold text-xl py-5">Exprience Tracking</h3>
                        <p class="leading-relaxed">normal test test application testing for this</p>

                    </div>
                    <!-- Card no2-->
                    <div
                        class="sm:bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark sm:hover:bg-color-gray ease-in duration-200">
                        <div class=" bg-color-secondary inline-block rounded-2xl py-5 px-6 ">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-bold text-xl py-5">Finance SnapShot</h3>
                        <p class="leading-relaxed">normal test test application testing for this</p>

                    </div><!-- Card no3-->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class=" bg-color-secondary inline-block rounded-2xl py-5 px-6 ">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-bold text-xl py-5">Team Collaboration</h3>
                        <p class="leading-relaxed">normal test test application testing for this</p>

                    </div>
                </div>

            </div>
        </section>
        <section class="saving-money">
            <div class="container py-20 relative">
                <div class="blod1 lg:mt-20"></div>
                <div class="blod2"></div>
                <div class="flex flex-col items-center justify-between z-20 md:flex-row">
                    <div class="md:w-1/2 mb-12">
                        <img src="img/hero2.png" alt="">
                    </div>

                    <div class="text-center mb-12 md:text-left md:w-1/2 ml-20">
                        <h1 class="title mb-5">Awesome App for your Future</h1>
                        <p class="leading-relaxed mb-10">Get your blood tests delivered at home collect a sample from
                            the news your blood tests.
                            Then a doctor reviews your order and you have your results in 24 hours. That's it!</p>
                        </p>
                        <button class="btn ">Download Apps</button>

                    </div>
                </div>

            </div>
        </section>

        <section class="how-it-works" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Our Future</h4>
                    <h1 class="title">Easy To Manage Your All Payments By Our App</h1>
                </div>

                <div
                    class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                    <!--step1 -->


                    <div class=" text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('http://127.0.0.1:8080/img/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                1</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Install The App</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                    <!--step2 -->
                    <div class="text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('http://127.0.0.1:8080/img/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                2</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Setup Your Profile</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                    <!--step3 -->
                    <div class=" text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl">3</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Enjoy The Features!</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>

                </div>
            </div>
        </section>
        <section id="user-review" class="bg-color-primary-dark ">
            <div class="container py-20">
                <div class=" text-center m-auto mb-20 md:w-1/2">
                    <h4 class="text-color-secondary font-bold mb-4">User Review</h4>
                    <h1 class="title">What Clients Say about Our apps After use it</h1>
                </div>
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="/img/user1.jpg"
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic"
                            onclick="showReview()">
                        <img src="/img/user2.jpg" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic"
                            onclick="showReview()">
                        <img src="/img/user3.jpg" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic"
                            onclick="showReview()">
                        <img src="/img/user4.jpg" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic"
                            onclick="showReview()">
                        <img src="/img/user5.jpg" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic"
                            onclick="showReview()">
                    </div>

                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">111This should be used to tell a story and include any
                                testimonials
                                you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>IOS Developer</p>
                        </div>
                        <div class="user-text ">
                            <p class="md:text-2xl mb-6">222This should be used to tell a story and include any
                                testimonials
                                you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>2IOS Developer</p>
                        </div>
                        <div class="user-text ">
                            <p class="md:text-2xl mb-6">333This should be used to tell a story and include any
                                testimonials
                                you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>3IOS Developer</p>
                        </div>
                        <div class="user-text ">
                            <p class="md:text-2xl mb-6">444This should be used to tell a story and include any
                                testimonials
                                you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>4IOS Developer</p>
                        </div>
                        <div class="user-text ">
                            <p class="md:text-2xl mb-6">555This should be used to tell a story and include any
                                testimonials
                                you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>5IOS Developer</p>
                        </div>
                    </div>


                </div>

            </div>

        </section>
        <section id="how-it-works" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">How It Works</h4>
                    <h1 class="title">Grow Up Your Money Saving</h1>
                </div>
                <div
                    class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                    <!-- card 1  -->
                    <div class="text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('http://127.0.0.1:8080/img/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                1</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Install The App</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                    <!-- card 2  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-color-secondary">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('http://127.0.0.1:8080/img/line.png')] lg:after:absolute lg:after:top-10 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                2</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Setup Your Profile</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                    <!-- card 3  -->
                    <div class="text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl">3</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Enjoy The Features!</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">User Review</h4>
                    <h1 class="title">What Clients Say About Our App After Use It</h1>
                </div>
                <!-- review container  -->
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="./img/user1.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic"
                            onclick="showReview()">
                        <img src="./img/user2.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="./img/user3.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="./img/user4.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="./img/user5.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                    </div>
                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any
                                testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>IOS developer</p>
                        </div>
                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any
                                testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Vera Duncan</h4>
                            <p>Flutter developer</p>
                        </div>
                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any
                                testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Pirtle Karol</h4>
                            <p>Android developer</p>
                        </div>
                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any
                                testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Mark Joe</h4>
                            <p>React developer</p>
                        </div>
                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any
                                testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Leila Domniuc</h4>
                            <p>Angular developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="bg-color-primary-dark">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Pricing</h4>
                    <h1 class="title">Grow Up Your Money Saving</h1>
                    <div class="mt-5 flex items-center justify-center gap-4">
                        <p>Bill Monthly</p>
                        <label class="cursor-pointer relative inline-block w-20 h-8 rounded-full">
                            <input type="checkbox" id="toggleBtn" class="peer opacity-0 w-0 h-0">
                            <span
                                class="absolute top-0 left-0 right-0 bottom-0 bg-color-primary-light border border-solid border-color-gray rounded-full duration-300 before:content-[''] before:absolute before:w-6 before:h-6 before:bottom-1 before:left-1 before:rounded-full before:bg-color-white before:duration-300 peer-checked:before:translate-x-12 peer-checked:bg-color-secondary"></span>

                        </label>
                        <p>Bill Annually</p>
                    </div>
                </div>
                <div class="grid gap-5 md-grid-cols-2 lg:grid-cols-3">
                    <!--card1 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side-->
                        <div id="card_1_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0 ">
                                    20 <span class="text-sm font-normal tracking-widest">/per month</span></p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>
                        </div>
                        <!-- back side-->
                        <div id="card_1_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    120<span class="text-sm font-normal tracking-widest">/per Year</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>

                        </div>
                    </div>

                    <!--card2 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side-->
                        <div id="card_2_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0 ">
                                    50 <span class="text-sm font-normal tracking-widest">/per month</span></p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>
                        </div>
                        <!-- back side-->
                        <div id="card_2_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    180<span class="text-sm font-normal tracking-widest">/per Year</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>

                        </div>
                    </div>

                    <!--card3 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side-->
                        <div id="card_3_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0 ">
                                    100 <span class="text-sm font-normal tracking-widest">/per month</span></p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>
                        </div>
                        <!-- back side-->
                        <div id="card_3_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    200<span class="text-sm font-normal tracking-widest">/per Year</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>
                            <button class="card_btn">Get Started</button>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="blog" class="bg-color-primary-light">
            <div class="container py-12">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Innovation And Quality Improvement</h4>
                    <h1 class="title">Latest Updates, Solution and Company News</h1>
                </div>
                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3 shrink">
                    <!--blog 1 -->
                    <div>
                        <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                            <img class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out"
                                src="/img/blog3.jpg" alt="" />
                        </div>
                        <div>
                            <div class="flex items-center gap-5 py-5">
                                <p>20 Augest 2022</p>
                                <p>1 min read</p>

                            </div>
                            <a href="#blog"
                                class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Four
                                way or five way update</a>

                            <p class="leading-relaxed my-5">Here are the biggest enterprise technology acquisitions of
                                2021 so far, in reverse chronological order.</p>
                            <a href="#blog"
                                class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                                <span class="tracking-wider capitalize underline hover:no-underline">Read More</span>
                            </a>
                        </div>
                    </div>
                    <!--blog 2 -->
                    <div>
                        <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                            <img class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out"
                                src="/img/blog2.jpg" alt="" />
                        </div>
                        <div>
                            <div class="flex items-center gap-5 py-5">
                                <p>20 Augest 2022</p>
                                <p>1 min read</p>

                            </div>
                            <a href="#blog"
                                class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Four
                                way or five way update</a>

                            <p class="leading-relaxed my-5">Here are the biggest enterprise technology acquisitions of
                                2021 so far, in reverse chronological order.</p>
                            <a href="#blog"
                                class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                                <span class="tracking-wider capitalize underline hover:no-underline">Read More</span>
                            </a>
                        </div>
                    </div>
                    <!--blog 1 -->
                    <div>
                        <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                            <img class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out"
                                src="/img/blog1.jpg" alt="" />
                        </div>
                        <div>
                            <div class="flex items-center gap-5 py-5">
                                <p>20 Augest 2022</p>
                                <p>1 min read</p>

                            </div>
                            <a href="#blog"
                                class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Four
                                way or five way update</a>

                            <p class="leading-relaxed my-5">Here are the biggest enterprise technology acquisitions of
                                2021 so far, in reverse chronological order.</p>
                            <a href="#blog"
                                class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                                <span class="tracking-wider capitalize underline hover:no-underline">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="download" class="bg-color-primary-light">
            <div class="container h-[80vh] grid place-items-center py-20">
                <div class="text-center m-auto md:w-2/3">

                    <h1 class="title">Download Our App And Enjoy The Features</h1>
                    <p class="leading-relaxed pt-5  ">Get your blood tests delivered at home collect a sample from the
                        news your blood tests.</p>
                    <div class="flex flex-cols md:flex-row items-center justify-center gap-5 pt-10 rounded-lg">
                        <a href="#"
                            class=" h-16 w-44 grid bg-color-white place-items-center rounded-lg hover:opactiy-70
                        "><img
                                src="/img/g-play-dark.png"></a>
                        <a href="#"
                            class=" h-16 w-44 grid bg-color-white place-items-center rounded-lg hover:opactiy-70
                        ">
                            <img src="/img/ios-store-dark.png" /></a>
                    </div>
                </div>
        </section>
    </main>
    <script>
        //Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');
        const hlink = document.querySelectorAll('#hlink');
        const faSolid = document.querySelector('.fa-solid');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            faSolid.classList.toggle('fa-xmark');
        });

        hlink.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                faSolid.classList.toggle('fa-xmark');
            });
        });

        const userTexts = document.getElementsByClassName('user-text');
        const userPics = document.getElementsByClassName('user-pic');

        function showReview() {


            for (userPic of userPics) {
                userPic.classList.remove("active-pic");
            }
            for (userText of userTexts) {
                userText.classList.remove("active-text");
            }
            let i = Array.from(userPics).indexOf(event.target);
            userPics[i].classList.add('active-pic');
            userTexts[i].classList.add('active-text');



        }

        const toggleBtn = document.getElementById('toggleBtn');
        const card_1_front = document.getElementById('card_1_front');
        const card_1_back = document.getElementById('card_1_back');
        const card_2_front = document.getElementById('card_2_front');
        const card_2_back = document.getElementById('card_2_back');
        const card_3_front = document.getElementById('card_3_front');
        const card_3_back = document.getElementById('card_3_back');

        toggleBtn.addEventListener('change', () => {
            card_1_front.classList.toggle('-rotate-y-180');
            card_1_back.classList.toggle('rotate-y-180');

            card_2_front.classList.toggle('-rotate-y-180');
            card_2_back.classList.toggle('rotate-y-180');

            card_3_front.classList.toggle('-rotate-y-180');
            card_3_back.classList.toggle('rotate-y-180');
        });
    </script>
</body>

</html>
