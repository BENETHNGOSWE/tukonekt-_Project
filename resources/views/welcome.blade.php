@extends('landingpagelayouts.main')
@section('content')

<!-- ======= Header ======= -->

@php
$forms = \App\Models\FormBuilder::all();
@endphp
<!-- ======= Hero Section ======= -->
<section class="hero-section" id="hero">

  <div class="wave">

    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
        </g>
      </g>
    </svg>

  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 hero-text-image">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-start">
            <h1 data-aos="fade-right">Real-time Monitoring and Evaluation for Success.</h1>
            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Welcome to our Monitoring and Evaluation (M&E) platform, where precision meets performance🚀.<br> Our platform empowers you with real-time insights, intuitive analytics, and streamlined data visualization, ensuring that your projects and initiatives are not just monitored but strategically evaluated for optimal outcomes.</p>
            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('create.registers')}}" class="btn btn-outline-white">Register Now Here</a></p>
          </div>
          <div class="col-lg-6 landing">
            <img src="landingpage/assets/img/landing.png" alt="Image" class="phone-1" data-aos="fade-right">
          </div>
        </div>
      </div>
      {{-- @unless(empty($forms))
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td>
                                <a href="{{ URL('read-form-builder', $form->id) }}" class="btn btn-primary">Register Here</a>
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>
    </div>
    @endunless --}}
  </div>



  </div>


</section>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1><a href="index.html">Evaluation Point</a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active " href="index.html">Home</a></li>
        @if(!$forms->isEmpty())
          <li><a href="{{ URL('read-form-builder', $forms[0]->id) }}">Register</a></li>
        @else
            <li><a href="{{ route('home')}}">Home</a></li>
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->
@endsection