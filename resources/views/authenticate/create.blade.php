<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>ثبت نام - روبیک - قالب مدیریتی تیلوند اچ تی ام ال</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="/dist/images/logo.svg">
                <span class="text-white text-lg mr-3">رو<span class="font-medium">بیک</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="/dist/images/illustration.svg">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    تنها چند کلیک
                    <br> ساخت اکانت تان
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">تمامی اکانت های خود را در یک مکان مدیریت کنید</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:mr-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-right">
                        ثبت نام
                    </h2>
                    <div class="intro-x mt-2 text-gray-500 dark:text-gray-500 xl:hidden text-center">چند کلیک دیگر برای ورود به اکانت خود دارید . همه حساب های تجارت الکترونیکی خود را در یک مکان مدیریت کنید</div>
                    <div class="intro-x mt-8">
                        <input type="text" name="name" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="نام ">
                        <input type="text" name="lastname" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="نام خانوادگی ">
                        <input type="text" name="number" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="شماره تلفن ">
                        <input type="text" name="email" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="ایمیل">
                        <input type="text" name="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="رمزعبور">
                        <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>
                        </div>
                        <a href="" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">رمزعبور امن چیست؟</a>
                        <input type="text" name="password_confirmation" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="تایید رمزعبور">
                    </div>
                    <div class="intro-x flex items-center text-gray-700 dark:text-gray-600 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border ml-2">
                        <label class="cursor-pointer select-none" for="remember-me">موافقت با</label>
                        <a class="text-theme-1 dark:text-theme-10 ml-1" href="">حریم شخصی</a>.
                    </div>
                    @include('admin.layout.errors')
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-right">
                        <input type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:ml-3 align-top" value="ثبت نام">
                        <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"><a
                                href="/login">ورود</a></button>
                    </div>
                </div>
            </div>
        </form>

        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="login-dark-register.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 left-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 ml-10">
    <div class="ml-4 text-gray-700 dark:text-gray-300">حالت تیره</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="/dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>
