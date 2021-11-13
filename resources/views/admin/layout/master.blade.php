<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{url('')}}/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>داشبرد - روبیک - قالب مدیریتی تیلوند اچ تی ام ال</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{url('')}}/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="main">
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pr-5 pt-4">
            <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{url('')}}/dist/images/logo.svg">
            <span class="hidden xl:block text-white text-lg mr-3">رو<span class="font-medium">بیک</span> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li class="ali">
                <a href="{{route('admin.home')}}" class="side-menu {{isset($activity111) ? $activity111:''}}">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title">
                        دشبرد
                        <div class="side-menu__sub-icon transform rotate-180"></div>
                    </div>
                </a>
            </li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity) ? $activity:''}}">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        دسته بندی محصول
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu) ? $submenu:''}}">
                    <li>
                        <a href="{{route('categories.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity1) ? $activity1:''}}">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        دسته بندی پست
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu1) ? $submenu1:''}}">
                    <li>
                        <a href="{{route('postcategories.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('postcategories.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity2) ? $activity2:''}} ">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        محصولات
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu2) ? $submenu2:''}}">
                    <li>
                        <a href="{{route('products.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('products.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity3) ? $activity3:''}} ">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        پست
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu3) ? $submenu3:''}}">
                    <li>
                        <a href="{{route('posts.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity4) ? $activity4:''}}">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        گروه ویژگی ها
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu4) ? $submenu4:''}}">
                    <li>
                        <a href="{{route('propertygroups.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('propertygroups.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity5) ? $activity5:''}}">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        ویژگی ها
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu5) ? $submenu5:''}}">
                    <li>
                        <a href="{{route('properties.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('properties.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
            @if(auth()->user()->role_id == 1)
             <li class="ali">
                <a href="###" class="side-menu menu-item {{isset($activity6) ? $activity6:''}}">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">
                        نقش ها
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu6) ? $submenu6:''}}">
                    <li>
                        <a href="{{route('roles.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('roles.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>
              <li>
                <a href="javascript:;" class="side-menu {{isset($activity8) ? $activity8:''}}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        کاربران
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu8) ? $submenu8:''}}">
                    <li>
                        <a href="{{route('users.show')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> نمایش کاربران </div>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="###" class="side-menu {{isset($activity7) ? $activity7:''}}">
                    <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="side-menu__title">
                        کامنت
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu7) ? $submenu7:''}}">
                    <li>
                        <a href="{{route('productquestions.create')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> ایجاد </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('productquestions.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> لیست </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="###" class="side-menu {{isset($activity22) ? $activity22:''}}">
                    <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="side-menu__title">
                        فوتر
                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="{{isset($submenu22) ? $submenu22:''}}">
                    <li>
                        <a href="{{route('footer.links.edit')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> مدیریت لینک ها </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('footertext.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> مدیرت متن فوتر </div>
                        </a>
                    </li>
                      <li>
                        <a href="{{route('footer.description.index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> مدیرت عکس و توضیحات فوتر </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('sliders.index')}}" class="side-menu {{isset($activity12) ? $activity12:''}}">
                    <div class="side-menu__icon"> <i data-feather="calendar"></i></div>
                    <div class="side-menu__title"> اسلایدر </div>
                </a>
            </li>

            <li>
                <a href="{{route('massageMail.index')}}" class="side-menu {{isset($activity12) ? $activity12:''}}">
                    <div class="side-menu__icon"> <i data-feather="calendar"></i></div>
                    <div class="side-menu__title"> ارسال خبرنامه </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Side Menu -->

    <div class="content">

        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            @yield('topfield')
            <!-- END: Breadcrumb -->
           <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown  sm:ml-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title"> اطلاعیه ها </div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-4.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">جانی دپ</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">06:05 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-15.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">لئوناردو دیکاپریو</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">06:05 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-15.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">کیانو ریورز</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">05:09 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-5.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">جان تراولتا</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">03:20 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-12.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">دنزل واشینگتون</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">01:10 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                    <img alt="Rubick Tailwind HTML Admin Template" src="{{url('')}}/dist/images/profile-10.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">{{auth()->user()->name}} {{auth()->user()->lastname}}</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">{{auth()->user()->job}}</div>
                        </div>
                        <div class="p-2">
                            <a href="{{route('users.edit',auth()->user())}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 ml-2"></i> پروفایل </a>
                        </div>
                        <form action="{{route('logout')}}" method="post" >
                            @csrf
                            <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                <button type="submit" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>خروج</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->


    @yield('content')

    </div>

</div>
{{--<!-- BEGIN: Dark Mode Switcher-->
<div data-url="side-menu-dark-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 left-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 ml-10">
    <div class="ml-4 text-gray-700 dark:text-gray-300">حالت تیره</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher----}}>

<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=[]&libraries=places"></script>
<script src="{{url('')}}/dist/js/app.js"></script>
<!-- END: JS Assets-->

</body>
</html>
