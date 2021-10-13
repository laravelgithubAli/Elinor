@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">پروفایل</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
    </div>@endsection

@section('content')

    <form action="{{route('users.update',$user)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <!-- BEGIN: Vertical Form -->

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ویرایش اطلاعات
            </h2>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-6">

                <div class="form-group">
                    <label for="name" class="font-medium text-base">نام</label>
                    <input id="name" name="name" type="text" class="form-control"
                           placeholder="نام را وارد کنید" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="lastname" class="font-medium text-base">نام خانوادگی</label>
                    <input id="lastname" name="lastname" type="text" class="form-control"
                           placeholder="نام خانوادگی را وارد کنید" value="{{$user->lastname}}">
                </div>

                <div class="form-group">
                    <label for="email" class="font-medium text-base">ایمیل</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="number" class="font-medium text-base">شماره</label>
                    <input type="text" class="form-control" name="number" id="number" value="{{$user->number}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="password" class="font-medium text-base">رمز</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="رمز جدید">
                </div>
                <br>
                <div class="form-group">
                    <label for="job" class="font-medium text-base">شغل</label>
                    <input type="text" class="form-control" name="job" id="job" placeholder="شغل" value="{{$user->job}}">
                </div>
                <br>
            </div>

            <div class="intro-y col-span-12 lg:col-span-6">

                <br>
                <div class="form-control">
                    <div class="row grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <label for="image" class="font-medium text-base"> آپلود تصویر جدید </label><br>
                            <input type="file" name="image" id="image" class="">
                        </div>
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <label for="ww" class="font-medium text-base mb-2"> تصویر
                                فعلی </label><br>
                            <img id="ww" {{--src="{{url('/storage/app/'.$user->image)}}"--}}
                            src="{{url('/storage'.$user->image)}}"
                                 width="200"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.layout.errors')
            <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
