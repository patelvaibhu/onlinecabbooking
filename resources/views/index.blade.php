@extends('mainlayout')

@section('content')
<!--End Main Header -->
<div class="preloader"></div>


    <!--Main Slider-->
<!--Main Slider-->
<section class="main-slider" data-start-height="800" data-slide-overlay="yes">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="asset/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{asset('asset/images/main-slider/2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfr sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-90"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><div class="small-title">Welcome to Cab Booking</div> </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="10"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">Enjoy the Ride with Brand New <br>Ducatti Cars</h2></div></div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="130"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Rent a Car</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Contact Us</a></div>

                </li>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="asset/images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="asset/images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="-90"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><div class="small-title">No. 1 Car Rental / Hire Company</div> </div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="10"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><h2 class="big-title">We are trusted by Millions of <br>Customers Worldwide</h2></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="130"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Rent a Car</a></div>

                </li>

                <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="asset/images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{asset('asset/images/main-slider/3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sft sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-90"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><div class="small-title">Starts from $500/day</div> </div>

                    <div class="tp-caption sfb sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="10"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">The Classic Aston Martin Dark Shiny <br>Sport Car in the Street</h2></div></div>

                    <div class="tp-caption sfb sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="130"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Rent a Car</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Contact Us</a></div>

                </li>

            </ul>
        </div>
    </div>
</section>


@endsection
<!--End pagewrapper-->

<!--Scroll to top-->

