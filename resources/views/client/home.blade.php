@extends('client.layout.master')


@section('content')


    <main>
        <div class="home-slider" uk-slider="autoplay: true ">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@mss">
                    @foreach($sliders as $slider)
                        <li>
                            <img src="{{url("")}}{{str_replace('public','/storage',$slider->image)}}" alt="">
                        </li>
                    @endforeach
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider02.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider03.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider01.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider02.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider03.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider01.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider02.jpg" alt="">
                    </li>
                    <li>
                        <img src="{{url("")}}/Client/assets/image/slider03.jpg" alt="">
                    </li>
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
                    <img src="{{url("")}}/Client/assets/image/offer.svg">
                    <a href="{{route('see.all')}}">???????????? ??????</a>
                </div>

                <div class="offer-slider-main">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                            @foreach($products as $product)
                                @if($product->specialOffer != 0)
                                    <a href="{{route('client.products.show',$product)}}">
                                        <li class="offer-slider-main-item">
                                            <div class="uk-panel ">
                                                <div class="offer-slider-main-image-section">
                                                    <img src="{{str_replace('public','/storage',$product->image)}}">
                                                    {{--                                                    <span>????????????</span>--}}
                                                    @if($product->has_discount)

                                                        <span>{{$product->discount->value}}%</span>
                                                    @else

                                                    @endif
                                                </div>

                                                <div class="offer-slider-main-description-section">
                                                    <div class="offer-slider-main-description-detail">
                                                        <span>{{$product->name}}</span>
                                                    </div>

                                                    <div class="offer-slider-main-description-price">
                                                        @if($product->has_discount)
                                                            <del>{{number_format(intval($product->cost))}}</del>
                                                            <span>{{number_format(intval($product->cost_with_discount))}}</span>
                                                        @else
                                                            <span>{{number_format(intval($product->cost))}}</span>
                                                        @endif
                                                        <span>??????????</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                @endif
                            @endforeach
                            <a href="single-product.html">
                                <li class="offer-slider-main-item">
                                    <div class="uk-panel ">
                                        <div class="offer-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="offer-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>????????????? ??????????</span>
                                            </div>

                                            <div class="offer-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </a>

                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous
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
                    <span class="tab-menu-man">????????????</span>
                    <span class="tab-menu-woman">??????????</span>
                    <span class="tab-menu-child">?????????????????</span>
                    <span class="tab-menu-beauty">???????????? ?? ??????????</span>
                </div>

                <div class="tab-menu-detail">
                    <div class="tab-menu-detail-man show-tab-menu-detail">

                        <div class="section-one">
                            <img src="{{url("")}}/Client/assets/image/section-one-man.jpg">
                            {{--                        <span>{{$oneMan->title}}</span>--}}
                        </div>

                        <div class="section-two">
                            @foreach($threeMan as $threeman)
                                <a href="{{route('client.catPro.show',$threeman)}}" class="section-two-1">
                                    <img src="{{url("")}}{{str_replace('public','/storage',$threeman->image)}}">
                                    <span>{{$threeman->title}}</span>
                                </a>
                            @endforeach
                            {{--                        <div class="section-two-2">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-man-accesory.jpg">
                                                        <span>?????????????? ????????????</span>
                                                    </div>

                                                    <div class="section-two-3">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-man-sport.jpg">
                                                        <span>?????????? ????????????</span>
                                                    </div>--}}
                        </div>
                    </div>

                    <div class="tab-menu-detail-woman">
                        <div class="section-one">
                            <img src="{{url("")}}/Client/assets/image/section-one-woman.jpg">
                            {{--                        <span>???????? ??????????</span>--}}
                        </div>

                        <div class="section-two">
                            @foreach($threeWoman as $threewoman)
                                <a href="{{route('client.catPro.show',$threewoman)}}" class="section-two-1">
                                    <img src="{{url("")}}{{str_replace('public','/storage',$threewoman->image)}}">
                                    <span>{{$threewoman->title}}</span>
                                </a>
                            @endforeach

                            {{--                        <div class="section-two-2">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-woman-accesory.jpg">
                                                        <span>?????????????? ??????????</span>
                                                    </div>

                                                    <div class="section-two-3">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-woman-sport.jpg">
                                                        <span>?????????? ??????????</span>
                                                    </div>--}}
                        </div>
                    </div>

                    <div class="tab-menu-detail-child">
                        <div class="section-one">
                            <img src="{{url("")}}/Client/assets/image/section-one-child.jpg">
                            {{--                        <span>??????????</span>--}}
                        </div>

                        <div class="section-two">
                            @foreach($Children as $children)
                                <a href="{{route('client.catPro.show',$children)}}" class="section-two-1">
                                    <img src="{{url("")}}{{str_replace('public','/storage',$children->image)}}">
                                    <span>{{$children->title}}</span>
                                </a>
                            @endforeach

                            {{--<a class="section-two-2">
                                <img src="{{url("")}}/Client/assets/image/section-one-boy.jpg">
                                <span>????????????</span>
                            </a>--}}
                        </div>
                    </div>

                    <div class="tab-menu-detail-beauty">
                        <div class="section-one">
                            <img src="{{url("")}}/Client/assets/image/section-one-beauty.jpg">
                            {{--                        <span>?????????? ????????????</span>--}}
                        </div>

                        <div class="section-two">
                            @foreach($healthBeauty as $HealthBeauty)
                                <a href="{{route('client.catPro.show',$HealthBeauty)}}" class="section-two-1">
                                    <img src="{{url("")}}{{str_replace('public','/storage',$HealthBeauty->image)}}">
                                    <span>{{$HealthBeauty->title}}</span>
                                </a>
                            @endforeach

                            {{--                        <a class="section-two-2">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-beauty2.jpg">
                                                        <span>?????????? ???????? ????????</span>
                                                    </a>

                                                    <a class="section-two-3">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-beauty3.jpg">
                                                        <span>??????</span>
                                                    </a>

                                                    <a class="section-two-3">
                                                        <img src="{{url("")}}/Client/assets/image/section-one-beauty4.jpg">
                                                        <span>?????????? ??????????</span>
                                                    </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="more-see-slider">
            <div class="more-see-slider-container">
                <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        ?????????????????????? ??????????????????? ????????????????????????????
                    </span>
                    <a href="{{route('see.all.most')}}">???????????? ??????</a>
                </div>

                <div class="more-see-slider-main">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                            @foreach($productRandoms as $product)
                                <li class="more-see-slider-main-item">
                                    <a href="{{route('client.products.show', $product)}}">
                                        <div class="uk-panel ">
                                            <div class="more-see-slider-main-image-section">
                                                <img
                                                    src="{{url("")}}{{str_replace('public','/storage',$product->image)}}">
{{--                                                <span>????????????</span>--}}
                                                @if($product->has_discount)
                                                    <span>{{$product->discount->value}}%</span>
                                                @endif
                                            </div>

                                            <div class="more-see-slider-main-description-section">
                                                <div class="offer-slider-main-description-detail">
                                                    <span>{{$product->name}}</span>
                                                </div>
                                                @if($product->has_discount)
                                                    <div class="more-see-slider-main-description-price">
                                                        <del>{{$product->cost}}</del>
                                                        <span>{{$product->cost_with_discount}}</span>
                                                        <span>??????????</span>
                                                    </div>
                                                @else
                                                    <div class="more-see-slider-main-description-price">
                                                        <span>{{$product->cost}}</span>
                                                        <span>??????????</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous
                           uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>

        <div class="brand-baner-section">
            <a href="#" class="brand-baner-item1">
                <img src="{{url("")}}/Client/assets/image/brand-banner-item1.jpg">
            </a>
            <a href="#" class="brand-baner-item2">
                <img src="{{url("")}}/Client/assets/image/brand-banner-item2.jpg">
            </a>
        </div>

{{--        <div class="more-sel-slider">
            <div class="more-see-slider-container">
                <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        ?????????????????? ??????????????????? ????????????????????????????
                    </span>
                    <a href="$\#">???????????? ??????</a>
                </div>

                <div class="more-see-slider-main">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous
                           uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>--}}

        <div class="beauty-baner-section">
            <div class="beauty-baner-title">
                ????????????????????????? ????? ??????????????????????
            </div>

            <div class="beauty-baner-image">
                @foreach($CategoryBeauty as $beauty)
                    <a href="#" class="beauty-baner-item1">
                        <img src="{{url("")}}{{str_replace('public','/storage',$beauty->image)}}">
                        <p>{{$beauty->title}}</p>
                    </a>
                @endforeach

                {{--            <a href="#" class="beauty-baner-item2">
                                <img src="{{url("")}}/Client/assets/image/beauty-banner-item2.jpg">
                            </a>

                            <a href="#" class="beauty-baner-item3">
                                <img src="{{url("")}}/Client/assets/image/beauty-banner-item3.jpg">
                            </a>

                            <a href="#" class="beauty-baner-item4">
                                <img src="{{url("")}}/Client/assets/image/beauty-banner-item4.jpg">
                            </a>--}}
            </div>
        </div>

        <div class="new-product-slider">
            <div class="more-see-slider-container">
                <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        ???????????????????????? ??????????????????? ????????????????????????????
                    </span>
                    <a href="{{route('see.all.newest')}}">???????????? ??????</a>
                </div>

                <div class="more-see-slider-main">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                            @foreach($latestProducts as $latestProduct)
                                <li class="more-see-slider-main-item">
                                    <a href="{{route('client.products.show', $latestProduct)}}">
                                        <div class="uk-panel ">
                                            <div class="more-see-slider-main-image-section">
                                                <img
                                                    src="{{url("")}}{{str_replace('public','/storage',$latestProduct->image)}}">
                                                <span>????????????</span>
                                                @if($latestProduct->has_discount)
                                                    <span>{{$latestProduct->discount->value}}%</span>
                                                @endif
                                            </div>

                                            <div class="more-see-slider-main-description-section">
                                                <div class="offer-slider-main-description-detail">
                                                    <span>{{$latestProduct->name}}</span>
                                                </div>
                                                @if($latestProduct->has_discount)
                                                    <div class="more-see-slider-main-description-price">
                                                        <del>{{number_format(intval($latestProduct->cost))}}</del>
                                                        <span>{{number_format(intval($latestProduct->cost_with_discount))}}</span>
                                                        <span>??????????</span>
                                                    </div>
                                                @else
                                                    <div class="more-see-slider-main-description-price">
                                                        <span>{{number_format(intval($latestProduct->cost))}}</span>
                                                        <span>??????????</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous
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
                    <img src="{{url("")}}/Client/assets/image/banner-home-section-one1.jpg">
                </div>

                <div class="banner-home-section-one2">
                    <img src="{{url("")}}/Client/assets/image/banner-home-section-one2.jpg">
                </div>
            </div>

            <div class="banner-home-section-two">
                <div class="banner-home-section-two1">
                    <img src="{{url("")}}/Client/assets/image/banner-home-section-two1.jpg">
                </div>

                <div class="banner-home-section-two2">
                    <div class="banner-home-section-two2-1">
                        <img src="{{url("")}}/Client/assets/image/banner-home-section-two2-1.jpg">
                    </div>

                    <div class="banner-home-section-two2-2">
                        <img src="{{url("")}}/Client/assets/image/banner-home-section-two2-2.jpg">
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="new-product-slider">
            <div class="more-see-slider-container">
                <div class="more-see-slider-text">
                    <span class="cp-carousel__title-text">
                        ?????????????????????? ?? ?????????????????? ????????????????????????????
                    </span>
                    <a href="$\#">???????????? ??????</a>
                </div>

                <div class="more-see-slider-main">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class="more-see-slider-main-item">
                                <a href="#">
                                    <div class="uk-panel ">
                                        <div class="more-see-slider-main-image-section">
                                            <img src="{{url("")}}/Client/assets/image/offer-slider02.jpg">
                                            <span>????????????</span>
                                            <span>22%</span>
                                        </div>

                                        <div class="more-see-slider-main-description-section">
                                            <div class="offer-slider-main-description-detail">
                                                <span>?????????? ?????? ????????????</span>
                                            </div>

                                            <div class="more-see-slider-main-description-price">
                                                <del>585,000</del>
                                                <span>333,000</span>
                                                <span>??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                           uk-slidenav-previous
                           uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>--}}

        <div class="bottom-category-wrapper">
            <ul class="bottom-category-items">
                @foreach($categories as $category)
                    <a href="#">
                        <li class="bottom-category-item">
                            {{$category->title}}
                            <ul class="bottom-category-sub-items">
                                @foreach($category->children as $subcategory)
                                    <a href="{{route('client.catPro.show',$subcategory)}}">
                                        <li class="bottom-category-sub-item">{{$subcategory->title}}</li>
                                    </a>
                                @endforeach
                            </ul>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>

        <div class="rules-section">
            <div class="rules-section-item">
                <a href="#">
                    <img src="{{url("")}}/Client/assets/image/delivery.svg">
                    <span>?????????? ???????? ?? ????????</span>
                </a>

                <a href="#">
                    <img src="{{url("")}}/Client/assets/image/return.svg">
                    <span>14 ?????? ?????????? ???????????? ????????</span>
                </a>

                <a href="#">
                    <img src="{{url("")}}/Client/assets/image/origin.svg">
                    <span>?????????? ?????? ???????? ????????</span>
                </a>
            </div>
        </div>
    </main>


@endsection
