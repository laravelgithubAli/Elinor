<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه اینترنتی لباس دیجی استایل</title>
    <link rel="icon" href="/Client/assets/image/Favicon.png"/>

    <!-- google font icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />



    <!-- suctom style -->
    <link rel="stylesheet" href="/Client/assets/style/reset.css">
    <link rel="stylesheet" href="/Client/assets/style/navigation.css">
    <link rel="stylesheet" href="/Client/assets/style/footer.css">
    <link rel="stylesheet" href="/Client/assets/style/single-product.css">
    <link rel="stylesheet" href="/Client/assets/style/responsive.css">
</head>
<body>
<header id="header">
    <div class="navigation-container">
        <div class="navigation-user">
            <div class="btn-cart">
                <span class="material-icons">local_mall</span>
                <span class="cart-quantity">0</span>

                <section class="shopping-cart-section">
                    <div class="shopping-cart-container">
                        <img src="/Client/assets/image/shoppin-cart.svg">
                        <span>سبد خرید شما خالی است</span>
                    </div>

                    <div class="shopping-cart-main">
                        <div class="shopping-cart-main-header">
                            <span class="shopping-cart-countItem">1</span>
                            <a href="cart.html">مشاهده سبد خرید</a>
                        </div>

                        <div class="shopping-cart-main-items">
                            <div class="shopping-cart-main-item">
                                <div class="shopping-cart-main-item-image">
                                    <img src="/Client/assets/image/offer-slider.jpg">
                                </div>

                                <div class="shopping-cart-main-item-info">
                                    <span>تی‌شرت زنانه</span>
                                    <span>سفید</span>
                                    <p>65000 تومان</p>
                                    <span class="material-icons remove-btm-pro">close</span>
                                </div>

                            </div>

                            <div class="shopping-cart-main-item">
                                <div class="shopping-cart-main-item-image">
                                    <img src="/Client/assets/image/offer-slider02.jpg">
                                </div>

                                <div class="shopping-cart-main-item-info">
                                    <span>تی‌شرت زنانه</span>
                                    <span>سفید</span>
                                    <p>65000 تومان</p>
                                    <span class="material-icons remove-btm-pro">close</span>
                                </div>

                            </div>
                        </div>

                        <div class="shopping-cart-main-footer">
                            <div class="shopping-cart-totalPrice">
                                <p>مبلغ قابل پرداخت</p>
                                <span>1300000</span>
                                <span>تومان</span>
                            </div>
                            <a href="cart-address.html">ورود و ثبت سفارش</a>
                        </div>
                    </div>

                </section>
            </div>
            {{--Start:login && logout--}}
            @auth()
                <div>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" class="btn-login-text" value="خروج">
                    </form>
                </div>

            @else
                <div class="btn-login-text">
                    <a href="{{route('login')}}">وارد شوید</a>
                </div>
            @endauth
            <div class="btn-login-icon">
                <span class="material-icons">login</span>
            </div>
        </div>
        {{--End:login && logout--}}
        <div class="navigation-main">
            <div class="logo">
                <img src="/Client/assets/image/logo.svg">
            </div>

            <ul class="menu">
                @foreach($categories as $category)
                    <li class="menu-item">
                        <a href="#">{{$category->title}}</a>

                        <div class="sub-menu">
                            <ul class="sub-menu-list">
                                {{--                                @if($category->has_children)--}}
                                @foreach($category->children as $subcategory)
                                    <li class="sub-menu-item">

                                        <img src="{{str_replace('public' , '/storage',$subcategory->image)}}">
                                        <span>{{$subcategory->title}}</span>

                                        <div class="sub-sub-menu">
                                            <div class="sub-sub-menu-list">
                                                <div class="sub-sub-menu-link">
                                                    <a href="#">خرید {{$subcategory->title}}</a>
                                                    <span class="material-icons">chevron_left</span>
                                                </div>

                                                <ul class="sub-sub-menu-items">
                                                    @foreach($subcategory->products as $product)
                                                        <li class="sub-sub-menu-item">
                                                            <a href="#">{{$product->name}}</a>
                                                        </li>
                                                    @endforeach
                                                    {{--                                                    <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>

                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>
                                                                                                        <li class="sub-sub-menu-item">
                                                                                                            <a href="#">تی‌شرت زنانه</a>
                                                                                                        </li>--}}
                                                </ul>
                                            </div>

                                            <div class="sub-sub-menu-brands">
                                                <div class="sub-sub-menu-brands-link">
                                                    <span>برترین برندهای لباس زنانه</span>
                                                </div>

                                                <div class="sub-sub-menu-brands-list">
                                                    <div class="sub-sub-menu-brands-items">
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="/Client/assets/image/brand.jpg">
                                                        </a>
                                                    </div>

                                                    <a class="sub-sub-menu-brands-list-link">
                                                        <span>مشاهده همه برندها</span>
                                                        <span class="material-icons">chevron_left</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                {{--                                @endif--}}

                                {{--
                                                                <li class="sub-menu-item">
                                                                    <img src="/Client/assets/image/bag.png">
                                                                    <span>کیف</span>

                                                                    <div>

                                                                    </div>
                                                                </li>

                                                                <li class="sub-menu-item">
                                                                    <img src="/Client/assets/image/shoes.png">
                                                                    <span>کفش</span>

                                                                    <div>

                                                                    </div>
                                                                </li>

                                                                <li class="sub-menu-item">
                                                                    <img src="/Client/assets/image/accessory.png">
                                                                    <span>اکسسوری</span>

                                                                    <div>

                                                                    </div>
                                                                </li>

                                                                <li class="sub-menu-item">
                                                                    <img src="/Client/assets/image/sport.png">
                                                                    <span>ورزشی</span>

                                                                    <div>

                                                                    </div>
                                                                </li>
                                --}}

                            </ul>
                        </div>
                    </li>
                @endforeach

                {{--                <li class="menu-item">
                                    <a href="#">مردانه</a>

                                    <div class="sub-menu">
                                        <ul class="sub-menu-list">
                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/shirt.png">
                                                <span>لباس</span>

                                                <div class="sub-sub-menu">
                                                    <div class="sub-sub-menu-list">
                                                        <div class="sub-sub-menu-link">
                                                            <a href="#">خرید لباس زنانه</a>
                                                            <span class="material-icons">chevron_left</span>
                                                        </div>

                                                        <ul class="sub-sub-menu-items">
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>

                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                            <li class="sub-sub-menu-item">
                                                                <a href="#">تی‌شرت زنانه</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="sub-sub-menu-brands">
                                                        <div class="sub-sub-menu-brands-link">
                                                            <span>برترین برندهای لباس زنانه</span>
                                                        </div>

                                                        <div class="sub-sub-menu-brands-list">
                                                            <div class="sub-sub-menu-brands-items">
                                                                <a href="#" class="sub-sub-menu-brands-item">
                                                                    <img src="/Client/assets/image/brand.jpg">
                                                                </a>
                                                                <a href="#" class="sub-sub-menu-brands-item">
                                                                    <img src="/Client/assets/image/brand.jpg">
                                                                </a>
                                                                <a href="#" class="sub-sub-menu-brands-item">
                                                                    <img src="/Client/assets/image/brand.jpg">
                                                                </a>
                                                                <a href="#" class="sub-sub-menu-brands-item">
                                                                    <img src="/Client/assets/image/brand.jpg">
                                                                </a>
                                                            </div>

                                                            <a class="sub-sub-menu-brands-list-link">
                                                                <span>مشاهده همه برندها</span>
                                                                <span class="material-icons">chevron_left</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/bag.png">
                                                <span>کیف</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/shoes.png">
                                                <span>کفش</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/accessory.png">
                                                <span>اکسسوری</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/sport.png">
                                                <span>ورزشی</span>

                                                <div>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#">بچه‌گانه</a>

                                    <div class="sub-menu">
                                        <ul class="sub-menu-list">
                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/shirt.png">
                                                <span>لباس</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/shoes.png">
                                                <span>کفش</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/accessory.png">
                                                <span>اکسسوری</span>

                                                <div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#">زیبایی و سلامت</a>

                                    <div class="sub-menu">
                                        <ul class="sub-menu-list">
                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/Perfume.png">
                                                <span>عطر و ادکلن</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/Makeup.png">
                                                <span>آرایش و گریم</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/Skin.png">
                                                <span>مراقبت پوست</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/Hair.png">
                                                <span>آرایش و مراقبت مو</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="/Client/assets/image/Health.png">
                                                <span>بهداشت و مراقبت شخصی</span>

                                                <div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>--}}

                <div class="divider"></div>

                <li class="menu-item item-special">
                    <a href="#">فروش ویژه</a>
                </li>

                <li class="menu-item">
                    <a href="#">برندها</a>

                    <div class="sub-menu">
                        <ul class="sub-menu-list">
                            <li class="sub-menu-item">
                                <img src="/Client/assets/image/shirt.png">
                                <span>لباس</span>

                                <div>

                                </div>
                            </li>

                            <li class="sub-menu-item">
                                <img src="/Client/assets/image/shoes.png">
                                <span>کفش</span>

                                <div>

                                </div>
                            </li>

                            <li class="sub-menu-item">
                                <img src="/Client/assets/image/accessory.png">
                                <span>اکسسوری</span>

                                <div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="#">خانه طراحان ایرانی</a>
                </li>
            </ul>
        </div>

        <div class="navigation-search">
            <span class="material-icons">search</span>
            <input type="text" placeholder="جستجوی محصولات">
        </div>

    </div>
