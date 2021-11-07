@extends('client.layout.master')

@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/single-product.css">
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endsection
@section('style')
    <style>
        .like {
            background-color: red;
        }
    </style>
@endsection


@section('content')
{{--Start:alert--}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
{{--End:alert--}}




<main>
    <div class="product-details">

        <div class="product-image uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>


            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                <li>
                    <img src="{{str_replace('public' , '/storage' , $product->image)}}" alt="">
                </li>
                @foreach($product->pictures as $picture)
                    <li>
                        <img src="{{str_replace('public', '/storage', $picture->path)}}" alt="">
                    </li>
                @endforeach
                {{--                <li>
                                    <img src="/Client/assets/image/product-img3.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/product-img4.jpg" alt="">
                                </li>--}}
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
               uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
               uk-slider-item="next"></a>

            <span class="material-icons zoom-arrow-btn">zoom_out_map</span>
        </div>

        <div class="product-description">
            <div class="product-description-header">
                <div class="star-section">
                    <span class="material-icons">star_border_purple500</span>
                    <span>4.2</span>
                </div>

                <div class="comment-sectoin">
                    <span class="material-icons">chat</span>
                    <span>6</span>
                </div>

                <div class="share-sectoin">
                    <span class="material-icons">share</span>
                </div>
            </div>


            <div class="product-description-title">
                <h1>{{$product->name}}</h1>
            </div>

            <div class="product-description-price">
                <div class="product-description-price-title">
                    <p>فروشنده: چمدان کالا</p>

                    <p>
                        <span class="material-icons">local_shipping</span>
                        <span>ارسال از 2 روز کاری</span>
                    </p>

                    <p>
                        <span class="material-icons">verified_user</span>
                        <span>گارانتی اصالت و سلامت فیزیکی کالا</span>
                    </p>
                </div>
                @if($product->has_discount)
                    <div class="product-description-price-mian">
                        <p>{{number_format(intval($product->cost_with_discount))}} تومان</p>
                        <div>
                            <del>{{$product->cost}}</del>
                            <p class=product-offer>%{{$product->discount->value}}</p>
                        </div>
                    </div>
                @else
                    <div class="product-description-price-mian">
                        <p>{{number_format(intval($product->cost))}} تومان</p>
                    </div>
                @endif
            </div>

            <div class="product-description-color">
                <span>رنگ :</span>
                <span class="product-color-value">مشکی</span>

                <div class="product-description-color-main">
                    <div class="product-description-color-picker">
                        <div data-color="عسلی" class="product-description-color-gold"></div>
                    </div>

                    <div class="product-description-color-picker">
                        <div data-color="مشکی" class="product-description-color-black"></div>
                    </div>

                    <div class="product-description-color-picker">
                        <div data-color="قهوه‌ای" class="product-description-color-brown"></div>
                    </div>
                </div>
            </div>



                <div class="product-description-button">

                    <a href="{{ route('add.to.cart', $product->id) }}" class="add-cart-btn" role="button">افزودن به سبد خرید</a>

                    <button type="button" class="favorit-btn" id="like-{{$product->id}}" onclick="like({{$product->id}});">
                        <span class="material-icons @if($product->is_liked) like @endif" title="افزودن به علاقه مندی ها">favorite_border </span>
                    </button>
                </div>



            <div class="product-policy">
                <div class="product-description-delivery">
                    <img src="/Client/assets/image/delivery.svg">
                    <span>تحویل سریع و آسان</span>
                </div>

                <div class="product-description-policy">
                    <img src="/Client/assets/image/return.svg">
                    <span>14 روز ضمانت بازگشت کالا</span>

                </div>
                <div class="product-description-origin">
                    <img src="/Client/assets/image/origin.svg">
                    <span>ضمانت اصل بودن کالا</span>

                </div>
            </div>
        </div>
    </div>

    <div class="product-property">
        <div class="product-property-title">
            <p>ویژگی‌ها</p>
            <span>{{$product->name}}</span>
        </div>

        @php
            $propertygroups = $product->category->propertygroups
        @endphp

        <div class="product-property-main">
            <ul>
                @foreach($propertygroups as $group)
                    <div style="margin-bottom: 15px;font-weight: bold;">{{$group->title}}</div>
                    @foreach($group->properties as $property)
                        <li>
                            <span>{{$property->title}}</span>
                            <span>{{$property->getValueForProduct($product)}}</span>
                        </li>
                    @endforeach
                @endforeach

                {{--                <li>
                                    <span>نحوه بسته شدن</span>
                                    <span> زیپ، مگنت</span>
                                </li>

                                <li>
                                    <span>آستر</span>
                                    <span>پارچه، چرم</span>
                                </li>

                                <li>
                                    <span>ابعاد</span>
                                    <span>26x21x6 سانتی‌متر</span>
                                </li>

                                <li>
                                    <span>ویژگی‌های ظاهری</span>
                                    <span>بند رودوشی</span>
                                </li>

                                <li>
                                    <span>جیب خارجی</span>
                                    <span>1</span>
                                </li>

                                <li>
                                    <span>جیب داخلی</span>
                                    <span>2</span>
                                </li>--}}
            </ul>
        </div>

    </div>

    <div class="product-user-comment">
        <div class="product-user-comment-right">
            <div class="product-user-comment-title">
                <p>دیدگاه کاربران</p>
                <span>کیف دوشی مدل KHV</span>
            </div>

            <div class="product-user-comment-right-star">
                <div>
                    <span>4.2</span>
                    <span>از 5</span>
                </div>

                <span>از مجموع 10 امتیاز کاربران</span>
            </div>

            <div class="product-user-rating">
                <div class="product-user-rating-row">
                    <div class="product-user-rating-title">
                        <span>ارزش خرید نسبت به قیمت</span>
                        <span>4</span>
                    </div>

                    <div class="product-user-rating-main">
                        <div class="price"></div>
                    </div>
                </div>

                <div class="product-user-rating-row">
                    <div class="product-user-rating-title">
                        <span>کیفیت ساخت</span>
                        <span>4.1</span>
                    </div>

                    <div class="product-user-rating-main">
                        <div class="Making"></div>
                    </div>
                </div>

                <div class="product-user-rating-row">
                    <div class="product-user-rating-title">
                        <span>طراحی</span>
                        <span>4.2</span>
                    </div>

                    <div class="product-user-rating-main">
                        <div class="designing"></div>
                    </div>
                </div>

                <div class="product-user-rating-row">
                    <div class="product-user-rating-title">
                        <span>دوام</span>
                        <span>3.8</span>
                    </div>

                    <div class="product-user-rating-main">
                        <div class="work-hours"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="product-user-comment-left">
            <ul class="product-user-comment-list">
                @foreach($product->productquestions()->latest()->get() as $comment)
                    <li class="product-user-comment-item">
                        <div class="product-user-comment-star">4</div>

                        <div class="product-user-comment-text">
                            <div>
                                <span>{{$comment->user->name}} {{$comment->user->lastname}}</span>
                                <span>{{$comment->created_at->diffForHumans()}}</span>
                                <span>خریدار</span>
                            </div>

                            <div>
                                <p>{{$comment->title}}</p>
                            </div>
                        </div>

{{--                        <div class="product-user-comment-description">
                            <p><span>چمدان کالا</span>:فروشنده</p>
                            <p><span> قهوه‌ای</span>:رنگ</p>
                        </div>--}}
                    </li>
                @endforeach

{{--                <li class="product-user-comment-item">
                    <div class="product-user-comment-star">4</div>

                    <div class="product-user-comment-text">
                        <div>
                            <span>احمدی</span>
                            <span>4ماه پیش</span>
                            <span>خریدار</span>
                        </div>

                        <div>
                            <p>
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی
                                شده بود
                            </p>
                        </div>
                    </div>

                    <div class="product-user-comment-description">
                        <p class="product-user-like">
                            <span>خرید این محصول را پیشنهاد می‌کنم</span>
                            <span class="material-icons">thumb_up</span>
                        </p>

                        <p><span>چمدان کالا</span>:فروشنده</p>
                        <p><span> قهوه‌ای</span>:رنگ</p>
                    </div>
                </li>

                <li class="product-user-comment-item">
                    <div class="product-user-comment-star">4</div>

                    <div class="product-user-comment-text">
                        <div>
                            <span>احمدی</span>
                            <span>4ماه پیش</span>
                            <span>خریدار</span>
                        </div>

                        <div>
                            <p>
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی
                                شده بود
                            </p>
                        </div>
                    </div>

                    <div class="product-user-comment-description">
                        <p><span>چمدان کالا</span>:فروشنده</p>
                        <p><span> قهوه‌ای</span>:رنگ</p>
                    </div>
                </li>

                <li class="product-user-comment-item">
                    <div class="product-user-comment-star">4</div>

                    <div class="product-user-comment-text">
                        <div>
                            <span>احمدی</span>
                            <span>4ماه پیش</span>
                            <span>خریدار</span>
                        </div>

                        <div>
                            <p>
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی
                                شده بود
                            </p>
                        </div>
                    </div>

                    <div class="product-user-comment-description">
                        <p class="product-user-like">
                            <span>خرید این محصول را پیشنهاد می‌کنم</span>
                            <span class="material-icons">thumb_up</span>
                        </p>
                        <p><span>چمدان کالا</span>:فروشنده</p>
                        <p><span> قهوه‌ای</span>:رنگ</p>
                    </div>
                </li>--}}
            </ul>
        </div>
    </div>
</main>


@endsection

@section('script2')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
    @include('client.layout.script')
@endsection
