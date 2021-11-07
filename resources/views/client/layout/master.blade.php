<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه اینترنتی لباس دیجی استایل</title>
    <link rel="icon" href="{{url("")}}/Client/assets/image/Favicon.png"/>

    <!-- google font icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css"/>


    <!-- suctom style -->
    <link rel="stylesheet" href="{{url("")}}/Client/assets/style/reset.css">
    <link rel="stylesheet" href="{{url("")}}/Client/assets/style/navigation.css">
    <link rel="stylesheet" href="{{url("")}}/Client/assets/style/main.css">
    <link rel="stylesheet" href="{{url("")}}/Client/assets/style/footer.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('profile.css')
    <link rel="stylesheet" href="{{url("")}}/Client/assets/style/responsive.css">
    @yield('script')
    @yield('style')

</head>
<body>
<header id="header">
    <div class="navigation-container">
        <div class="navigation-user">
            <div class="btn-cart">
                <span class="material-icons">local_mall</span>
                <span class="cart-quantity">{{ count((array) session('cart')) }}</span>

                <section class="shopping-cart-section">
                    <div class="shopping-cart-container">
                        <img src="/Client/assets/image/shoppin-cart.svg">
                        <span>سبد خرید شما خالی است</span>
                    </div>

                    <div class="shopping-cart-main">
                        <div class="shopping-cart-main-header">
                            <span class="shopping-cart-countItem">{{ count((array) session('cart')) }}</span>
                            <a href="{{ route('cart') }}">مشاهده سبد خرید</a>
                        </div>

                        <div class="shopping-cart-main-items">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['cost'] * $details['quantity'] @endphp
                            @endforeach

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <div class="shopping-cart-main-item">
                                        <div class="shopping-cart-main-item-image">
                                            <img src="{{str_replace('public','/storage',$details['image'])}}">
                                        </div>

                                        <div class="shopping-cart-main-item-info">
                                            <span>{{ $details['name'] }}</span>
                                            <span>سفید</span>
                                            <p>{{$details['cost']}} تومان</p>
                                            <span class="material-icons remove-btm-pro">close</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{--                            <div class="shopping-cart-main-item">
                                                            <div class="shopping-cart-main-item-image">
                                                                <img src="/Client/assets/image/offer-slider02.jpg">
                                                            </div>

                                                            <div class="shopping-cart-main-item-info">
                                                                <span>تی‌شرت زنانه</span>
                                                                <span>سفید</span>
                                                                <p>65000 تومان</p>
                                                                <span class="material-icons remove-btm-pro">close</span>
                                                            </div>

                                                        </div>--}}
                        </div>

                        <div class="shopping-cart-main-footer">


                            <div class="shopping-cart-totalPrice">
                                <p>مبلغ قابل پرداخت</p>
                                <span>{{ $total }}</span>
                                <span>تومان</span>
                            </div>
                            @auth()
                                <a href="{{route('cart')}}">ثبت سفارش</a>
                            @else
                                <a href="{{route('login')}}">ورود و ثبت سفارش</a>
                            @endauth
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
            @auth()
                <div class="btn-login-text">
                    <a href="{{route('profile')}}">پروفایل</a>
                </div>
            @endauth

        </div>
        {{--End:login && logout--}}


        <div class="navigation-main">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{url("")}}/Client/assets/image/logo.svg"></a>
            </div>

            <ul class="menu">
                @foreach($categories as $category)
                    <li class="menu-item">
                        <a href="#">{{$category->title}}</a>

                        <div class="sub-menu">
                            <ul class="sub-menu-list">
                                @foreach($category->children as $subcategory)
                                    <li class="sub-menu-item">
                                        <img
                                            src="{{url("")}}{{str_replace('public' , '/storage',$subcategory->image)}}">
                                        <span>{{$subcategory->title}}</span>

                                        <div class="sub-sub-menu">
                                            <div class="sub-sub-menu-list">
                                                <div class="sub-sub-menu-link">
                                                    <a href="#">خرید{{$subcategory->title}}</a>
                                                    <span class="material-icons">chevron_left</span>
                                                </div>

                                                <ul class="sub-sub-menu-items">
                                                    @foreach($subcategory->products as $product)
                                                        <li class="sub-sub-menu-item">
                                                            <a href="#">{{$product->name}}</a>
                                                        </li>
                                                    @endforeach
                                                    <li class="sub-sub-menu-item">
                                                        <a href="#">تی‌شرت زنانه</a>
                                                    </li>
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
                                                                                                        </li>--}}
                                                </ul>
                                            </div>
                                            {{--Start:Brand--}}
                                            {{--<div class="sub-sub-menu-brands">
                                                <div class="sub-sub-menu-brands-link">
                                                    <span>برترین برندهای لباس زنانه</span>
                                                </div>

                                                <div class="sub-sub-menu-brands-list">
                                                    <div class="sub-sub-menu-brands-items">
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="{{url("")}}/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="{{url("")}}/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="{{url("")}}/Client/assets/image/brand.jpg">
                                                        </a>
                                                        <a href="#" class="sub-sub-menu-brands-item">
                                                            <img src="{{url("")}}/Client/assets/image/brand.jpg">
                                                        </a>
                                                    </div>

                                                    <a class="sub-sub-menu-brands-list-link">
                                                        <span>مشاهده همه برندها</span>
                                                        <span class="material-icons">chevron_left</span>
                                                    </a>
                                                </div>
                                            </div>--}}
                                            {{--End:Brand--}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach

                <div class="divider"></div>

                <li class="menu-item item-special">
                    <a href="#">فروش ویژه</a>
                </li>

                {{--                <li class="menu-item">
                                    <a href="#">برندها</a>

                                    <div class="sub-menu">
                                        <ul class="sub-menu-list">
                                            <li class="sub-menu-item">
                                                <img src="{{url("")}}/Client/assets/image/shirt.png">
                                                <span>لباس</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="{{url("")}}/Client/assets/image/shoes.png">
                                                <span>کفش</span>

                                                <div>

                                                </div>
                                            </li>

                                            <li class="sub-menu-item">
                                                <img src="{{url("")}}/Client/assets/image/accessory.png">
                                                <span>اکسسوری</span>

                                                <div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#">خانه طراحان ایرانی</a>
                                </li>--}}
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
                    <input type="text" id="search-products" name="search-products"  placeholder="جستجو کنید..." onkeydown="search(this)">
                </div>

            <div id="productList"></div>
            @csrf



            <div class="search-section-body-history">
                <p id="search-show"></p>
                <p>تاریخچه جستجو:</p>

            </div>
        </div>
    </div>
</section>


@yield('content')


<footer>
    <div class="footer-category">
        <img src="{{url("")}}/Client/assets/image/logo.svg">

        <div class="footer-category-right">
            <ul class="footer-category-items">
                <li class="footer-category-item">
                    خرید
                    <ul class="footer-category-sub-items">
                        @foreach($footerCategories as $category)
                            <a href="#" class="footer-category-sub-item">
                                <li>{{$category->title}}</li>
                            </a>
                        @endforeach
                        {{--                        <a href="#" class="footer-category-sub-item">
                                                    <li>مردانه</li>
                                                </a>
                                                <a href="#" class="footer-category-sub-item">
                                                    <li>بچه‌گانه</li>
                                                </a>
                                                <a href="#" class="footer-category-sub-item">
                                                    <li>زیبایی و سلامت</li>
                                                </a>--}}
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
                <a href="#"><img src="{{url("")}}/Client/assets/image/instagram.png"></a>
                <a href="#"><img src="{{url("")}}/Client/assets/image/whatsapp.png"></a>
                <a href="#"><img src="{{url("")}}/Client/assets/image/telegram.png"></a>
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
            <img src="{{url("")}}/Client/assets/image/shaparak.png">
        </div>
    </div>

    <div class="footer-copy-right">
        <span>کلیه حقوق این سایت متعلق به شرکت ....... است</span>
    </div>
</footer>

<!-- jquery -->
<script src="{{url("")}}/Client/assets/script/jquery-3.6.0.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

<!-- custom script -->
<!-- <script src="{{url("")}}/Client/assets/script/script.js"></script> -->

@yield('script3')

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

    // proccess payment total
    function proccessPaymentTotal() {

        let sumProduct = $('.cart-product-info-finalPrice-value');
        let sumPrice = 0;

        for (let i = 0; i < sumProduct.length; i++) {
            sumPrice += parseInt(sumProduct[i].innerText);
            console.log(sumProduct[i].innerText);
        }

        $('.order-total-valu').text(sumPrice);
        $('.payment-total-valu').text(sumPrice);
    }


    $(document).ready(function () {

        proccessPaymentTotal();

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

        // add and remove product coutn
        $('.add-product').click(function () {

            let countProduct = parseInt($(this).siblings('.count-product').text());
            $(this).siblings('.count-product').text(countProduct + 1);

            // proccesss product final price

            let unitText = $(this).parents('.cart-product-info-unitPrice-count').siblings('.cart-product-info-unitPrice-text');
            let unitPrice = parseInt(unitText.children('.cart-product-info-unitPrice-value').text());

            let finalText = $(this).parents('.cart-product-info-unitPrice').siblings('.cart-product-info-finalPrice');
            let finalPrice = parseInt(finalText.children('.cart-product-info-finalPrice-value').text());

            finalText.children('.cart-product-info-finalPrice-value').text(unitPrice * (countProduct + 1));

            proccessPaymentTotal();
        });

        $('.remove-product').click(function () {

            let countProduct = parseInt($(this).siblings('.count-product').text());
            $(this).siblings('.count-product').text(countProduct - 1);

            if (parseInt($(this).siblings('.count-product').text()) < 1) {
                $(this).siblings('.count-product').text(1);
                finalText.children('.cart-product-info-finalPrice-value').text(unitPrice);

            }

            // proccesss product final price

            let unitText = $(this).parents('.cart-product-info-unitPrice-count').siblings('.cart-product-info-unitPrice-text');
            let unitPrice = parseInt(unitText.children('.cart-product-info-unitPrice-value').text());

            let finalText = $(this).parents('.cart-product-info-unitPrice').siblings('.cart-product-info-finalPrice');
            let finalPrice = parseInt(finalText.children('.cart-product-info-finalPrice-value').text());

            finalText.children('.cart-product-info-finalPrice-value').text(unitPrice * (countProduct - 1));

            proccessPaymentTotal();
        });

        // remove product
        $('.cart-product-info-close').click(function () {
            $(this).parents('.cart-product-info').remove();
            proccessPaymentTotal();
        });


        $('.cart-level-one').addClass('cart-level-active');

    });


</script>


{{--Start:Search.Script--}}
<script>
    $('body').on('keyup','#search-products',function () {
        var serachQuset = $(this).val();

        // if (serachQuset==""){
        //     $('#dynamic-row').html("");
        //     return;
        // }

        $.ajax({
            method: 'POST',
            url: '{{route("search")}}',
            dataType: 'json',
            data: {
                '_token':'{{csrf_token()}}',
                serachQuset : serachQuset
            },
            success: function (res) {
                var tableRow = '';
                $('#search-show').html("");
                if(res.length==0){
                    $('#search-show').append('<td>پیدا نشد</td>');
                    return;
                }
                $.each(res , function (index ,value) {

                    tableRow = '<div class="search-box-body"><div class="images-show"> <img width="50" src="/storage/app'+value.image+'" alt="'+value.name+'"></div> <div class="cotent-search-show"><h1>'+value.name+'</h1><a href="/products/'+value.id+'" > مشاهده </a></div></div> ';

                    $('#search-show').append(tableRow);
                } );
            }
        });

    });

</script>

{{--End:Search.Script--}}
@yield('script2')
</body>
</html>