</header>

<section class="search-section-wrapper">
    <div class="search-section-body">
        <div class="search-section-body-item">
            <span  class="material-icons search-section-body-close">close</span>

            <div class="search-section-body-input">
                <span class="material-icons">search</span>
                <input type="text" placeholder="جستجو کنید..." onkeydown="search(this)">
            </div>

            <div class="search-section-body-history">
                <p>تاریخچه جستجو:</p>

            </div>
        </div>
    </div>
</section>

<!-- <section class="gallery-section"></section> -->

<main>
    <div class="product-details">
        <div class="product-image uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>


            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                <li>
                    <img src="/Client/assets/image/product-img1.jpg" alt="">
                </li>
                <li>
                    <img src="/Client/assets/image/product-img2.jpg" alt="">
                </li>
                <li>
                    <img src="/Client/assets/image/product-img3.jpg" alt="">
                </li>
                <li>
                    <img src="/Client/assets/image/product-img4.jpg" alt="">
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

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
                <h1>کیف دوشی مدل KHV</h1>
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

                <div class="product-description-price-mian">
                    <p>349,000 تومان</p>
                    <div>
                        <del>479000</del>
                        <p class=product-offer>%27</p>
                    </div>
                </div>
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
                <a href="cart.html" class="add-cart-btn">افزودن به سبد خرید</a>

                <a class="favorit-btn"><span class="material-icons">favorite_border </span></a>
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
            <span>کیف دوشی مدل KHV</span>
        </div>

        <div class="product-property-main">
            <h1>مشخصات</h1>
            <ul>
                <li>
                    <span>جنس</span>
                    <span>چرم طبیعی</span>
                </li>

                <li>
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
                </li>
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
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی شده بود
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
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی شده بود
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
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی شده بود
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
                                ظاهر کیف خوب بود اما فلز روی بند کیف زنگ زده بود و رویه کیف به خاطر باز کردن دچار شکستکی شده بود
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
            </ul>
        </div>
    </div>
