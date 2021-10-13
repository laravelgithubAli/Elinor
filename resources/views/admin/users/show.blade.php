@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">اپلیکیشن</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">داشبرد</a>
    </div>@endsection

@section('content')

    <h2 class="intro-y text-lg font-medium mt-10">
        چینش کاربران
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md ml-2">ارسال پیام</button>
        </div>

        <!-- BEGIN: Users Layout -->


        @foreach($users as $user)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:ml-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                 src="/dist/images/profile-8.jpg">
                        </div>
                        <div class="lg:mr-2 lg:ml-auto text-center lg:text-right mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{$user->name}} {{$user->lastname}}</a>
                            <div class="text-gray-600 text-xs mt-0.5">{{$user->role->title}}</div>
                        </div>
                        <div class="flex mt-4 lg:mt-0">
                            <button class="btn btn-primary py-1 px-2 ml-2">پیام</button>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach




    <!-- BEGIN: Users Layout -->

        <!-- END: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                </li>
                <li><a class="pagination__link" href="">...</a></li>
                <li><a class="pagination__link" href="">1</a></li>
                <li><a class="pagination__link pagination__link--active" href="">2</a></li>
                <li><a class="pagination__link" href="">3</a></li>
                <li><a class="pagination__link" href="">...</a></li>
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
        <!-- END: Pagination -->
    </div>

@endsection
