@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">فوتر</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">مدیریت لینک ها</a> </div>
@endsection


@section('content')

    <form action="{{route('footers.update')}}" method="post" class="mt-5" >
        @csrf
        @method('PATCH')
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base">
                مدیریت لینک ها
            </h2>
        </div>
        <!-- BEGIN: Vertical Form -->
        <div id="vertical-form" class="grid grid-cols-12 gap-6 mt-5 p-5">
            <div class="intro-y col-span-12 lg:col-span-6">

                <div class="form-group">
                    <label for="instagram" class="font-medium text-base">اینستاگرام</label><br>
                    <input type="text" name="instagram" id="instagram" class="form-control bg-white mt-2" placeholder="لینک را وارد کنید.." value="{{$footer->instagram}}">
                </div>

                <div class="form-group">
                    <label for="whatsapp" class="font-medium text-base">واتساپ</label><br>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control bg-white mt-2" placeholder="لینک را وارد کنید.." value="{{$footer->whatsapp}}">
                </div>

                <div class="form-group">
                    <label for="telegram" class="font-medium text-base">تلگرام</label><br>
                    <input type="text" name="telegram" id="telegram" class="form-control bg-white mt-2" placeholder="لینک را وارد کنید.." value="{{$footer->telegram}}">
                </div>

                <div class="form-group">
                    <label for="SupportPhone" class="font-medium text-base">تلفن پشتیبانی</label><br>
                    <input type="text" name="SupportPhone" id="SupportPhone" class="form-control bg-white mt-2" placeholder="لینک را وارد کنید.." value="{{$footer->SupportPhone}}">
                </div>

                @include('admin.layout.errors')
                <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
