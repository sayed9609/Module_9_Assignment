@extends('layout.app')

@section('home')
<!-- Start Hero Seciton -->
<section class="st-hero st-style2 st-bg st-dynamic-bg st-ripple-version" data-src='assets/img/hero-bg-1.jpg'>
    <div class="container">
        <div class="st-hero-text">
            <div class="st-author"><img src="assets/img/section/hero-img.jpg" alt=""></div>
            <h1>Hi, I am <span>Sayed Mahmud</span></h1>
            <p>I am Laravel-focused Backend Developer skilled in crafting scalable solutions. Proficient in frontend basics and WordPress. Collaborative team player delivering robust code and committed to continuous learning for top-notch backend development.</p>
            <div class="st-hero-social-links">
                <a href="{{url('https://www.facebook.com/sayed9609')}} " class="st-social-btn" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{url('https://www.linkedin.com/in/sayed-mahmud-4a751a2a1/')}}" class="st-social-btn" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                {{-- <a href="#" class="st-social-btn">
                    <i class="fab fa-github" target="_blank"></i>
                </a> --}}
                <a href="{{url('https://join.skype.com/invite/vol7ghyTjnAf')}}" class="st-social-btn" target="_blank">
                    <i class="fab fa-skype"></i>
                </a>
                <a href="{{url('https://www.instagram.com/sayed_9609')}}" class="st-social-btn" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Seciton -->
@endsection