@extends('admin.layout.master')

@section('content')

    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">دسته بندی محصول</a> <i
                        data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
            </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative ml-3 sm:ml-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent placeholder-theme-13"
                           placeholder="جستجو...">
                    <i data-feather="search" class="search__icon dark:text-gray-300"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search"
                                                              class="notification__icon dark:text-gray-300"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">صفحات</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div
                                        class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="inbox"></i></div>
                                <div class="mr-3">تنظیمات ایمیل</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                        class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="users"></i></div>
                                <div class="mr-3">کاربران و دسترسی</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                        class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="credit-card"></i></div>
                                <div class="mr-3">گزارش تراکنش ها</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">کاربران</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                         src="/dist/images/profile-6.jpg">
                                </div>
                                <div class="mr-3">کوین اسپیسی</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">
                                    kevinspacey@left4code.com
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                         src="/dist/images/profile-8.jpg">
                                </div>
                                <div class="mr-3">دنزل واشینگتون</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">
                                    denzelwashington@left4code.com
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                         src="/dist/images/profile-9.jpg">
                                </div>
                                <div class="mr-3">رابرت دنیرو</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">
                                    robertdeniro@left4code.com
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                         src="/dist/images/profile-8.jpg">
                                </div>
                                <div class="mr-3">لئوناردو دیکاپریو</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">
                                    leonardodicaprio@left4code.com
                                </div>
                            </a>
                        </div>
                        <div class="search-result__content__title">محصولات</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/preview-1.jpg">
                            </div>
                            <div class="mr-3">سونی مستر سریز ای‌ناین‌جی</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">الکترونیک</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/preview-6.jpg">
                            </div>
                            <div class="mr-3">مک بوک اپل 13</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">کامپیوتر و لپ تاپ</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/preview-9.jpg">
                            </div>
                            <div class="mr-3">دل ایکس‌پی‌اس</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">کامپیوتر و لپ تاپ</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/preview-15.jpg">
                            </div>
                            <div class="mr-3">مک بوک اپل 13</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">کامپیوتر و لپ تاپ</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown ml-auto sm:ml-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                     aria-expanded="false"><i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
                </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title"> اطلاعیه ها</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/profile-6.jpg">
                                <div
                                        class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">کوین اسپیسی</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">06:05 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/profile-8.jpg">
                                <div
                                        class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">دنزل واشینگتون</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">01:10 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/profile-9.jpg">
                                <div
                                        class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">رابرت دنیرو</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">01:10 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/profile-8.jpg">
                                <div
                                        class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">لئوناردو دیکاپریو</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">01:10 صبح</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit ml-1">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                     src="/dist/images/profile-2.jpg">
                                <div
                                        class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="mr-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate ml-5">ادوارد نوترون</a>
                                    <div class="text-xs text-gray-500 mr-auto whitespace-nowrap">05:09 عصر</div>
                                </div>
                                <div class="w-full truncate text-gray-600 mt-0.5">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                     role="button" aria-expanded="false">
                    <img alt="Rubick Tailwind HTML Admin Template" src="/dist/images/profile-7.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">کوین اسپیسی</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">مهندس بک اند</div>
                        </div>
                        <div class="p-2">
                            <a href=""
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="user" class="w-4 h-4 ml-2"></i> پروفایل </a>
                            <a href=""
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="edit" class="w-4 h-4 ml-2"></i> افزودن اکانت </a>
                            <a href=""
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="lock" class="w-4 h-4 ml-2"></i>بازیابی رمزعبور</a>
                            <a href=""
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="help-circle" class="w-4 h-4 ml-2"></i>راهنمایی</a>
                        </div>
                        <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                            <a href=""
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>خروج</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->

        <form action="{{route('categories.update',$category)}}" method="post"
              enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <!-- BEGIN: Vertical Form -->
            <div class="intro-y ">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base ml-auto">
                        ویرایش دسته بندی
                    </h2>
                </div>
                {{--     style="border-radius: 50%;position: relative;left: -700px"
                                         width="200"--}}

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <div id="vertical-form" class="p-5">
                            <div class="preview">
                                <div>
                                    <label for="category_id" class="form-label font-medium">دسته والد</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>
                                        @foreach($categories as $parent)
                                            <option
                                                    @if ($parent->id == $category->category_id)
                                                    selected
                                                    @endif
                                                    value="{{$parent->id}}">{{$parent->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="vertical-form" class="p-5">
                            <div class="preview">
                                <div>
                                    <label for="title" class="form-label font-medium">عنوان</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                           placeholder="نام دسته بندی را وارد کنید " value="{{$category->title}}">
                                </div>
                            </div>
                        </div>

                        <div id="vertical-form" class="p-5">
                            <div class="preview">
                                <label for="category_id" class="form-label font-medium">انتخاب گروه مشخصات</label>
                                @foreach($propertygroups as $propertygroup)
                                    <div class="float-none">
                                        <input type="checkbox"
                                               @if($category->hasPropertygroup($propertygroup))
                                               checked
                                               @endif
                                               name="propertygroups[]"
                                               value="{{$propertygroup->id}}" id="{{$propertygroup->id}}"
                                               class="form-check-input">
                                        <label for="{{$propertygroup->id}}">
                                            {{$propertygroup->title}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                    </div>

                    <div class="intro-y col-span-12 lg:col-span-6">

                        <div id="vertical-form" class="p-5">
                            <div class="preview form-control">
                                <div class="grid grid-cols-12 gap-6 ">
                                    <div class="intro-y col-span-12 lg:col-span-6">
                                        <label for="image" class="font-medium"> آپلود تصویر جدید </label><br>
                                        <input type="file" name="image" id="image" class="">
                                    </div>
                                    <div class="intro-y col-span-12 lg:col-span-6">
                                        <label for="ww" class="font-medium mb-1"> تصویر
                                            فعلی </label><br>
                                        <img id="ww" src="{{str_replace('public','/storage',$category->image)}}"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
        </form>
    </div>




@endsection
