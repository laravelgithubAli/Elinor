@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">ویژگی ها</a> <i data-feather="chevron-left"
                                                                                       class="breadcrumb__icon"></i> <a
            href="" class="breadcrumb--active">ایجاد</a></div>
@endsection

@section('content')

    <form action="{{route('properties.store')}}" method="post" class="mt-5">
        @csrf

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base">
                ایجاد ویژگی ها
            </h2>
        </div>
        <!-- BEGIN: Vertical Form -->
        <div class="grid grid-cols-12 gap-6 mt-2">
            <div id="vertical-form" class="intro-y col-span-12 lg:col-span-6 p-5">
                <div class="preview">
                    <div class="form-group">
                        <label for="title" class="font-medium text-base">عنوان</label><br>
                        <input type="text" name="title" id="title" class="form-control bg-white mt-2">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="propertygroup_id" class="font-medium text-base">دسته والد</label>
                    <select name="propertygroup_id" id="propertygroup_id" class="form-control">
                        <option value="" disabled selected>گروه مشخصات را انتخاب کنید ..</option>
                        @foreach($propertygroups as $propertygroup)
                            <option value="{{$propertygroup->id}}">{{$propertygroup->title}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary mt-5" value="ثبت">
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
