<section id="works" class="section_gap wow fadeIn" data-wow-duration="1.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5 d-flex justify-content-center">
                <h2 class="section_heading text-center d-inline">Recent Works</h2>
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


        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('portfolio.page') }}" class="mr-minus btn btn-primary"><span class="mr-1">View all</span> <i class="fad fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
