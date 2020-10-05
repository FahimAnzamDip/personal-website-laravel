@extends('frontend.layout.frontapp')

<!--Nav Section Start-->
<section id="nav_bar">
    <nav id="main_nav" class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.page') }}"><img width="200" class="img-fluid" src="{{ asset('frontend') }}/img/logo.png" alt=""></a>

            <button id="menu_btn" class="navbar-toggler hamburger hamburger--spring" type="button"
                    data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.page') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#works">Works</a>
                    </li>
                    <li class="nav-item pr-0">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!--Nav Section End-->

@section('page-content')
    <!--Breadcrumb Section Start-->
    <section id="breadcrumb" class="section_gap wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home.page') }}"><i class="fad fa-home-alt"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Works</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <!-- Portfolio Section Start -->
    <section id="works" class="section_gap wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5 d-flex justify-content-center">
                    <h2 class="section_heading text-center d-inline js--start-sticky-nav">All Works</h2>
                </div>
            </div>

            <div class="row justify-content-center mb-5 mb-cs px-3">
                <ul class="nav portfolio-filter">
                    <li class="nav-item active" data-filter="*">
                        <a class="nav-link filter_btn" href="javascript:void(0)">All</a>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item" data-filter=".{{ strtolower($category->category_name) }}">
                            <a class="nav-link filter_btn" href="javascript:void(0)">{{ $category->category_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="row justify-content-center portfolio-wrapper">

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 application">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-1_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Zapper</h3>
                            <p class="portfolio-text">
                                It's a ecommerce website. Made with wordpress.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                                <a href="single_portfolio.html" class="portfolio-btn">
                                    <i class="far fa-list-alt"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 corporate">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-2_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Lixer</h3>
                            <p class="portfolio-text">
                                It's a blog website. Made with Laravel php framework.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 creative">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-3_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Lalvai</h3>
                            <p class="portfolio-text">
                                It's a corporate landing page. Made with Bootstrap, Html & Css.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 application">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-4_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">nCovid</h3>
                            <p class="portfolio-text">
                                It's a ecommerce website. Made with wordpress.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 corporate">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-5_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Multikart</h3>
                            <p class="portfolio-text">
                                It's a blog website. Made with Laravel php framework.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 creative">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-6_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Cuba</h3>
                            <p class="portfolio-text">
                                It's a corporate landing page. Made with Bootstrap, Html & Css.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 application">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-1_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Zapper</h3>
                            <p class="portfolio-text">
                                It's a ecommerce website. Made with wordpress.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 corporate">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-2_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Lixer</h3>
                            <p class="portfolio-text">
                                It's a blog website. Made with Laravel php framework.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gutter-sizer col-lg-4 col-md-6 col-sm-6 creative">
                    <div class="card single-portfolio text-center">
                        <div class="portfolio-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/portfolio-img-3_low.png" alt="portfolio_image">
                        </div>
                        <div class="card-body portfolio-details">
                            <h3 class="portfolio-title">Lalvai</h3>
                            <p class="portfolio-text">
                                It's a corporate landing page. Made with Bootstrap, Html & Css.
                            </p>
                            <div class="portfolio-btns d-flex justify-content-center">
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-brackets-curly"></i> Code
                                </a>
                                <a href="javascript:void(0)" class="portfolio-btn">
                                    <i class="far fa-link"></i> Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Pagination start -->
                <div class="col-12 d-flex justify-content-center js--start-go-top">
                    <div class="mr-minus">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="Previous">
                                    <span class="page-link" aria-hidden="true"><i class="fad fa-arrow-left"></i></span>
                                </li>

                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" rel="next" aria-label="Next"><i
                                            class="fad fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Pagination End -->
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection
