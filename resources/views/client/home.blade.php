<!DOCTYPE html>
<html lang="en" class="dark">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{url('')}}/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>ثبت نام - روبیک - قالب مدیریتی تیلوند اچ تی ام ال</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{url('')}}/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{url('')}}/dist/images/logo.svg">
                <span class="text-white text-lg mr-3">رو<span class="font-medium">بیک</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{url('')}}/dist/images/illustration.svg">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    تنها چند کلیک
                    <br> ساخت اکانت تان
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">تمامی اکانت های خود را در یک مکان مدیریت کنید</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:mr-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-right">
                    جهت ورود کلیک کنید
                </h2>

                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-right">
                    <div class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:ml-3 align-top">



                        @auth()

                            <div class="">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf

                                    <input type="submit" class="btn btn-primary" value="خروج">

                                </form>
                            </div>

                        @else

                            <div>
                                <a href="{{route('login')}}" class="">ورود</a>
                            </div>

                        @endauth






                    </div>
                </div>
            </div>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: JS Assets-->
<script src="{{url('')}}/dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>
