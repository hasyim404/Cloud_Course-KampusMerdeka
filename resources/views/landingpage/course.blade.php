@extends('landingpage.index')
@section('title')
    Course
@endsection
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="">
        {{-- <div class="container">

            <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
            </ol>
            <h2>Blog</h2>

        </div> --}}
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    {{-- <article class="entry">

                        <div class="entry-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                            Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                            </p>
                            <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry --> --}}

                    <div class="sidebar">
                        <div class="sidebar-item recent-posts">

                            @livewire('search-pagination')
                            
                        </div><!-- End sidebar recent posts-->
                    </div>
                    

                    {{-- <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div> --}}

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div id="searchbar" class="sticky-top">
                        <div class="sidebar">

                            <h4 class="fw-bold pb-3">Recent Course</h4>
                            <div class="sidebar-item recent-posts">

                                @foreach ( $pag_course as $data )
                                    <div class="post-item clearfix">
                                        <a href="{{ route('daftar-course.show',$data->nama_course) }}">
                                            @empty($data->foto)
                                                <img src="{{ url('img/banner_course/!banner-default.jpg') }}" alt="Banner-Course" >
                                            @else
                                                <img src="{{ url('img/banner_course')}}/{{$data->foto}}" alt="Banner-Course" >
                                            @endempty 
                                            <h4>{{ $data->nama_course }}</h4>
                                            <time datetime="{{ $data->updated_at->format('Y M d') }}"><i class="bi bi-clock-history"></i> {{ $data->updated_at->format('Y M d') }}</time>
                                        </a>
                                    </div>    
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->
                    </div>
                    

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection