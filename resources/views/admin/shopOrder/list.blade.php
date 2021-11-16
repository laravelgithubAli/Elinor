@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">محصولات</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">لیست
        </a></div>
@endsection


@section('content')

    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 23px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 17px;
            width: 15px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <div
        class="grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
        <div class="col-span-12 xxl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate ml-5">
                            لیست سفارشات کاربر
                        </h2>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap">تصویر</th>
                                <th class="whitespace-nowrap">نام محصول</th>
                                <th class="whitespace-nowrap">تعداد</th>
                                <th class="whitespace-nowrap">قیمت</th>
                                <th class="whitespace-nowrap">نام گیرنده</th>
                                <th class="whitespace-nowrap">شماره تلفن</th>
                                <th class="whitespace-nowrap">ایمیل گیرنده</th>
                                <th class="whitespace-nowrap">آدرس</th>
                                {{--                                <th class="whitespace-nowrap">پیشنهاد ویژه</th>
                                                                <th class="whitespace-nowrap">گالری</th>
                                                                <th class="whitespace-nowrap">تخفیف</th>
                                                                <th class="whitespace-nowrap"> مشخصات</th>--}}
                                <th class="text-center whitespace-nowrap">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $ppp = json_decode(unserialize($shopOrder->product));
                                $count = $shopOrder->count;

                            @endphp
                            @for($i=1;$i<=$count;$i++)
                            <tr class="intro-x">
                                <td class="w-40 text-center">

                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Rubick Tailwind HTML Admin Template"
                                                 class="tooltip rounded-full"
                                                 src="{{str_replace('public','/storage',$ppp->$i->image)}}"
                                                 title="">
                                        </div>
                                    </div>
                                </td>
                                <td class="w-40 text-center">
                                    <a href="" class="font-medium whitespace-nowrap ">{{$ppp->$i->name}}</a>
                                </td>
                                <td class="w-40 text-center">
                                    <a href="" class="font-medium whitespace-nowrap ">{{$ppp->$i->quantity}}</a>
                                </td>
                                <td class="w-40 text-center">
                                    <a href="" class="font-medium whitespace-nowrap ">{{$ppp->$i->cost}}</a>
                                </td>
                                <td class="w-40 text-center">{{$shopOrder->name}} {{$shopOrder->lastname}}</td>
                                <td class="w-40 text-center">{{$shopOrder->number}}</td>
                                <td class="w-40 text-center">{{$shopOrder->email}}</td>
                                <td class="w-40 text-center">{{$shopOrder->address}}</td>
                                <td class="table-report__action w-40">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3"
                                           href="{{route('admin.information.show.list',$shopOrder)}}"> <i
                                                data-feather="check-square"
                                                class="w-5 h-5 ml-1"></i>
                                        </a>

                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" class=" flex items-center text-theme-6">
                                                <input type="submit" title="حذف" value=""><i
                                                    data-feather="trash-2"
                                                    class="w-5 h-5 ml-1"></i>
                                            </a>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endfor
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

            <div class="col-span-12 xxl:col-span-9 mt-5">
                <div class="grid grid-cols-5 gap-6"></div>
                <form action="{{route('admin.information.sendMail')}}" method="post" class="form-control">
                    @csrf

                    <div id="vertical-form">
                        <div class="preview">
                            <div>
{{--                                <label for="email" class="form-label">ایمیل</label>--}}
                                <input id="email" hidden name="email" type="email" class="form-control"
                                       placeholder="ایمیل را وارد کنید " value="{{$shopOrder->email}}">
                            </div>
                        </div>
                    </div>

                    <div id="vertical-form">
                        <div class="preview">
                            <div>
{{--                                <label for="name" class="form-label">نام خریدار</label>--}}
                                <input hidden id="name" name="name" type="text" class="form-control"
                                       placeholder="نام خریدار را وارد کنید " value="{{$shopOrder->name}} {{$shopOrder->lastname}}">
                            </div>
                        </div>

                    </div>

                    <div id="vertical-form">
                        <div class="preview">
                            <div>
{{--                                <label for="number" class="form-label">شماره</label>--}}
                                <input id="number" name="number" type="text" class="form-control"
                                       placeholder="شماره را وارد کنید " value="{{$shopOrder->number}}" hidden>
                            </div>
                        </div>

                    </div>

                    <div id="vertical-form">
                        <div class="preview">
                            <div>
{{--                                <label for="address" class="form-label">آدرس</label>--}}
                                <input id="address" name="address" type="text" class="form-control"
                                       placeholder="؛آدرس را وارد کنید " value="{{$shopOrder->address}}" hidden>
                            </div>
                        </div>

                    </div>

                    <div id="vertical-form">
                        <div class="preview">
                            <div>
{{--                                <label for="text" class="form-label">عنوان</label>--}}
                                <textarea id="text" name="text" type="text" class="form-control"
                                          placeholder="متن ایمیل را وارد کنید "></textarea>
                            </div>
                        </div>

                    </div>
                    <input type="submit" value="ارسال وضعیت سفارش به مشتری " class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

@endsection
