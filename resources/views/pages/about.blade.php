<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body>

<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

@include('pages.header')

<!-- search area -->
{{--<div class="search-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <span class="close-btn"><i class="fas fa-window-close"></i></span>--}}
{{--                <div class="search-bar">--}}
{{--                    <div class="search-bar-tablecell">--}}
{{--                        <h3>Search For:</h3>--}}
{{--                        <input type="text" placeholder="Keywords">--}}
{{--                        <button type="submit">Search <i class="fas fa-search"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- end search arewa -->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Хочете дізнатися більше</p>
                    <h1>Про нас?</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- featured section -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3">Чому <span class="orange-text">саме ми?</span></h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h3>Доставка додому</h3>
                                    <p>Ми доставимо вам товар в будь яку точку України.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Кращі ціни</h3>
                                    <p>У нас найкращі ціни в порівняні з іншими продавцями.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>Спеціальна коробка</h3>
                                    <p>У нас є чудові подарункові коробки для наших покупців.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Швидке повернення коштів</h3>
                                    <p>Якщо вам прийшов зіпсований або не якісний товар, ми швидко повернемо вам гроші за нього.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end featured section -->

<!-- team section -->
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>Наша <span class="orange-text">команда</span></h3>
                    <p>Ми зібрали найкращих спеціаліснів у своїх сферах</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-item">
                    <div class="team-bg team-bg-1">
                        <img src='{{ asset('assets/img/team/team-1.jpg') }}' alt="">
                    </div>
                    <h4>Дима Дима <span>Фермер</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-item">
                    <div class="team-bg team-bg-2">
                        <img src='{{ asset('assets/img/team/team-2.jpg') }}' alt="">
                    </div>
                    <h4>Саша Саша <span>Фермер</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-team-item">
                    <div class="team-bg team-bg-3">
                        <img src='{{ asset('assets/img/team/team-3.jpg') }}' alt="">
                    </div>
                    <h4>Паша Паша <span>Фермер</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end team section -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/5.png" alt="">
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
