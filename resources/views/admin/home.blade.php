@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">صفحه اصلی</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">داشبرد</a> </div>
@endsection

@section('content')

        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                گزارش کلی
                            </h2>
                            <a href="" class="mr-auto flex items-center text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 ml-3"></i>به روزرسانی داده</a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% بالاتر از ماه گذشته"> 33% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">4.710</div>
                                        <div class="text-base text-gray-600 mt-1">مورد فروش </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% کمتر از ماه گذشته"> 2% <i data-feather="chevron-down" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">3.721</div>
                                        <div class="text-base text-gray-600 mt-1">سفارش جدید</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="مشاهده لیست محصولات">
                                                    <a href="{{route('products.index')}}">لیست</a></div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{$product->count()}}</div>
                                        <div class="text-base text-gray-600 mt-1">محصولات</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="مشاهده لیست پست ها">
                                                    <a href="{{route('posts.index')}}">لیست</a></div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{$post->count()}}</div>
                                        <div class="text-base text-gray-600 mt-1">پست ها</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Weekly Top Products -->
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                محصولات اخیر
                            </h2>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">تصویر</th>
                                    <th class="whitespace-nowrap">نام محصول</th>
                                    <th class="whitespace-nowrap">امتیاز</th>
                                    <th class="whitespace-nowrap">دسته بندی</th>
                                    <th class="whitespace-nowrap">قیمت</th>
                                    <th class="whitespace-nowrap">موجودی</th>
                                    <th class="whitespace-nowrap">گالری</th>
                                    <th class="whitespace-nowrap">تخفیف</th>
                                    <th class="whitespace-nowrap"> مشخصات</th>
                                    <th class="text-center whitespace-nowrap">فعالیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="intro-x">
                                        <td class="w-40 text-center">
                                            <div class="flex">
                                                <?php
                                                $image = url("assets/images/placeholder.jpg");
                                                if ($product->image != null and $product->image != "") {
                                                    $image = url(str_replace('public', '/storage', $product->image));
//                                                    $image=url(str_replace('public','/storage/app/public',$product->image));
                                                }
                                                ?>
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                         class="tooltip rounded-full"
                                                         src="{{$image}}"
                                                         title="{{$product->created_at}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-40 text-center">
                                            <a href="" class="font-medium whitespace-nowrap ">{{$product->name}}</a>
                                        </td>
                                        <td class="w-40 text-center">
                                            @if(!auth()->user()->getHasStarAttribute($product))
                                                <form action="{{route('stars.products.store',$product)}}" method="post">
                                                    @csrf

                                                    <input type="radio"

                                                           name="value" value="1">
                                                    <input type="radio"

                                                           name="value" value="2">
                                                    <input type="radio"

                                                           name="value" value="3">
                                                    <input type="radio"

                                                           name="value" value="4">
                                                    <input type="radio"

                                                           name="value" value="5">

                                                    <input type="submit" value="ثبت">


                                                </form>
                                            @else
                                                {{$product->HasStar()}}
                                                <p>نظر ثبت شد</p>
                                            @endif

                                        </td>
                                        <td class="w-40 text-center">{{$product->category->title}}</td>
                                        <td class="w-40 text-center">{{$product->cost}}</td>
                                        <td class="w-40 text-center">{{$product->inventory}}</td>
                                        <td class="w-40 text-center">
                                            <a href="{{route('products.pictures.index',$product)}}"
                                               class="btn btn-sm btn-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                     fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                    <path
                                                        d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="w-40 text-center">
                                            @if(!$product->has_discount)
                                                <a href="{{route('products.discounts.create',$product)}}"
                                                   class="btn btn-sm btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                         fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
                                                        <path
                                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                    </svg>
                                                </a>
                                            @else
                                                <p class="text-center">{{$product->discount->value}}</p>
                                                <form
                                                    action="{{route('products.discounts.destroy', ['product' => $product, 'discount' => $product->discount])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                             fill="currentColor" class="bi bi-trash"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd"
                                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                        <td class="w-40 text-center">
                                            <a href="{{route('products.properties.index',$product)}}"
                                               class="btn btn-sm btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                     fill="currentColor" class="bi bi-card-checklist"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                    <path
                                                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                                </svg>
                                            </a>
                                        </td>

                                        <td class="table-report__action w-40">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3"
                                                   href="{{route('products.edit',$product)}}"> <i
                                                        data-feather="check-square"
                                                        class="w-4 h-4 ml-1"></i>
                                                    ویرایش</a>

                                                <form action="{{route('products.destroy',$product)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" class=" flex items-center text-theme-6">
                                                        <input type="submit" value="حذف"><i
                                                            data-feather="trash-2"
                                                            class="w-4 h-4 ml-1"></i>
                                                    </a>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END: Weekly Top Products -->
                </div>
            </div>
            <div class="col-span-12 xxl:col-span-3">
                <div class="xxl:border-l border-theme-5 -mb-10 pb-10">
                    <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        <!-- BEGIN: Important Notes -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-auto">
                                    پست های اخیر
                                </h2>
                                <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="mt-5 intro-x">
                                <div class="box zoom-in">
                                    <div class="tiny-slider" id="important-notes">
                                        @foreach($posts as $post)
                                            <div class="p-5">
                                                <div class="text-base font-medium truncate">{{$post->title}}</div>
                                                <div class="text-gray-500 mt-1"></div>
                                                <div class="text-gray-600 text-right mt-1">{{$post->body}}</div>
                                                <div class="font-medium flex mt-5">
                                                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ">زمان مطالعه:{{$post->studytime}}</button>
                                                    <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">{{$post->creator}}</button>
                                                </div>
                                            </div>
                                        @endforeach
{{--                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">لورم ایپسوم متن ساختگی با تولید سادگی</div>
                                            <div class="text-gray-500 mt-1"> 20 ساعت قبل </div>
                                            <div class="text-gray-600 text-right mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلیتکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">مشاهده نکته</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">لورم ایپسوم متن ساختگی با تولید سادگی</div>
                                            <div class="text-gray-500 mt-1"> 20 ساعت قبل </div>
                                            <div class="text-gray-600 text-right mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلیتکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto ml-auto">مشاهده نکته</button>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Important Notes -->
                    </div>
                </div>
            </div>
        </div>

@endsection
