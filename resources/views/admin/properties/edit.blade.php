@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">ویژگی ها</a> <i data-feather="chevron-left"
                                                                                       class="breadcrumb__icon"></i> <a
            href="" class="breadcrumb--active">ویرایش</a></div>
@endsection

@section('content')

    <form action="{{route('properties.update',$property)}}" method="post" class="mt-5">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base ml-auto">
                        ویرایش مشخصات
                    </h2>
                </div>

                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div class="form-group">
                            <label for="title">عنوان</label><br>
                            <input type="text" name="title" id="title" value="{{$property->title}}"
                                   class="form-control bg-white mt-2">
                        </div>
                    </div>
                </div>

                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="propertygroup_id" class="form-label">گروه مشخصات</label>
                            <select name="propertygroup_id" id="propertygroup_id" class="form-control">
                                <option value="" disabled selected>گروه مشخصات را انتخاب کنید ..</option>
                                @foreach($propertygroups as $propertygroup)
                                    <option
                                        @if($propertygroup->id == $property->propertygroup_id)
                                        selected
                                        @endif
                                        value="{{$propertygroup->id}}">{{$propertygroup->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-5" value="ثبت">
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
