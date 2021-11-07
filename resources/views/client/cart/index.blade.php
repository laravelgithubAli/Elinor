@extends('client.layout.master')
@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endsection

@section('content')



    <main>
        <div class="cart-level-container">
            <a class="cart-level-one">
                <div class="cart-level-image">
                    <img src="/Client/assets/image/cart-l1.svg">
                </div>
                <div class="cart-level-text">
                    <span>سبد خرید</span>
                </div>
            </a>

            <h1>نتایج جستجو</h1>
            <p>'{{$porro->count()}}' result for  "{{request()->input('query')}}"</p>



            <a class="cart-level-two">
                <div class="cart-level-image">
                    <img src="/Client/assets/image/cart-l2.svg">
                </div>
                <div class="cart-level-text">
                    <span>اطلاعات ارسال</span>
                </div>
            </a>

            <a class="cart-level-three">
                <div class="cart-level-image">
                    <img src="/Client/assets/image/cart-l3.svg">
                </div>
                <div class="cart-level-text">
                    <span> اطلاعات پرداخت</span>
                </div>
            </a>
        </div>

        <div class="cart-info">
            <div class="cart-info-title">
                <h1>سبد خرید شما</h1>
            </div>


            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['cost'] * $details['quantity'] @endphp

                    <div class="cart-product-info">
                        <div class="cart-product-info-detail">
                            <div class="cart-product-info-detail-image">
                                <img src="{{str_replace('public','/storage', $details['image'] )}}">
                            </div>

                            <div class="cart-product-info-detail-text">
                                <h1 class="cart-product-title">متفرقه</h1>

                                <h2 class="cart-product-subTitle">{{ $details['name'] }}</h2>

                                <p class="cart-product-color">
                                    <span>رنگ : </span>
                                    <span class="cart-product-colorValue">قهوه‌ای</span>
                                </p>

                                <p class="cart-product-code">
                                    <span>کد محصول : </span>
                                    <span class="cart-product-codeValue">3518725</span>
                                </p>

                                <p class="cart-product-seller">
                                    <span> فروشنده : </span>
                                    <span class="cart-product-sellerValue">چمدان کالا</span>
                                </p>
                            </div>
                        </div>

                        <div class="cart-product-info-price">
                            <div class="cart-product-info-unitPrice">
                                <div class="cart-product-info-unitPrice-count">
                                    <span>تعداد</span>
                                    <div class="">
                                        <span class="material-icons add-product">add</span>
                                        <span class="count-product">{{$details['quantity']}}</span>
                                        <span class="material-icons remove-product">remove</span>
                                    </div>
                                </div>

                                <div class="cart-product-info-unitPrice-text">
                                    <span>قیمت واحد</span>
                                    <span class="cart-product-info-unitPrice-value">{{ $details['cost'] }}</span>
                                    <span>تومان</span>
                                </div>
                            </div>

                            <div class="cart-product-info-finalPrice">
                                <span>قیمت نهایی</span>
                                <span
                                    class="cart-product-info-finalPrice-value">{{ $details['cost'] * $details['quantity'] }}</span>
                                <span>تومان</span>
                            </div>
                        </div>

                        <div class="cart-product-info-close">
                            <span class="material-icons">cancel</span>
                        </div>
                    </div>

                @endforeach
            @endif


            <div class="cart-product-info">
                <div class="cart-product-info-detail">
                    <div class="cart-product-info-detail-image">
                        <img src="/Client/assets/image/product-img1.jpg">
                    </div>

                    <div class="cart-product-info-detail-text">
                        <h1 class="cart-product-title">متفرقه</h1>

                        <h2 class="cart-product-subTitle">کیف دوشی مدل KHV</h2>

                        <p class="cart-product-color">
                            <span>رنگ : </span>
                            <span class="cart-product-colorValue">قهوه‌ای</span>
                        </p>

                        <p class="cart-product-code">
                            <span>کد محصول : </span>
                            <span class="cart-product-codeValue">3518725</span>
                        </p>

                        <p class="cart-product-seller">
                            <span> فروشنده : </span>
                            <span class="cart-product-sellerValue">چمدان کالا</span>
                        </p>
                    </div>
                </div>

                <div class="cart-product-info-price">
                    <div class="cart-product-info-unitPrice">
                        <div class="cart-product-info-unitPrice-count">
                            <span>تعداد</span>
                            <div class="">
                                <span class="material-icons add-product">add</span>
                                <span class="count-product">1</span>
                                <span class="material-icons remove-product">remove</span>
                            </div>
                        </div>

                        <div class="cart-product-info-unitPrice-text">
                            <span>قیمت واحد</span>
                            <span class="cart-product-info-unitPrice-value">479000</span>
                            <span>تومان</span>
                        </div>
                    </div>

                    <div class="cart-product-info-finalPrice">
                        <span>قیمت نهایی</span>
                        <span class="cart-product-info-finalPrice-value">479000</span>
                        <span>تومان</span>
                    </div>
                </div>

                <div class="cart-product-info-close">
                    <span class="material-icons">cancel</span>
                </div>
            </div>
        </div>

        <div class="cart-payment">
            <div class="cart-payment-policy">
                <div class="cart-payment-return">
                    <img src="/Client/assets/image/return.svg">
                    <span>ضمانت 14 روز بازگشت کالا</span>
                </div>

                <div class="cart-payment-delivery">
                    <img src="/Client/assets/image/delivery.svg">
                    <span>تحویل سریع و آسان</span>

                </div>

                <div class="cart-payment-origin">
                    <img src="/Client/assets/image/origin.svg">
                    <span>ضمانت اصل بودن کالا</span>

                </div>
            </div>

            <div class="cart-payment-text">
                <div class="order-total">
                    <span>جمع کل سفارش</span>
                    <span class="order-total-valu">{{ $total }}</span>
                    <span>تومان</span>
                </div>

                <div class="payment-total">
                    <span>قیمت نهایی</span>
                    <span class="payment-total-valu">{{ $total }}</span>
                    <span>تومان</span>
                </div>
            </div>


        </div>

        <div class="cart-payment-btn">
            <div><a href="cart-address.html">ثبت و مرحله بعد</a></div>
        </div>

    </main>
@endsection

@section('script3')
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

            if (confirm("Are you sure want to remove?")) {
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
@endsection
