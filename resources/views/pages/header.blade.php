<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href='{{ asset('/home') }}'>
                            <img src='{{ asset('assets/img/logo.png') }}' alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href='{{ asset('/home') }}'>Головна сторінка</a>
                                {{--                                <ul class="sub-menu">--}}
                                {{--                                    <li><a href='{{ asset('/home') }}'>Головна сторінка</a></li>--}}
                                {{--                                    <li><a href='{{ asset('index_2.html') }}'>Slider Home</a></li>--}}
                                {{--                                </ul>--}}
                            </li>
                            <li><a href='{{ asset('/about') }}'>Про нас</a></li>
                            <li><a href="#">Цікавинки</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">Цікаві факти</a></li>
                                    <li><a href="cart.html">Цікаві історії</a></li>
                                    <li><a href="checkout.html">Вакансії</a></li>
                                </ul>
                            </li>
                            <li><a href='{{ asset('/news') }}'>Новини</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">Новини про продукцію</a></li>
                                    <li><a href="single-news.html">Новини про компанію</a></li>
                                </ul>
                            </li>
                            <li><a href='{{ asset('/contact') }}'>Контакти</a></li>
                            <li><a href='{{ asset('/product') }}'>Продукція</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Продукція</a></li>
                                    <li><a href="checkout.html">Новинки</a></li>
                                    <li><a href="single-product.html">Акції</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"> Корзина</i></a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"> Вхід</i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
