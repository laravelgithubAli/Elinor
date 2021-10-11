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
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{url('')}}/dist/images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-29 py-5 hidden">
        <li>
            <a href="#" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> دشبرد <i data-feather="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
            </a>
            <ul class="menu__sub-open">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title"> چینش منو <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> منو کنار </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> منو ساده </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> منو بالا </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-light-inbox.html" class="menu">
                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="menu__title"> صندوق ورودی </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-file-manager.html" class="menu">
                <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="menu__title"> مدیریت فایل </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="menu">
                <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="menu__title"> نمای فروش </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="menu">
                <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="menu__title"> چت </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> پست </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-calendar.html" class="menu">
                <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                <div class="menu__title"> تقویم </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="edit"></i> </div>
                <div class="menu__title"> کراد <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> لیست داده </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> فرم </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> کاربران <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> چینش 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> چینش 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> چینش 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="trello"></i> </div>
                <div class="menu__title"> پروفایل <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> نمای کل 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="layout"></i> </div>
                <div class="menu__title"> صفحات <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> ویزارد <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> بلاگ <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> قیمت‌گذاری <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> فاکتور <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> پرسش و پاسخ <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> ورود </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> ثبت نام </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> صفحه خطا </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> بروزرسانی پروفایل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> تغییر رمزعبور  </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="menu__title"> کامپوننت‌ها <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> جدول <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">جدول ساده</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">تیبللاتور</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">همپوشانی<i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">مودال</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">اسلاید اور</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">اطلاعیه‌ها</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">آکاردیون</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">دکمه</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">هشدار</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">نوار پیشرفت</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> تولتیپ </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> دراپ‌دوان </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> تایپوگرافی </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> ایکن </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> ایکن لودینگ </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                <div class="menu__title"> فرم‌ها <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> فرم ساده </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> انتخابگر زمان  </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tail-select.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> انتخابگر تیل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">آپلود فایل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">ادیتور ویسیویگ</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">اعتبارسنجی</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="menu__title">ویجت‌ها<i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">نمودار</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">اسلایدر</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">بزرگنمایی تصویر</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
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
                <a href="#" class="side-menu  menu-item">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title">
                        دشبرد
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-up"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        {{--class="side-menu side-menu__sub-open side-menu--active"--}}
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> نمای کل 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> نمای کل 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> نمای کل 3 </div>
                        </a>
                    </li>
                </ul>
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
                <a href="{{route('sliders.index')}}" class="side-menu {{isset($activity12) ? $activity12:''}}">
                    <div class="side-menu__icon"> <i data-feather="calendar"></i></div>
                    <div class="side-menu__title"> اسلایدر </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Side Menu -->



    @yield('content')



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
