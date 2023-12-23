@extends('landingpagelayouts.main')
@section('content')

<!-- ======= Header ======= -->

@php
$forms = \App\Models\FormBuilder::all();
@endphp
<!-- ======= Hero Section ======= -->


<section class="padding ptb-xs-40 gray-bg process_section">
  <div class="main-banner banner_up">
    <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
      <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
      <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
        <ul>
          <!-- SLIDE  -->
          <li data-index="rs-129">
            <!-- MAIN IMAGE -->
            <img src="landingpage/assets/images/banner/1.webp" alt="" class="rev-slidebg">
            <!-- LAYERS -->
            <!-- LAYER NR. 2 -->
            <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-129-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']" data-y="['top','top','top','center']" data-voffset="['165','135','105','0']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
              <div class="banner-text">
                <h2>Karibu Tukonekt! <br><span>The future of Event Registrations!</span></h2>

                <a class="btn-text" href="{{ route('create.registers')}}"> REGISTER HERE</a>
              </div>
            </div>
          </li>
          <!-- SLIDE  -->
          <li data-index="rs-130" data-title="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="landingpage/assets/images/banner/2.webp" alt="" class="rev-slidebg">
            <!-- LAYERS -->
            <!-- LAYER NR. 2 -->
            <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-130-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']" data-y="['top','top','top','center']" data-voffset="['165','135','105','0']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
              <div class="banner-text">
                <h2>Step into a world where<span> effortless registrations meet lightning-fast attendance tracking.</span></h2>

                <a class="btn-text" href="{{ route('create.registers')}}"> REGISTER HERE</a>
              </div>
            </div>
          </li>
          <!-- SLIDE  -->
          <li data-index="rs-131">
            <!-- MAIN IMAGE -->
            <img src="landingpage/assets/images/banner/3.webp" alt="" class="rev-slidebg ">
            <!-- LAYERS -->
            <!-- LAYER NR. 2 -->
            <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-131-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']" data-y="['top','top','top','center']" data-voffset="['165','135','105','0']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
              <div class="banner-text">
                <h2>Embrace the convenience of our QR Code system <span>simplifying your event access like never before. With a single click, your personalized QR Code awaits you.</span></h2>

                <a class="btn-text" href="{{ route('create.registers')}}"> REGISTER HERE</a>
              </div>
            </div>
          </li>

          <!-- SLIDE  -->
          <li data-index="rs-132">
            <!-- MAIN IMAGE -->
            <img src="landingpage/assets/images/banner/4.webp" alt="" class="rev-slidebg ">
            <!-- LAYERS -->
            <!-- LAYER NR. 2 -->
            <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-131-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']" data-y="['top','top','top','center']" data-voffset="['165','135','105','0']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
              <div class="banner-text">
                <h2>Let's craft unforgettable event, <br><span>experiences together.</span></h2>

                <a class="btn-text" href="{{ route('create.registers')}}"> REGISTER HERE</a>
              </div>
            </div>
          </li>
          <!-- SLIDE  -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
    </div>
  </div>
  <br>
 

  <div class="copyriight_block ptb-20 mt-20">

  </div>
  <p style="text-align: center; color:white;">
     Powered by Takwimu@studio
  </p>


</section>





@endsection