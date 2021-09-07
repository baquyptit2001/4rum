@extends('layouts.layout')

@section('content')
    <section class="error-area section-padding position-relative">
        <span class="icon-shape icon-shape-1"></span>
        <span class="icon-shape icon-shape-2"></span>
        <span class="icon-shape icon-shape-3"></span>
        <span class="icon-shape icon-shape-4"></span>
        <span class="icon-shape icon-shape-5"></span>
        <span class="icon-shape icon-shape-6"></span>
        <span class="icon-shape icon-shape-7"></span>
        <div class="container">
            <div class="text-center">
                <img src="{{ asset('images/error-img.png') }}" alt="error-image" class="img-fluid mb-40px">
                <h2 class="section-title pb-3">Oops! Page not found!</h2>
                <p class="section-desc pb-4">We're sorry, we couldn't find the page you requested.</p>
                <a class="btn theme-btn" href="{{ route('questions.index') }}"> Go to homepage </a>
            </div>
        </div><!-- end container -->
    </section>
@endsection