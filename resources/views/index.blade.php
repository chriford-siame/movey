@extends('layout.base')
@section('content')
    <main class="main">

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row align-items-center">
                        <div class="col-lg-7 portfolio-info">
                            <h3>Browse Movie Trailers</h3>
                            <p>Browse trailers from reliable & trusted sources</p>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end">
                            <div>
                                <div class="input-group mb-3" data-aos="fade-down">
                                    <input placeholder="Search trailer" type="text" class="form-control" aria-label="">
                                    <button type="button" class="btn input-group-text btn-info text-white"> <i class="bi bi-search"></i></button>
                                  </div>
                            </div>
                            <div class="row">
                                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100"> 
                                    <li data-filter=".filter-app">Filter: </li>
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-product">Product</li>
                                <li data-filter=".filter-branding">Branding</li>
                                <li data-filter=".filter-books">Books</li>
                            </ul><!-- End Portfolio Filters -->
                        </div>
                        </div>
                    </div>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200"
                        style="position: relative; height: 1344px;">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/app-1.jpg') }}" title="App 1"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                            style="position: absolute; left: 440px; top: 0px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/product-1.jpg') }}" title="Product 1"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                            style="position: absolute; left: 880px; top: 0px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/branding-1.jpg') }}" title="Branding 1"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
                            style="position: absolute; left: 0px; top: 336px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 1</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/books-1.jpg') }}" title="Branding 1"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                            style="position: absolute; left: 440px; top: 336px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/app-2.jpg') }}" title="App 2"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                            style="position: absolute; left: 880px; top: 336px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/product-2.jpg') }}" title="Product 2"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                            style="position: absolute; left: 0px; top: 672px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/branding-2.jpg') }}" title="Branding 2"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
                            style="position: absolute; left: 440px; top: 672px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 2</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/books-2.jpg') }}" title="Branding 2"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                            style="position: absolute; left: 880px; top: 672px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/app-3.jpg') }}" title="App 3"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                            style="position: absolute; left: 0px; top: 1008px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/product-3.jpg') }}" title="Product 3"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                            style="position: absolute; left: 440px; top: 1008px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/branding-3.jpg') }}" title="Branding 2"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
                            style="position: absolute; left: 880px; top: 1008px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 3</h4>
                                    <p>Lorem ipsum</p>
                                    <div>
                                        <a href="{{ url('assets/img/portfolio/books-3.jpg') }}" title="Branding 3"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                                perferendis tempore et consequatur.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic
                                non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                                adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                                provident adipisci neque.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi
                                at autem alias eius labore.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="service-details.html" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->
    </main>
@endsection
