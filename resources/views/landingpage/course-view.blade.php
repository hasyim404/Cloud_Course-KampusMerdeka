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

                    <div class="sidebar">
                        {{-- <h1 class="fw-bold" style="color: #012970">Course Tersedia</h1> --}}
                        <div class="sidebar-item recent-posts pt-5">
                            
                                <div class="post-item clearfix ">
                                        <div class="row">
                                            <div class="col col-lg-4">
                                                @empty($course->foto)
                                                    <img class="me-5 rounded" src="{{ url('img/banner_course/!banner-default.jpg') }}" style="width: 200px !important" alt="Banner-Course" >
                                                @else
                                                    <img class="me-5 rounded" src="{{ url('img/banner_course')}}/{{$course->foto}}" style="width: 200px !important" alt="Banner-Course" >
                                                @endempty  
                                            </div>   
                                            <div class="col col-lg-8">
                                                <h3 class="text-dark fw-semibold">{{ $course->nama_course }}</h3>
                                                <time class="m-auto"><i class="bi bi-clock-history"></i> {{ $course->updated_at->format('Y M d') }}</time>
                                                <span class="text-secondary">{{ $course->deskripsi_course }}</span>    
                                            </div>
                                        </div>

                                        <div class="accordion mt-5" id="accordionExample">
                                            @foreach ($modul as $data_modul)
                                            @php
                                                $target = $data_modul->id;
                                            @endphp
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$target}}" aria-expanded="true" aria-controls="collapse{{$target}}">
                                                    {{ $data_modul->jdl_modul }}
                                                  </button>
                                                </h2>
                                                <div id="collapse{{$target}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                  <div class="accordion-body">
                                                    @foreach ($filemateri as $data_materi)
                                                        <a href="{{ $data_materi->id }}">
                                                            {{ $data_materi->id }} <br><br>
                                                        </a>
                                                    @endforeach
                                                  </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        {{-- @foreach ($modul as $data)
                                            <h2>{{ $data->jdl_modul }}</h2>
                                        @endforeach

                                        @foreach ($filemateri as $data)
                                            <h2>{{ $data->pdfmateri }}</h2>
                                        @endforeach --}}
                                        
                                </div> 
                                {{-- <br>  <hr> <br>      --}}
                            

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

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                            <input type="text">
                            <button type="button"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Recent Course</h3>
                        <div class="sidebar-item recent-posts">

                            @foreach ( $pag_course as $data )
                                <div class="post-item clearfix">
                                    <a href="{{ route('daftar-course.show',$data->id) }}">
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

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection