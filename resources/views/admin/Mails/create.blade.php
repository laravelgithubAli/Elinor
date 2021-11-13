@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ایجاد پست</a> </div>
@endsection

@section('content')

    <form action="{{route('massageMail.store')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <!-- BEGIN: Vertical Form -->
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ارسال ایمیل
            </h2>
        </div>


        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div id="vertical-form" >
                    <div class="preview">
                        <div class="form-group">
                            <label for="body" class="font-medium text-base"> متن ایمیل </label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="">
                                                    <textarea class="form-control" id="editor-demo1"
                                                              name="title"></textarea>
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
                <label for="www" class="font-medium text-base" >ارسال ایمیل به :</label>
                <div>
                    <input type="checkbox" name="users"   title="کاربرانی که در سایت ثبت نام کرده اند.."> <span class="font-medium text-base">کاربران</span>
                </div>

                <div>
                    <input type="checkbox" name="newsletter"  title="کاربرانی که در خبر نامه ثبت نام کرده اند.."><span class="font-medium text-base">خبرنامه</span>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
