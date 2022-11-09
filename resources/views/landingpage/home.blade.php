@extends('landingpage.index')
@section('title')
    Home
@endsection
@section('hero')
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Menghadirkan Free Course Online Tentang Berbagai Macam Materi Cloud.</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Learn Better, Do Better, Be Better.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Get Started</span>
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ url('template/landingpage/assets/img/hero-img.png') }}" class="img-fluid" alt="">
            </div>
            </div>
        </div>
        
    </section>
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                <h3>Who We Are</h3>
                <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                <p>
                    Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                </p>
                <div class="text-center text-lg-start">
                    <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ url('template/landingpage/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

            </div>
        </div>

    </section>
    <!-- End About Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                {{-- <h2>Blog</h2> --}}
                <p>Course</p>
            </header>

            <div class="row">

                <div class="col-lg-3">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ url('template/landingpage/assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">Tue, September 15</span>
                        <h3 class="post-title">Amazon Web Services (AWS)</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ url('template/landingpage/assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">Fri, August 28</span>
                        <h3 class="post-title">Amazon Web Services (AWS)</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ url('template/landingpage/assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">Mon, July 11</span>
                        <h3 class="post-title">Amazon Web Services (AWS)</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ url('template/landingpage/assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">Fri, August 28</span>
                        <h3 class="post-title">Amazon Web Services (AWS)</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->
@endsection
