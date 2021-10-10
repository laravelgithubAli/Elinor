@extends('admin.layout.master')

@section('content')

    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ایجاد پست</a> </div>
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
                                <div class="mr-3">کاربران و دسترسی</div>
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
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-4.jpg">
                                </div>
                                <div class="mr-3">جانی دپ</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">johnnydepp@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-15.jpg">
                                </div>
                                <div class="mr-3">لئوناردو دیکاپریو</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">leonardodicaprio@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-15.jpg">
                                </div>
                                <div class="mr-3">کیانو ریورز</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">keanureeves@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-5.jpg">
                                </div>
                                <div class="mr-3">جان تراولتا</div>
                                <div class="mr-auto truncate text-gray-600 text-xs text-left">johntravolta@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">محصولات</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-1.jpg">
                            </div>
                            <div class="mr-3">نیکون ضد </div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">عکاسی</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-11.jpg">
                            </div>
                            <div class="mr-3">دل ایکس‌پی‌اس </div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">کامپیوتر و لپ تاپ</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-8.jpg">
                            </div>
                            <div class="mr-3">سامسونگ کیوناین تی‌وی</div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">الکترونیک</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-11.jpg">
                            </div>
                            <div class="mr-3">نیکون ضد </div>
                            <div class="mr-auto truncate text-gray-600 text-xs text-left">عکاسی</div>
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
                    <img alt="Rubick Tailwind HTML Admin Template" src="/dist/images/profile-10.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">جانی دپ</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">مهندس دواپس</div>
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


        <form action="{{route('posts.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <!-- BEGIN: Vertical Form -->
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base ml-auto">
                    ایجاد پست
                </h2>
            </div>


            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="form-group">
                        <label for="title" class="font-medium text-base">عنوان پست</label>
                        <input id="title" name="title" type="text" class="form-control"
                               placeholder="نام محصول را وارد کنید">
                    </div>
                    <br>
                    <div>
                        <label for="postcategory_id"  class="font-medium text-base">دسته بندی</label>
                        <select name="postcategory_id" id="postcategory_id" class="form-control">
                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                            @foreach($postcategories as $postcategory)
                                <option value="{{$postcategory->id}}">{{$postcategory->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="creator" class="font-medium text-base">نویسنده</label>
                        <input type="text" class="form-control" name="creator" id="creator">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="studytime" class="font-medium text-base">زمان مطالعه</label>
                        <input type="text" class="form-control" name="studytime" id="studytime">
                    </div>
                    <br>


                    <div id="vertical-form" >
                        <div class="preview">
                            <div class="form-group">
                                <label for="body" class="font-medium text-base"> متن پست </label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                    <textarea class="form-control" id="editor-demo1"
                                                              name="body"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @include('admin.layout.errors')
                    <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Single File Upload -->
                    <div class="intro-y">
                        <div class="flex flex-col sm:flex-row items-center p-3 border-b border-gray-200 dark:border-dark-5">
                            <label class="font-medium text-base">
                                آپلود تصویر
                            </label>
                        </div>
                        <div id="single-file-upload" class="p-5 form-control bg-white">
                            <div class="preview">
                                <div class="fallback">
                                    <input name="image" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">فایل خود را اینجا بکشید و رها کنید</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Single File Upload -->
                </div>
            </div>
            <!-- END: Vertical Form -->
        </form>


    </div>

@endsection
