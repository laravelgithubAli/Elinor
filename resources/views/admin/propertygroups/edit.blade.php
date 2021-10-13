@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">گروه ویژگی ها</a> <i data-feather="chevron-left"
                                                                                            class="breadcrumb__icon"></i>
        <a href="" class="breadcrumb--active">ویرایش</a></div>
@endsection


@section('content')

    <form action="{{route('propertygroups.update',$propertygroup)}}" method="post" class="mt-5">
        @csrf
        @method('PATCH')

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ویرایش گروه ویژگی ها
            </h2>
        </div>
        <!-- BEGIN: Vertical Form -->
        <div class="grid grid-cols-12 gap-6 mt-2 p-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div class="form-group">
                    <label for="title" class="font-medium text-base">عنوان</label><br>
                    <input type="text" name="title" id="title" value="{{$propertygroup->title}}"
                           class="form-control bg-white">
                </div>
                <input type="submit" class="btn btn-primary mt-5" value="ثبت">
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
