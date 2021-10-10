@extends('admin.layout.master')

@section('content')


    <div class="content">
        <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h3 class="text-lg font-medium truncate ml-5" >ویژگی های محصول
                                {{$product->name}}
                            </h3>
                        </div>
                        @php
                            $propertygroups = $product->category->propertygroups
                        @endphp
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <form action="{{route('products.properties.store',$product)}}" method="post" class="form-control" enctype="multipart/form-data">
                                @csrf

                                @foreach($propertygroups as $group)
                                    <div class="intro-y block sm:flex items-center h-10">
                                        <h5 class="text-lg font-medium truncate ml-5">{{$group->title}}</h5>
                                    </div>
                                    <div class="row">
                                        @foreach($group->properties as $property)
                                            <div class="form-group col-span-6">
                                                <div class="row">
                                                    <div class="col-span-2 ">
                                                        <label for="name">{{$property->title}}</label>
                                                    </div>
                                                    <div class="col-span-10 ">
                                                        <input type="text" class="form-control" name="properties[{{$property->id}}][value]" value="{{$property->getValueForProduct($product)}}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach


                            <!-- BEGIN: Vertical Form -->
                                {{--                   <div class="intro-y ">
                                                       <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                                           <h2 class="font-medium text-base ml-auto">
                                                               ایجاد دسته بندی
                                                           </h2>
                                                       </div>

                                                       <div id="vertical-form" class="p-5">
                                                           <div class="preview">
                                                               <div>
                                                                   <label for="category_id" class="form-label">دسته والد</label>
                                                                   <select name="category_id" id="category_id" class="form-control">
                                                                       <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>
                                                                       @foreach($categories as $category)
                                                                           <option value="{{$category->id}}">{{$category->title}}</option>
                                                                       @endforeach
                                                                   </select>
                                                               </div>
                                                           </div>
                                                       </div>


                                                       <div id="vertical-form" class="p-5">
                                                           <div class="preview">
                                                               <div class="form-group">
                                                                   <label for="image">تصویر</label><br>
                                                                   <input type="file" name="image" id="image" class="form-control bg-white">
                                                               </div>
                                                           </div>
                                                       </div>


                                                       <div id="vertical-form" class="p-5">
                                                           <div class="preview">
                                                               <div>
                                                                   <label for="title" class="form-label">عنوان</label>
                                                                   <input id="title" name="title" type="text" class="form-control"
                                                                          placeholder="نام دسته بندی را وارد کنید ">
                                                               </div>
                                                           </div>
                                                       </div>


                                                       <div id="vertical-form" class="p-5">
                                                           <div class="preview">
                                                               <label for="category_id" class="form-label">انتخاب گروه مشخصات</label>
                                                               @foreach($propertygroups as $propertygroup)
                                                                   <div class="float-none">
                                                                       <input type="checkbox" name="propertygroups[]"
                                                                              value="{{$propertygroup->id}}" id="{{$propertygroup->id}}" class="form-check-input">
                                                                       <label for="{{$propertygroup->id}}">
                                                                           {{$propertygroup->title}}
                                                                       </label>
                                                                   </div>
                                                               @endforeach
                                                           </div>
                                                       </div>

                                                   </div>--}}
                                <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                                <!-- END: Vertical Form -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





@endsection
