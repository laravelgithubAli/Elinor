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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css"/>


    <!-- suctom style -->
    <link rel="stylesheet" href="/Client/assets/style/reset.css">
    <link rel="stylesheet" href="/Client/assets/style/navigation.css">
    <link rel="stylesheet" href="/Client/assets/style/main.css">
    <link rel="stylesheet" href="/Client/assets/style/footer.css">
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
            <span class="material-icons search-section-body-close">close</span>

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

<main>
    <div class="home-slider" uk-slider="autoplay: true ">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@mss">

                @foreach($sliders as $slider)
                    <li>
                        <img src="{{str_replace('public','/storage',$slider->image)}}" alt="">
                    </li>
                @endforeach
                {{--                <li>
                                    <img src="/Client/assets/image/slider02.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider03.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider01.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider02.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider03.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider01.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider02.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/Client/assets/image/slider03.jpg" alt="">
                                </li>--}}
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
               uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
               uk-slider-item="next"></a>

        </div>
    </div>

    <div class="offer-slider">
        <div class="offer-slider-container">
            <div class="offer-slider-text">
                <img src="/Client/assets/image/offer.svg">
                <a href="$\#">مشاهده همه</a>
            </div>

            <div class="offer-slider-main">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                        @foreach($products as $product)
                            @if($product->has_discount)
                                <a href="{{route('client.products.show',$product)}}">
                                    <li class="offer-slider-main-item">
                                        <div class="uk-panel ">
                                            <div class="offer-slider-main-image-section">
                                                <img src="{{str_replace('public','/storage',$product->image)}}">
                                                <span>فولیکا</span>
                                                <span>{{$product->discount->value}}%</span>
                                            </div>

                                            <div class="offer-slider-main-description-section">
                                                <div class="offer-slider-main-description-detail">
                                                    <span>{{$product->name}}</span>
                                                </div>

                                                <div class="offer-slider-main-description-price">
                                                    <del>{{$product->cost}}</del>
                                                    <span>{{$product->cost_with_discount}}</span>
                                                    <span>تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            @endif
                        @endforeach

                        {{--                        <a href="single-product.html">
                                                    <li class="offer-slider-main-item">
                                                        <div class="uk-panel ">
                                                            <div class="offer-slider-main-image-section">
                                                                <img src="/Client/assets/image/offer-slider.jpg">
                                                                <span>فولیکا</span>
                                                                <span>22%</span>
                                                            </div>

                                                            <div class="offer-slider-main-description-section">
                                                                <div class="offer-slider-main-description-detail">
                                                                    <span>تی‌شرت زنانه</span>
                                                                </div>

                                                                <div class="offer-slider-main-description-price">
                                                                    <del>585,000</del>
                                                                    <span>333,000</span>
                                                                    <span>تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </a>

                                                <a href="single-product.html">
                                                    <li class="offer-slider-main-item">
                                                        <div class="uk-panel ">
                                                            <div class="offer-slider-main-image-section">
                                                                <img src="/Client/assets/image/offer-slider02.jpg">
                                                                <span>فولیکا</span>
                                                                <span>22%</span>
                                                            </div>

                                                            <div class="offer-slider-main-description-section">
                                                                <div class="offer-slider-main-description-detail">
                                                                    <span>شلوار جین مردانه</span>
                                                                </div>

                                                                <div class="offer-slider-main-description-price">
                                                                    <del>585,000</del>
                                                                    <span>333,000</span>
                                                                    <span>تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </a>

                                                <a href="single-product.html">
                                                    <li class="offer-slider-main-item">
                                                        <div class="uk-panel ">
                                                            <div class="offer-slider-main-image-section">
                                                                <img src="/Client/assets/image/offer-slider.jpg">
                                                                <span>فولیکا</span>
                                                                <span>22%</span>
                                                            </div>

                                                            <div class="offer-slider-main-description-section">
                                                                <div class="offer-slider-main-description-detail">
                                                                    <span>تی‌شرت زنانه</span>
                                                                </div>

                                                                <div class="offer-slider-main-description-price">
                                                                    <del>585,000</del>
                                                                    <span>333,000</span>
                                                                    <span>تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </a>

                                                <a href="single-product.html">
                                                    <li class="offer-slider-main-item">
                                                        <div class="uk-panel ">
                                                            <div class="offer-slider-main-image-section">
                                                                <img src="/Client/assets/image/offer-slider02.jpg">
                                                                <span>فولیکا</span>
                                                                <span>22%</span>
                                                            </div>

                                                            <div class="offer-slider-main-description-section">
                                                                <div class="offer-slider-main-description-detail">
                                                                    <span>شلوار جین مردانه</span>
                                                                </div>

                                                                <div class="offer-slider-main-description-price">
                                                                    <del>585,000</del>
                                                                    <span>333,000</span>
                                                                    <span>تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </a>

                                                <a href="single-product.html">
                                                    <li class="offer-slider-main-item">
                                                        <div class="uk-panel ">
                                                            <div class="offer-slider-main-image-section">
                                                                <img src="/Client/assets/image/offer-slider.jpg">
                                                                <span>فولیکا</span>
                                                                <span>22%</span>
                                                            </div>

                                                            <div class="offer-slider-main-description-section">
                                                                <div class="offer-slider-main-description-detail">
                                                                    <span>تی‌شرت زنانه</span>
                                                                </div>

                                                                <div class="offer-slider-main-description-price">
                                                                    <del>585,000</del>
                                                                    <span>333,000</span>
                                                                    <span>تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </a>--}}
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slider-item="next"></a>

                </div>
            </div>
        </div>
    </div>

    <div class="tab-menu">
        <div class="tab-menu-container">
            <div class="tab-menu-item">
                <span class="tab-menu-man">مردانه</span>
                <span class="tab-menu-woman">زنانه</span>
                <span class="tab-menu-child">بچه‌گانه</span>
                <span class="tab-menu-beauty">زیبایی و سلامت</span>
            </div>

            <div class="tab-menu-detail">
                <div class="tab-menu-detail-man show-tab-menu-detail">
                    <div class="section-one">
                        <img src="/Client/assets/image/section-one-man.jpg">
                        <span>لباس مردانه</span>
                    </div>

                    <div class="section-two">
                        <div class="section-two-1">
                            <img src="/Client/assets/image/section-one-man-shose.jpg">
                            <span>کفش مردانه</span>
                        </div>

                        <div class="section-two-2">
                            <img src="/Client/assets/image/section-one-man-accesory.jpg">
                            <span>اکسسوری مردانه</span>
                        </div>

                        <div class="section-two-3">
                            <img src="/Client/assets/image/section-one-man-sport.jpg">
                            <span>ورزشی مردانه</span>
                        </div>
                    </div>
                </div>

                <div class="tab-menu-detail-woman">
                    <div class="section-one">
                        <img src="/Client/assets/image/section-one-woman.jpg">
                        <span>لباس زنانه</span>
                    </div>

                    <div class="section-two">
                        <div class="section-two-1">
                            <img src="/Client/assets/image/section-one-woman-shose.jpg">
                            <span>کفش زنانه</span>
                        </div>

                        <div class="section-two-2">
                            <img src="/Client/assets/image/section-one-woman-accesory.jpg">
                            <span>اکسسوری زنانه</span>
                        </div>

                        <div class="section-two-3">
                            <img src="/Client/assets/image/section-one-woman-sport.jpg">
                            <span>ورزشی زنانه</span>
                        </div>
                    </div>
                </div>

                <div class="tab-menu-detail-child">
                    <div class="section-one">
                        <img src="/Client/assets/image/section-one-child.jpg">
                        <span>نوزاد</span>
                    </div>

                    <div class="section-two">
                        <a class="section-two-1">
                            <img src="/Client/assets/image/section-one-girl.jpg">
                            <span>دخترانه</span>
                        </a>

                        <a class="section-two-2">
                            <img src="/Client/assets/image/section-one-boy.jpg">
                            <span>پسرانه</span>
                        </a>
                    </div>
                </div>

                <div class="tab-menu-detail-beauty">
                    <div class="section-one">
                        <img src="/Client/assets/image/section-one-beauty.jpg">
                        <span>لوازم آرایشی</span>
                    </div>

                    <div class="section-two">
                        <a class="section-two-1">
                            <img src="/Client/assets/image/section-one-beauty1.jpg">
                            <span>لوازم بهداشتی</span>
                        </a>

                        <a class="section-two-2">
                            <img src="/Client/assets/image/section-one-beauty2.jpg">
                            <span>لوازم شخصی برقی</span>
                        </a>

                        <a class="section-two-3">
                            <img src="/Client/assets/image/section-one-beauty3.jpg">
                            <span>عطر</span>
                        </a>

                        <a class="section-two-3">
                            <img src="/Client/assets/image/section-one-beauty4.jpg">
                            <span>ابزار سلامت</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-see-slider">
        <div class="more-see-slider-container">
            <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        پربــازدیـد تریـن‌های اخــیــــــــر
                    </span>
                <a href="$\#">مشاهده همه</a>
            </div>

            <div class="more-see-slider-main">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slider-item="next"></a>

                </div>
            </div>
        </div>
    </div>

    <div class="brand-baner-section">
        <a href="#" class="brand-baner-item1">
            <img src="/Client/assets/image/brand-banner-item1.jpg">
        </a>
        <a href="#" class="brand-baner-item2">
            <img src="/Client/assets/image/brand-banner-item2.jpg">
        </a>
    </div>

    <div class="more-sel-slider">
        <div class="more-see-slider-container">
            <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        پرفـــروش تریـن‌های اخــیــــــــر
                    </span>
                <a href="$\#">مشاهده همه</a>
            </div>

            <div class="more-see-slider-main">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slider-item="next"></a>

                </div>
            </div>
        </div>
    </div>

    <div class="beauty-baner-section">
        <div class="beauty-baner-title">
            زیبـــایــی‌ و‌ ســـلـامــت
        </div>

        <div class="beauty-baner-image">
            <a href="#" class="beauty-baner-item1">
                <img src="/Client/assets/image/beauty-banner-item1.jpg">
            </a>

            <a href="#" class="beauty-baner-item2">
                <img src="/Client/assets/image/beauty-banner-item2.jpg">
            </a>

            <a href="#" class="beauty-baner-item3">
                <img src="/Client/assets/image/beauty-banner-item3.jpg">
            </a>

            <a href="#" class="beauty-baner-item4">
                <img src="/Client/assets/image/beauty-banner-item4.jpg">
            </a>
        </div>
    </div>

    <div class="new-product-slider">
        <div class="more-see-slider-container">
            <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        جــــــدیــد تریـن‌های اخــیــــــــر
                    </span>
                <a href="$\#">مشاهده همه</a>
            </div>

            <div class="more-see-slider-main">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slider-item="next"></a>

                </div>
            </div>
        </div>
    </div>

    <div class="banner-home-section-grid-container">
        <div class="banner-home-section-one">
            <div class="banner-home-section-one1">
                <img src="/Client/assets/image/banner-home-section-one1.jpg">
            </div>

            <div class="banner-home-section-one2">
                <img src="/Client/assets/image/banner-home-section-one2.jpg">
            </div>
        </div>

        <div class="banner-home-section-two">
            <div class="banner-home-section-two1">
                <img src="/Client/assets/image/banner-home-section-two1.jpg">
            </div>

            <div class="banner-home-section-two2">
                <div class="banner-home-section-two2-1">
                    <img src="/Client/assets/image/banner-home-section-two2-1.jpg">
                </div>

                <div class="banner-home-section-two2-2">
                    <img src="/Client/assets/image/banner-home-section-two2-2.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="new-product-slider">
        <div class="more-see-slider-container">
            <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        بـازدیــدها ی اخیـــــر شــــــــمـــا
                    </span>
                <a href="$\#">مشاهده همه</a>
            </div>

            <div class="more-see-slider-main">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="more-see-slider-main-item">
                            <a href="#">
                                <div class="uk-panel ">
                                    <div class="more-see-slider-main-image-section">
                                        <img src="/Client/assets/image/offer-slider02.jpg">
                                        <span>فولیکا</span>
                                        <span>22%</span>
                                    </div>

                                    <div class="more-see-slider-main-description-section">
                                        <div class="offer-slider-main-description-detail">
                                            <span>شلوار جین مردانه</span>
                                        </div>

                                        <div class="more-see-slider-main-description-price">
                                            <del>585,000</del>
                                            <span>333,000</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slider-item="next"></a>

                </div>
            </div>
        </div>
    </div>

    <div class="bottom-category-wrapper">
        <ul class="bottom-category-items">
            <a href="#">
                <li class="bottom-category-item">
                    مردانه
                    <ul class="bottom-category-sub-items">
                        <a href="#">
                            <li class="bottom-category-sub-item">لباس مردانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">کفش مردانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">اکسسوری مردانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">ورزشی مردانه</li>
                        </a>
                    </ul>
                </li>
            </a>

            <a href="#">
                <li class="bottom-category-item">
                    زنانه
                    <ul class="bottom-category-sub-items">
                        <a href="#">
                            <li class="bottom-category-sub-item">لباس زنانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">کفش زنانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">اکسسوری زنانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">ورزشی زنانه</li>
                        </a>
                    </ul>
                </li>
            </a>

            <a href="#">
                <li class="bottom-category-item">
                    بچه‌گانه
                    <ul class="bottom-category-sub-items">
                        <a href="#">
                            <li class="bottom-category-sub-item">نوزاد</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">دخترانه</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">پسرانه</li>
                        </a>
                    </ul>
                </li>
            </a>

            <a href="#">
                <li class="bottom-category-item">
                    زیبایی و سلامت
                    <ul class="bottom-category-sub-items">
                        <a href="#">
                            <li class="bottom-category-sub-item">لوازم آرایشی</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">لوازم بهداشتی</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item">لوازم شخصی برقی</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item"> عطر</li>
                        </a>
                        <a href="#">
                            <li class="bottom-category-sub-item"> ابزار سلامت</li>
                        </a>
                    </ul>
                </li>
            </a>
        </ul>
    </div>

    <div class="rules-section">
        <div class="rules-section-item">
            <a href="#">
                <img src="/Client/assets/image/delivery.svg">
                <span>تحویل سریع و آسان</span>
            </a>

            <a href="#">
                <img src="/Client/assets/image/return.svg">
                <span>14 روز ضمانت بازگشت کالا</span>
            </a>

            <a href="#">
                <img src="/Client/assets/image/origin.svg">
                <span>ضمانت اصل بودن کالا</span>
            </a>
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
                        <a href="#" class="footer-category-sub-item">
                            <li>زنانه</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>مردانه</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>بچه‌گانه</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>زیبایی و سلامت</li>
                        </a>
                    </ul>
                </li>

                <li class="footer-category-item">
                    خدمات مشتریان
                    <ul class="footer-category-sub-items">
                        <a href="#" class="footer-category-sub-item">
                            <li>پاسخ به پرسش‌های متداول</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>رویه‌های بازگردانی کالا</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>شرایط استفاده</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>حریم خصوصی</li>
                        </a>
                    </ul>
                </li>

                <li class="footer-category-item">
                    اطلاعات دیجی‌استایل
                    <ul class="footer-category-sub-items">
                        <a href="#" class="footer-category-sub-item">
                            <li>درباره دیجی‌استایل</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>تماس با دیجی‌استایل</li>
                        </a>
                        <a href="#" class="footer-category-sub-item">
                            <li>همکاری با دیجی‌استایل</li>
                        </a>
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
                    دیجی‌استایل، پس از تجربه‌ی موفق فروشگاه اینترنتی دیجی‌کالا به صورت تخصصی پا به عرصه مد، پوشاک و سبک
                    زندگی گذاشت تا همان تجربه‌ی شیرین، در قالبی نو تکرار شود. در دیجی ‌استایل می‌توانید همه آنچه مرتبط
                    با مد و پوشاک از انواع لباس زنانه، لباس مردانه و لباس بچگانه گرفته تا کیف و کفش و اکسسوری را با
                    تخفیف ویژه در حراج ها، پیدا کنید و به سادگی یک ست کامل از جدیدترین‌ برندهای معتبر را بخرید.
                </p>

                <p class="more-secription">
                    در دیجی استایل برندهای ایرانی مشهوری نظیر چرم مشهد، درسا، کفش ملی، کفش شیما، شیفر، چرم کروکو، مارال
                    چرم، بادی اسپینر، ال سی من، پاتن جامه، تن درست، زیبو، زی، کیکی رایکی، نیکتا و ... برندهای خارجی نظیر
                    دیور (Dior)، آلدو (Aldo)، آندر آرمور (Under Armour)، نایکی (Nike)، اسکچرز (Skechers)، ریباک
                    (Reebok)، سالامون (Salomon)، ری بن (Rey Ban)، ال سی وایکیکی (LC Waikiki)، پوما (Puma)، دنیلی
                    (Daniellee) و... موجود است و می توانید جدیدترین محصولات این برندها رو به صورت آنلاین تهیه کنید و به
                    راحتی درب منزل تحویل بگیرید.
                </p>

                <p class="more-secription">
                    همچنان دیجی استایل با ورود به دنیای زیبایی و سلامت انواع عطر و ادکلن، لوازم آرایش چشم و ابرو، آرایش
                    صورت، لوازم شخصی برقی، بهداشت و زیبایی ناخن، ابزار سلامت و ... را در اختیار مشتریان قرار داده تا
                    بتوانند از محصولات اورجینال و اصل خریداری کنند و در صورت مغایرت کالا تا 14 روز امکان بازگشت کالا را
                    وجود دارد. پس همین حالا برای خرید انواع رنگ مو، سشوار، پنکیک، ماسک صورت، خط چشم، لاک ناخن، ادکلن،
                    کانسیلر، شامپو، سایه ابرو و سایه چشم به فروشگاه اینترنتی دیجی استایل مراجعه کنید و تنها با چند کلیک
                    محصول مورد نظر خود را سفارش دهید.
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
<!-- <script src="assets/script/script.js"></script> -->

