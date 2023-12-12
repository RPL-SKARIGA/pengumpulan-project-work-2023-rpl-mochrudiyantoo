@extends('layout.home')

@section('title', 'About')

@section('content')
<!-- Intro -->
<section class="section-wrap intro pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-50">
                <h2 class="intro-heading">about shop</h2>
                <p>{{$about->deskripsi}}</p>
            </div>
        </div>
        <hr class="mb-0">
    </div>
</section> <!-- end intro -->

<!-- Testimonials -->
<section class="section-wrap testimonials">
    <div class="container">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                
                <h2 class="heading bottom-line">ULASAN</h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme owl-dark-dots text-center">
            @foreach ($testimonies as $testimony)
            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">{{$testimony->deskripsi}}</p>
                    <span>{{$testimony->nama_testimoni}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section> <!-- end testimonials -->
@endsection
