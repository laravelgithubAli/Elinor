@extends('admin.layout.master')

@section('content')

    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">اپلیکیشن</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">داشبرد</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative ml-3 sm:ml-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent placeholder-theme-13" placeholder="جستجو...">
                    <i data-feather="search" class="search__icon dark:text-gray-300"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">صفحات</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                <div class="mr-3">تنظیمات ایمیل</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                <div class="mr-3">کاربران و دسترسی ها</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                <div class="mr-3">گزارش تراکنش ها</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">کاربران</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                </div>
                                <div class="mr-3">آل پاچینو</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">alpacino@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                </div>
                                <div class="mr-3">دنزل واشینگتون</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">denzelwashington@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                </div>
                                <div class="mr-3">کوین اسپیسی</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">kevinspacey@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                </div>
                                <div class="mr-3">نیکلاس کیج</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">nicolascage@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">محصولات</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-15.jpg">
                            </div>
                            <div class="mr-3">سامسونگ اس بیست اولترا</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">گوشی هوشمند و لپتاپ</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                            </div>
                            <div class="mr-3">سامسونگ اس بیست اولترا</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">گوشی هوشمند و لپتاپ</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                            </div>
                            <div class="mr-3">سونی مستر سریز ای‌ناین‌جی</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">الکترونیک</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                            </div>
                            <div class="mr-3">سامسونگ کیوناین تی‌وی</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">الکترونیک</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown ml-auto sm:ml-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title"> اطلاعیه ها </div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">آل پاچینو</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">05:09 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">دنزل واشینگتون</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">05:09 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">کوین اسپیسی</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">01:10 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">نیکلاس کیج</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">05:09 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">جانی دپ</a>
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
                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">آل پاچینو</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">مهندس فرانت اند</div>
                        </div>
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 ml-2"></i> پروفایل </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 ml-2"></i> افزودن اکانت </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 ml-2"></i>بازیابی رمزعبور</a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 ml-2"></i>راهنمایی</a>
                        </div>
                        <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>خروج</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                گزارش کلی
                            </h2>
                            <a href="" class="mr-auto flex items-center text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 ml-3"></i>به روزرسانی داده</a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% بالاتر از ماه گذشته"> 33% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">4.710</div>
                                        <div class="text-base text-gray-600 mt-1">مورد فروش </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% کمتر از ماه گذشته"> 2% <i data-feather="chevron-down" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">3.721</div>
                                        <div class="text-base text-gray-600 mt-1">سفارش جدید</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% بالاتر از ماه گذشته"> 12% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">2.149</div>
                                        <div class="text-base text-gray-600 mt-1">محصولات کلی</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% بالاتر از ماه گذشته"> 22% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">152.040</div>
                                        <div class="text-base text-gray-600 mt-1">بازدیدکنندگان</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 lg:col-span-6 mt-8">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                گزارش فروش
                            </h2>
                            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div class="flex flex-col xl:flex-row xl:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-theme-19 dark:text-gray-300 text-lg xl:text-xl font-bold">15,000 تومان</div>
                                        <div class="mt-0.5 text-gray-600 dark:text-gray-600">ماه اخیر</div>
                                    </div>
                                    <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-6"></div>
                                    <div>
                                        <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">10,000 تومان</div>
                                        <div class="mt-0.5 text-gray-600 dark:text-gray-600">ماه اخیر</div>
                                    </div>
                                </div>
                                <div class="dropdown xl:mr-auto mt-5 xl:mt-0">
                                    <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false">فیلتر دسته‌بندی<i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> </button>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> کامپیوتر و لپ تاپ </a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">گوشی هوشمند</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">الکترونیک</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">عکاسی</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">ورزشی</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart">
                                <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Weekly Top Seller -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                فروش بالای هفتگی
                            </h2>
                            <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                    <span class="truncate">17 - 30 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full ml-3"></div>
                                    <span class="truncate">31 - 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                    <span class="truncate">>= 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Weekly Top Seller -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                گزارش فروش
                            </h2>
                            <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                    <span class="truncate">17 - 30 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full ml-3"></div>
                                    <span class="truncate">31 - 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                    <span class="truncate">>= 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Official Store -->
                    <div class="col-span-12 xl:col-span-8 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                فروشگاه رسمی
                            </h2>
                            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="form-control sm:w-40 box pl-10" placeholder="فیلتر بر اساس شهر">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div>250 فروشگاه رسمی در 21 کشور ، برای مشاهده جزئیات مکان ، روی نشانگر کلیک کنید.</div>
                            <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                        </div>
                    </div>
                    <!-- END: Official Store -->
                    <!-- BEGIN: Weekly Best Sellers -->
                    <div class="col-span-12 xl:col-span-4 mt-6">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                بهترین فروشنده هفتگی
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">کوین اسپیسی</div>
                                        <div class="text-gray-600 text-xs mt-0.5">27 شهریور 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">رابرت دنیرو</div>
                                        <div class="text-gray-600 text-xs mt-0.5">11 مهر 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">جان تراولتا</div>
                                        <div class="text-gray-600 text-xs mt-0.5">14  آبان 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">آرنولد شوایتگز</div>
                                        <div class="text-gray-600 text-xs mt-0.5">16  آذر  1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">مشاهده بیشتر</a>
                        </div>
                    </div>
                    <!-- END: Weekly Best Sellers -->
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">هدف فروش </div>
                                        <div class="text-gray-600 mt-1">300 فروش </div>
                                    </div>
                                    <div class="flex-none mr-auto relative">
                                        <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">شبکه های اجتماعی </div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer mr-auto truncate">320 فالوور</div>
                                </div>
                                <div class="mt-4">
                                    <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">محصولات جدید</div>
                                        <div class="text-gray-600 mt-1">1450 محصول</div>
                                    </div>
                                    <div class="flex-none mr-auto relative">
                                        <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">تبلیغات پست شده</div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer mr-auto truncate">180 کمپین</div>
                                </div>
                                <div class="mt-4">
                                    <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Weekly Top Products -->
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                محصولات برتر هفته
                            </h2>
                            <div class="flex items-center sm:mr-auto mt-3 sm:mt-0">
                                <button class="btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 ml-2"></i> خروجی اکسل </button>
                                <button class="mr-3 btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 ml-2"></i> خروجی پی‌دی‌اف </button>
                            </div>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">تصاویر</th>
                                    <th class="whitespace-nowrap">نام محصول</th>
                                    <th class="text-center whitespace-nowrap">موجودی</th>
                                    <th class="text-center whitespace-nowrap">وضعیت</th>
                                    <th class="text-center whitespace-nowrap">فعالیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 27 آذر 1400 ">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="اپلود شده 26 مهر 1400 ">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="اپلود شده 16 مهر 1400 ">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">دل ایکس‌پی‌اس </a>
                                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">کامپیوتر و لپ تاپ</div>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                            <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="اپلود شده 11 تیر 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 23 تیر 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 17 دی 1400">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">سامسونگ کیوناین تی‌وی</a>
                                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">الکترونیک</div>
                                    </td>
                                    <td class="text-center">113</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                            <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="اپلود شده 14 بهمن 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="اپلود شده 18مهر 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="اپلود شده 19 تیر 1400">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">سامسونگ اس بیست اولترا</a>
                                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">گوشی هوشمند و لپتاپ</div>
                                    </td>
                                    <td class="text-center">140</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                            <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="اپلود شده 16 مهر 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 17 آذر 1400">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="اپلود شده 27 آذر 1400">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">نیکون ضد </a>
                                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">عکاسی</div>
                                    </td>
                                    <td class="text-center">50</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                            <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                            <ul class="pagination">
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li> <a class="pagination__link" href="">1</a> </li>
                                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                <li> <a class="pagination__link" href="">3</a> </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                </li>
                            </ul>
                            <select class="w-20 form-select box mt-3 sm:mt-0">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: Weekly Top Products -->
                </div>
            </div>
            <div class="col-span-12 xxl:col-span-3">
                <div class="xxl:border-l border-theme-5 -mb-10 pb-10">
                    <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        <!-- BEGIN: Transactions -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                    تراکنش ها
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">کوین اسپیسی</div>
                                            <div class="text-gray-600 text-xs mt-0.5">27 شهریور 1400</div>
                                        </div>
                                        <div class="text-theme-9">71+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">رابرت دنیرو</div>
                                            <div class="text-gray-600 text-xs mt-0.5">11 مهر 1400</div>
                                        </div>
                                        <div class="text-theme-9">30+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">جان تراولتا</div>
                                            <div class="text-gray-600 text-xs mt-0.5">14  آبان 1400</div>
                                        </div>
                                        <div class="text-theme-9">105+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">آرنولد شوایتگز</div>
                                            <div class="text-gray-600 text-xs mt-0.5">16  آذر  1400</div>
                                        </div>
                                        <div class="text-theme-9">43+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">راسل کرو</div>
                                            <div class="text-gray-600 text-xs mt-0.5">6 شهریور 1400</div>
                                        </div>
                                        <div class="text-theme-9">109+ تومان</div>
                                    </div>
                                </div>
                                <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <!-- END: Transactions -->
                        <!-- BEGIN: Recent Activities -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                    فعالیت های اخیر
                                </h2>
                                <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                            </div>
                            <div class="report-timeline mt-5 relative">
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">دنزل واشینگتون</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> به تیم پیوسته است </div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">آرنولد شوایتگز</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600">
                                            <div class="mt-1"> 3 عکس جدید اضافه کرد </div>
                                            <div class="flex mt-2">
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Dell XPS 13">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-7.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Samsung Q90 QLED TV">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-2.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Samsung Galaxy S20 Ultra">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-9.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-x text-gray-500 text-xs text-center my-4">12 خرداد</div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">کیانو ریورز</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> تغییر <a class="text-theme-1 dark:text-theme-10" href="">سونی مستر سریز ای‌ناین‌جی</a> قیمت و توضیحات</div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">جانی دپ</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> تغییر <a class="text-theme-1 dark:text-theme-10" href="">نیکون ضد </a>  توضیحات</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Recent Activities -->
                        <!-- BEGIN: Important Notes -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-auto">
                                    یادداشت های مهم
                                </h2>
                                <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="mt-5 intro-x">
                                <div class="box zoom-in">
                                    <div class="tiny-slider" id="important-notes">
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">لورم ایپسوم متن ساختگی با تولید سادگی</div>
                                            <div class="text-gray-500 mt-1"> 20 ساعت قبل </div>
                                            <div class="text-gray-600 text-right mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلیتکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">مشاهده نکته</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">لورم ایپسوم متن ساختگی با تولید سادگی</div>
                                            <div class="text-gray-500 mt-1"> 20 ساعت قبل </div>
                                            <div class="text-gray-600 text-right mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلیتکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">مشاهده نکته</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">لورم ایپسوم متن ساختگی با تولید سادگی</div>
                                            <div class="text-gray-500 mt-1"> 20 ساعت قبل </div>
                                            <div class="text-gray-600 text-right mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلیتکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">مشاهده نکته</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Important Notes -->
                        <!-- BEGIN: Schedules -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                    برنامه ها
                                </h2>
                                <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate flex items-center"> <i data-feather="plus" class="w-4 h-4 ml-1"></i> افزودن برنامه های جدید </a>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x box">
                                    <div class="p-5">
                                        <div class="flex">
                                            <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                            <div class="font-medium text-base mx-auto">مهر</div>
                                            <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                        </div>
                                        <div class="grid grid-cols-7 gap-4 mt-5 text-center cal">
                                            <div class="font-medium">شنبه</div>
                                            <div class="font-medium">یکشنبه</div>
                                            <div class="font-medium">دوشنبه</div>
                                            <div class="font-medium">سه‌شنبه</div>
                                            <div class="font-medium">چهار‌شنبه</div>
                                            <div class="font-medium">پنجشنبه</div>
                                            <div class="font-medium">جمعه</div>
                                            <div class="py-0.5 rounded relative text-gray-600">29</div>
                                            <div class="py-0.5 rounded relative text-gray-600">30</div>
                                            <div class="py-0.5 rounded relative text-gray-600">31</div>
                                            <div class="py-0.5 rounded relative">1</div>
                                            <div class="py-0.5 rounded relative">2</div>
                                            <div class="py-0.5 rounded relative">3</div>
                                            <div class="py-0.5 rounded relative">4</div>
                                            <div class="py-0.5 rounded relative">5</div>
                                            <div class="py-0.5 bg-theme-29 dark:bg-theme-10 rounded relative">6</div>
                                            <div class="py-0.5 rounded relative">7</div>
                                            <div class="py-0.5 bg-theme-26 dark:bg-theme-17 text-white rounded relative">8</div>
                                            <div class="py-0.5 rounded relative">9</div>
                                            <div class="py-0.5 rounded relative">10</div>
                                            <div class="py-0.5 rounded relative">11</div>
                                            <div class="py-0.5 rounded relative">12</div>
                                            <div class="py-0.5 rounded relative">13</div>
                                            <div class="py-0.5 rounded relative">14</div>
                                            <div class="py-0.5 rounded relative">15</div>
                                            <div class="py-0.5 rounded relative">16</div>
                                            <div class="py-0.5 rounded relative">17</div>
                                            <div class="py-0.5 rounded relative">18</div>
                                            <div class="py-0.5 rounded relative">19</div>
                                            <div class="py-0.5 rounded relative">20</div>
                                            <div class="py-0.5 rounded relative">21</div>
                                            <div class="py-0.5 rounded relative">22</div>
                                            <div class="py-0.5 bg-theme-30 dark:bg-theme-22 rounded relative">23</div>
                                            <div class="py-0.5 rounded relative">24</div>
                                            <div class="py-0.5 rounded relative">25</div>
                                            <div class="py-0.5 rounded relative">26</div>
                                            <div class="py-0.5 bg-theme-31 dark:bg-theme-23 rounded relative">27</div>
                                            <div class="py-0.5 rounded relative">28</div>
                                            <div class="py-0.5 rounded relative">29</div>
                                            <div class="py-0.5 rounded relative">30</div>
                                            <div class="py-0.5 rounded relative text-gray-600">1</div>
                                            <div class="py-0.5 rounded relative text-gray-600">2</div>
                                            <div class="py-0.5 rounded relative text-gray-600">3</div>
                                            <div class="py-0.5 rounded relative text-gray-600">4</div>
                                            <div class="py-0.5 rounded relative text-gray-600">5</div>
                                            <div class="py-0.5 rounded relative text-gray-600">6</div>
                                            <div class="py-0.5 rounded relative text-gray-600">7</div>
                                            <div class="py-0.5 rounded relative text-gray-600">8</div>
                                            <div class="py-0.5 rounded relative text-gray-600">9</div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-200 dark:border-dark-5 p-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                            <span class="truncate">UI/UX ورکشاپ</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">23ام</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-1 dark:bg-theme-10 rounded-full ml-3"></div>
                                            <span class="truncate">VueJs توسعه فرانت با</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">10ام</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                            <span class="truncate">لاراول ای پی ا رست</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">31ام</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Schedules -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->

@endsection