</main>

<footer>
    <div class="footer-category">
        <img src="/Client/assets/image/logo.svg">

        <div class="footer-category-right">
            <ul class="footer-category-items">
                <li class="footer-category-item">
                    خرید
                    <ul class="footer-category-sub-items">
                        <a href="#" class="footer-category-sub-item"><li>زنانه</li></a>
                        <a href="#" class="footer-category-sub-item"><li>مردانه</li></a>
                        <a href="#" class="footer-category-sub-item"><li>بچه‌گانه</li></a>
                        <a href="#" class="footer-category-sub-item"><li>زیبایی و سلامت</li></a>
                    </ul>
                </li>

                <li class="footer-category-item">
                    خدمات مشتریان
                    <ul class="footer-category-sub-items">
                        <a href="#" class="footer-category-sub-item"><li>پاسخ به پرسش‌های متداول</li></a>
                        <a href="#" class="footer-category-sub-item"><li>رویه‌های بازگردانی کالا</li></a>
                        <a href="#" class="footer-category-sub-item"><li>شرایط استفاده</li></a>
                        <a href="#" class="footer-category-sub-item"><li>حریم خصوصی</li></a>
                    </ul>
                </li>

                <li class="footer-category-item">
                    اطلاعات دیجی‌استایل
                    <ul class="footer-category-sub-items">
                        <a href="#" class="footer-category-sub-item"><li>درباره دیجی‌استایل</li></a>
                        <a href="#" class="footer-category-sub-item"><li>تماس با دیجی‌استایل</li></a>
                        <a href="#" class="footer-category-sub-item"><li>همکاری با دیجی‌استایل</li></a>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="footer-category-left">
            <div class="footer-category-left-section1">
                <span>تلفن پشتیبانی : 123456789</span>
                <a title="بازگشت به بالا" href="#header" class="btn-go-up">
                    <span class="material-icons">expand_less</span>
                </a>
            </div>

            <div class="footer-category-left-section2">
                <a href="#"><img src="/Client/assets/image/instagram.png"></a>
                <a href="#"><img src="/Client/assets/image/whatsapp.png"></a>
                <a href="#"><img src="/Client/assets/image/telegram.png"></a>
            </div>

            <div class="footer-category-left-section3">
                <span>ثبت نام در خبرنامه</span>
                <form>
                    <input type="email">
                    <button><span class="material-icons">west</span></button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-description">
        <div class="footer-description-right">
            <span class="title">فروشگاه اینترنتی مد ولباس</span>

            <div class="footer-description-text">
                <p>
                    دیجی‌استایل، پس از تجربه‌ی موفق فروشگاه اینترنتی دیجی‌کالا به صورت تخصصی پا به عرصه مد، پوشاک و سبک زندگی گذاشت تا همان تجربه‌ی شیرین، در قالبی نو تکرار شود. در دیجی ‌استایل می‌توانید همه آنچه مرتبط با مد و پوشاک از انواع لباس زنانه، لباس مردانه و لباس بچگانه گرفته تا کیف و کفش و اکسسوری را با تخفیف ویژه در حراج ها، پیدا کنید و به سادگی یک ست کامل از جدیدترین‌ برندهای معتبر را بخرید.
                </p>

                <p class="more-secription">
                    در دیجی استایل برندهای ایرانی مشهوری نظیر چرم مشهد، درسا، کفش ملی، کفش شیما، شیفر، چرم کروکو، مارال چرم، بادی اسپینر، ال سی من، پاتن جامه، تن درست، زیبو، زی، کیکی رایکی، نیکتا و ... برندهای خارجی نظیر دیور (Dior)، آلدو (Aldo)، آندر آرمور (Under Armour)، نایکی (Nike)، اسکچرز (Skechers)، ریباک (Reebok)، سالامون (Salomon)، ری بن (Rey Ban)، ال سی وایکیکی (LC Waikiki)، پوما (Puma)، دنیلی (Daniellee) و... موجود است و می توانید جدیدترین محصولات این برندها رو به صورت آنلاین تهیه کنید و به راحتی درب منزل تحویل بگیرید.
                </p>

                <p class="more-secription">
                    همچنان دیجی استایل با ورود به دنیای زیبایی و سلامت انواع عطر و ادکلن، لوازم آرایش چشم و ابرو، آرایش صورت، لوازم شخصی برقی، بهداشت و زیبایی ناخن، ابزار سلامت و ... را در اختیار مشتریان قرار داده تا بتوانند از محصولات اورجینال و اصل خریداری کنند و در صورت مغایرت کالا تا 14 روز امکان بازگشت کالا را وجود دارد. پس همین حالا برای خرید انواع رنگ مو، سشوار، پنکیک، ماسک صورت، خط چشم، لاک ناخن، ادکلن، کانسیلر، شامپو، سایه ابرو و سایه چشم به فروشگاه اینترنتی دیجی استایل مراجعه کنید و تنها با چند کلیک محصول مورد نظر خود را سفارش دهید.
                </p>
            </div>

            <div class="footer-description-btn">
                <span class="btn-title-open">مشاهده بیشتر</span>
                <span class="btn-title-close">بستن</span>
                <span class="material-icons">west</span>
            </div>
        </div>

        <div class="footer-description-left">
            <img src="/Client/assets/image/shaparak.png">
        </div>
    </div>

    <div class="footer-copy-right">
        <span>کلیه حقوق این سایت متعلق به شرکت ....... است</span>
    </div>
