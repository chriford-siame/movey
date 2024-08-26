@extends('layout.base')
@section('content')
    <main class="main">

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <!-- resources/views/video_upload.blade.php -->
                <form action="{{ route('movie_upload') }}" method="POST" class="justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-body w-50">
                        <div>
                            <label for="video">Choose Trailer</label>
                            <input type="file" required name="video" class="form-control" id="video" accept="video/*">
                        </div>
                        <div class="pt-3 w-100 d-flex gap-2 justify-content-center">
                            <a href="{{route('movie_list')}}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a> 
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-upload"></i> Upload
                            </button>
                        </div>
                    </div>
                </form>


            </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
    </main>
@endsection