<script>
    let searchItem = [];
    let searchSectionBodyHistory = document.querySelector('.search-section-body-history');

    function search(ele) {
        if (event.key === 'Enter') {
            searchItem.push(ele.value);

            let searchHistoryItem = document.createElement('div');
            let deleteHistoryItemBtn = document.createElement('span');
            deleteHistoryItemBtn.innerHTML = 'x';
            searchHistoryItem.classList.add('search-history-item');
            searchHistoryItem.innerHTML = searchItem[searchItem.length - 1];
            searchHistoryItem.appendChild(deleteHistoryItemBtn);
            searchSectionBodyHistory.appendChild(searchHistoryItem);
        }
    }

    $(document).ready(function () {
        $('.sub-menu-item').hover(function () {
            $(this).siblings().removeClass('sub-menu-item-active');
            $(this).addClass('sub-menu-item-active');
        });

        $('.tab-menu-man').click(function () {
            $('.tab-menu-detail').children().removeClass('show-tab-menu-detail');
            $('.tab-menu-detail').children('.tab-menu-detail-man').addClass('show-tab-menu-detail');
        });

        $('.tab-menu-woman').click(function () {
            $('.tab-menu-detail').children().removeClass('show-tab-menu-detail');
            $('.tab-menu-detail').children('.tab-menu-detail-woman').addClass('show-tab-menu-detail');
        });

        $('.tab-menu-child').click(function () {
            $('.tab-menu-detail').children().removeClass('show-tab-menu-detail');
            $('.tab-menu-detail').children('.tab-menu-detail-child').addClass('show-tab-menu-detail');
        });

        $('.tab-menu-beauty').click(function () {
            $('.tab-menu-detail').children().removeClass('show-tab-menu-detail');
            $('.tab-menu-detail').children('.tab-menu-detail-beauty').addClass('show-tab-menu-detail');
        });


        $('.footer-description-btn').click(function () {
            $('.more-secription').toggleClass('show-more-secription');
            $('.btn-title-open').toggleClass('hide-btn-title-open');
            $('.btn-title-close').toggleClass('show-btn-title-close');
        });

        $('.navigation-search').click(function () {
            $('.search-section-wrapper').addClass('show-search-section-wrapper');
        });

        $('.search-section-wrapper').click(function () {
            $('.search-section-wrapper').removeClass('show-search-section-wrapper');
        });

        $('.search-section-body').click(function (e) {
            e.stopPropagation();
        });

        $('.search-section-body-close').click(function () {
            $('.search-section-wrapper').removeClass('show-search-section-wrapper');
        });

    });


</script>
</body>
</html>