</footer>

<!-- jquery -->
<script src="/Client/assets/script/jquery-3.6.0.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

<!-- custom script -->
<!-- <script src="/Client/assets/script/script.js"></script> -->

<script>
    let searchItem = [];
    let searchSectionBodyHistory = document.querySelector('.search-section-body-history');

    function search(ele) {
        if(event.key === 'Enter') {
            searchItem.push(ele.value);

            let searchHistoryItem = document.createElement('div');
            let deleteHistoryItemBtn = document.createElement('span');
            deleteHistoryItemBtn.innerHTML = 'x';
            searchHistoryItem.classList.add('search-history-item');
            searchHistoryItem.innerHTML = searchItem[searchItem.length-1];
            searchHistoryItem.appendChild(deleteHistoryItemBtn);
            searchSectionBodyHistory.appendChild(searchHistoryItem);
        }
    }

    $(document).ready(function() {
        $('.sub-menu-item').hover(function() {
            $(this).siblings().removeClass('sub-menu-item-active');
            $(this).addClass('sub-menu-item-active');
        });


        $('.navigation-search').click(function() {
            $('.search-section-wrapper').addClass('show-search-section-wrapper');
        });

        $('.search-section-wrapper').click(function() {
            $('.search-section-wrapper').removeClass('show-search-section-wrapper');
        });

        $('.search-section-body').click(function(e) {
            e.stopPropagation();
        });

        $('.search-section-body-close').click(function() {
            $('.search-section-wrapper').removeClass('show-search-section-wrapper');
        });


        $('.zoom-arrow-btn').click(function() {
            $('.gallery-section').addClass('show-gallery-section');
        });

        $('.gallery-section').click(function() {
            $('.gallery-section').removeClass('show-gallery-section');
        });

        // get product color
        $('.product-description-color-picker').click(function() {

            $('.product-color-value').text($(this).children().data('color'));

        });


        $('.footer-description-btn').click(function() {
            $('.more-secription').toggleClass('show-more-secription');
            $('.btn-title-open').toggleClass('hide-btn-title-open');
            $('.btn-title-close').toggleClass('show-btn-title-close');
        });

    });





</script>
</body>
</html>
