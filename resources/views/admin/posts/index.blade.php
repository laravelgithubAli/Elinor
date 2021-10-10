@extends('admin.layout.master')

@section('content')

    <div class="content">

        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">لیست</a> </div>
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
        <div
                class="grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Weekly Top Products -->
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                لیست پست ها
                            </h2>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">تصویر</th>
                                    <th class="whitespace-nowrap">عنوان پست</th>
                                    <th class="whitespace-nowrap">دسته بندی</th>
                                    <th class="whitespace-nowrap">نویسنده</th>
                                    <th class="whitespace-nowrap">زمان مطالعه</th>
                                    <th class="text-center whitespace-nowrap">فعالیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                         class="tooltip rounded-full"
                                                         src="{{url('/storage/app/'.$post->image)}}"
                                                         title="{{$post->created_at}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{$post->title}}</a>
                                        </td>
                                        <td class="text-center">{{$post->postcategory->title}}</td>
                                        <td class="w-40">{{$post->creator}}</td>

                                        <td class="w-40">{{$post->studytime}}</td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3"
                                                   href="{{route('posts.edit',$post)}}"> <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 ml-1"></i>
                                                    ویرایش</a>

                                                <form action="{{route('posts.destroy',$post)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" class=" flex items-center text-theme-6">
                                                        <input type="submit" value="حذف"><i
                                                                data-feather="trash-2"
                                                                class="w-4 h-4 ml-1"></i>
                                                    </a>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                            <ul class="pagination">
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevrons-right"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevron-right"></i> </a>
                                </li>
                                <li><a class="pagination__link" href="">...</a></li>
                                <li><a class="pagination__link pagination__link--active" href="">1</a></li>
                                <li><a class="pagination__link" href="">2</a></li>
                                <li><a class="pagination__link" href="">3</a></li>
                                <li><a class="pagination__link" href="">...</a></li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevron-left"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevrons-left"></i> </a>
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
        </div>
    </div>


@endsection
