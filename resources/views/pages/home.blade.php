<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body>
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>

@include('pages.header')

<!-- home page slider -->
<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Свіжий та органічний</p>
                            <h1>Смачні сезонні фрукти</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Колекція фруктів</a>
                                <a href='{{ asset('/contact') }}' class="bordered-btn">Зв'яжіться з нами</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Свіжий кожен день</p>
                            <h1>100% органічна колекція</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Відвідайте магазин</a>
                                <a href='{{ asset('/contact') }}' class="bordered-btn">Зв'яжіться з нами</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Мега розпродаж триває!</p>
                            <h1>Отримайте знижку</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Відвідайте магазин</a>
                                <a href='{{ asset('/contact') }}' class="bordered-btn">Зв'яжіться з нами</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end home page slider -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Безкоштовна доставка</h3>
                        <p>При замовлені від 500 грн.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>Працюємо 24/7</h3>
                        <p>Цілодобова консультація</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Відшкодування</h3>
                        <p>Отримайте повернення протягом 3 днів!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Наші ТОП</span> Продукти</h3>
                    <p>У нас ви знайдете тількі крашу та най свіжішу продукцію на будь який смак! </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($homes as $home)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <img src="{{ asset('storage/img/'. $home->image) }}" alt="img" />
                    </div>
                    <h3>{{ $home->name }}</h3>
                    <p class="product-price">{{ $home->price }}</p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Додати в корзину</a>
{{--                    <a class="entry-title" href="{{ route('/category', ['slug' => $dataBrand->slug]) }}" rel="bookmark">{{ $dataBrand->name }}</a>--}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> знижка
                                </span>
                        </div>
                    </div>
                    <img src='{{ asset('assets/img/Strawberry.jpg') }}' alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Товар</span> місяця</h3>
                <h4>Полуниця: "Королева Єлизавета"</h4>
                <div class="text">Полуниця «королева Єлизавета» стійка до змін погоди. Вона прекрасно переносить занадто сильну спеку і заморозки. Відрізняється хорошим ростом і розвитком на ґрунтах з будь-яким складом. Ягоди мають великий розмір, яскраво червоний відтінок, глянсову поверхню і прекрасний смак меду.</div>
                <!--Countdown Timer-->
                <h5>До кінця акції залишилось:</h5>
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2022/4/01">
                        <div class="counter-column"><div class="inner"><span class="count">00</span>днів</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>годин</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>хвилин</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>секунд</div></div>
                    </div>
                </div>
                <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Додати в кошик</a>
            </div>
        </div>
    </div>
</section>
<!-- end cart banner section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src='{{ asset('assets/img/avatar1.png') }}' alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Saira Hakim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src='{{ asset('assets/img/avatar2.png') }}' alt="">
                        </div>
                        <div class="client-meta">
                            <h3>David Niph <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src='{{ asset('assets/img/avatar3.png') }}' alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Jacob Sikim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonail-section -->

<!-- advertisement section -->
<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Цінаві факти</p>
                    <h2>Що ви знаєте про <span class="orange-text">Фрукти?</span></h2>
                    <p>Ароматні стиглі фрукти не тільки підтримують наш організм вітамінами, але і піднімають
                        настрій, дарують нам заряд бадьорості. Фруктові соки, коктейлі – обов'язкові складові
                        літнього меню. Для їх приготування використовуйте соковижималки і блендери.</p>
                    <a href="about.html" class="boxed-btn mt-4">Знати більше</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->

<!-- shop banner -->
<section class="shop-banner">
    <div class="container">
        <h3>Товар місяця <br> з великою <span class="orange-text">знижкою...</span></h3>
        <div class="sale-percent"><span>Розпродаж! <br> Знижка</span>50% <span></span><img src='{{ asset('assets/img/action.jpg') }}' alt=""></div>
        <a href="shop.html" class="cart-btn btn-lg">Перейти до товару</a>
    </div>
</section>
<!-- end shop banner -->

<!-- latest news -->
{{--<div class="latest-news pt-150 pb-150">--}}
{{--    <div class="container">--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-8 offset-lg-2 text-center">--}}
{{--                <div class="section-title">--}}
{{--                    <h3><span class="orange-text">Our</span> News</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-latest-news">--}}
{{--                    <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>--}}
{{--                    <div class="news-text-box">--}}
{{--                        <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>--}}
{{--                        <p class="blog-meta">--}}
{{--                            <span class="author"><i class="fas fa-user"></i> Admin</span>--}}
{{--                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>--}}
{{--                        </p>--}}
{{--                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>--}}
{{--                        <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-latest-news">--}}
{{--                    <a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>--}}
{{--                    <div class="news-text-box">--}}
{{--                        <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>--}}
{{--                        <p class="blog-meta">--}}
{{--                            <span class="author"><i class="fas fa-user"></i> Admin</span>--}}
{{--                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>--}}
{{--                        </p>--}}
{{--                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>--}}
{{--                        <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">--}}
{{--                <div class="single-latest-news">--}}
{{--                    <a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>--}}
{{--                    <div class="news-text-box">--}}
{{--                        <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>--}}
{{--                        <p class="blog-meta">--}}
{{--                            <span class="author"><i class="fas fa-user"></i> Admin</span>--}}
{{--                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>--}}
{{--                        </p>--}}
{{--                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>--}}
{{--                        <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <a href="news.html" class="boxed-btn">More News</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- end latest news -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src='{{ asset('assets/img/company-logos/1.png') }}' alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src='{{ asset('assets/img/company-logos/2.png') }}' alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src='{{ asset('assets/img/company-logos/3.png') }}' alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src='{{ asset('assets/img/company-logos/4.png') }}' alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src='{{ asset('assets/img/company-logos/5.png') }}' alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->

@include('pages.footer')

@include('pages.scripts')

</body>
</html>
