@extends('layout.base')
@section('content')
    <main class="main">

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row align-items-center border-bottom py-3">
                        <div class="col-lg-7 portfolio-info">
                            <h3>Browse Movie Trailers</h3>
                            <p>Browse trailers from reliable & trusted sources</p>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end">
                            <div>
                                <div class="input-group mb-3" data-aos="fade-down">
                                    <input placeholder="Search trailer" type="text" class="form-control" aria-label="">
                                    <button type="button" class="btn input-group-text btn-info text-white"> <i
                                            class="bi bi-search"></i></button>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{ route('movie_create')}}" class="btn input-group-text btn-info text-white"> <i
                                        class="bi bi-plus"></i> Upload</a>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 isotope-container pt-2" data-aos="fade-up" data-aos-delay="200"
                        style="position: relative; height: 1344px;">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <div class="portfolio-content h-100">
                                <img src="{{ url('assets/img/portfolio/app-1.jpg') }}" class="img-fluid" height="90"
                                    alt="">
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

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->
    </main>
@endsection
