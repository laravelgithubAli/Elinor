@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">نقش ها</a> <i data-feather="chevron-left"
                                                                                     class="breadcrumb__icon"></i> <a
            href="" class="breadcrumb--active">ایجاد نقش</a></div>
@endsection

@section('content')

    <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ایجاد نقش
            </h2>
        </div>
        <!-- BEGIN: Vertical Form -->
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div class="form-group">
                            <label for="title" class="font-medium text-base">عنوان</label><br>
                            <input type="text" name="title" id="title" class="form-control bg-white">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-5" value="ثبت">
                </div>


            </div>
            <div class="intro-y col-span-12 lg:col-span-6">
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <label for="category_id" class="font-medium text-base">انتخاب دسترسی ها</label><br><br>
                        @foreach($permissions as $permission)
                            <div class="float-none">
                                <input type="checkbox" name="permissions[]"
                                       value="{{$permission->id}}" id="{{$permission->id}}" class="form-check-input">
                                <label for="{{$permission->id}}">
                                    {{$permission->label}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- END: Vertical Form -->
    </form>

@endsection
