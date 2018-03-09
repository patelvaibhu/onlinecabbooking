
@extends('mainlayout')

<!--Page Title-->
@section('content')
<section class="page-title" style="background-image:url(asset/images/background/page-title-1.jpg);">
    <div class="auto-container">
        <h1>Our Cars</h1>
        <div class="bread-crumb-outer">
            <ul class="bread-crumb clearfix">
                <li><a href="index">Home</a></li>
                <li class="active">Our Cars</li>
            </ul>
        </div>
    </div>
</section>


<!--Sidebar Page-->
<div class="single-car car-details">
    <div class="auto-container">
        <!--Basic Details-->
        <div class="basic-details">
            <div class="row clearfix">
                <!--Carousel Column-->
                <div class="carousel-column col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Product Carousel-->
                    <div class="product-carousel-outer">
                        <!--Product image Carousel-->
                        <ul class="prod-image-carousel">
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/4.jpg" title="Image Title Here"><img src="asset/images/gallery/4.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/5.jpg" title="Image Title Here"><img src="asset/images/gallery/5.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/3.jpg" title="Image Title Here"><img src="asset/images/gallery/3.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/4.jpg" title="Image Title Here"><img src="asset/images/gallery/4.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/5.jpg" title="Image Title Here"><img src="asset/images/gallery/5.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/3.jpg" title="Image Title Here"><img src="asset/images/gallery/3.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/4.jpg" title="Image Title Here"><img src="asset/images/gallery/4.jpg" alt=""></a></figure></li>
                            <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="asset/images/gallery/5.jpg" title="Image Title Here"><img src="asset/images/gallery/5.jpg" alt=""></a></figure></li>
                        </ul>

                        <!--Product Thumbs Carousel-->
                        <div class="prod-thumbs-carousel">
                            </div>

                    </div><!--End Product Carousel-->
                </div>

                <!--Info Column-->
                <div class="info-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-outer">
                        <div class="upper-info">
                            <div class="sidebar-title"><h3>Jaguar i-Series</h3></div>

                            <ul class="list">
                                <li><a href="#" class="clearfix"><span class="col">Transmission</span> <span class="col">Auto</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Airbags</span> <span class="col">04</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Technology</span> <span class="col">Hi-Fi</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Fuel Type</span> <span class="col">Petrol</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Power</span> <span class="col">350 Hp</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Seats</span> <span class="col">04</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Fuel Capacity</span> <span class="col">20 Litres</span></a></li>
                                <li><a href="#" class="clearfix"><span class="col">Model Year</span> <span class="col">2016</span></a></li>
                            </ul>
                        </div>
                        <ul class="info clearfix">
                            <li>Price: <span class="price"><strong>$80</strong> / Hour</span></li>
                            <li>Price: <span class="price"><strong>$790</strong> / Day</span></li>
                        </ul>
                    </div>
                    <a href="booking" class="theme-btn btn-style-four">Rent a Car</a>
                </div>

            </div>
        </div><!--End Basic Details-->


        <!--Product Info Tabs-->
        <div class="product-info-tabs">

            <!--Product Tabs-->
            <div class="prod-tabs tabs-box" id="product-tabs">

                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#prod-description" class="tab-btn active-btn">Vehicle Overview</li>
                    <li data-tab="#prod-reviews" class="tab-btn">Customer Review</li>
                    <li data-tab="#add-info" class="tab-btn">Additional Information</li>
                </ul>

                <!--Tabs Content-->
                <div class="tabs-container tabs-content">

                    <!--Tab / Active Tab-->
                    {{--<div class="tab active-tab" id="prod-description">--}}
                        {{--<div class="content">--}}
                            {{--<h3>Vehicle Overview</h3>--}}
                            {{--<p>The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum was lost the min ting a maximum security road and back stock a against ade lost the now weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum.</p>--}}
                            {{--<div class="two-column">--}}
                                {{--<div class="row clearfix">--}}
                                    {{--<!--Column-->--}}
                                    {{--<div class="column col-md-6 col-sm-6 col-xs-12">--}}
                                        {{--<!--Default Video Box-->--}}
                                        {{--<div class="default-video-box">--}}
                                            {{--<div class="inner-box">--}}
                                                {{--<figure class="image-box"><img src="asset/images/resource/featured-image-7.jpg" alt=""></figure>--}}
                                                {{--<a href="https://www.youtube.com/watch?v=wDwXASGueKo" class="lightbox-image overlay-link"><div class="icon-box"><span class="icon flaticon-play-button-2"></span></div></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--Column-->--}}
                                    {{--<div class="column col-md-6 col-sm-6 col-xs-12">--}}
                                        {{--<ul class="styled-list-one">--}}
                                            {{--<li>The tiny ship was lost the min ting a maximum security road the minnow</li>--}}
                                            {{--<li>Ting a maximum security road and back stock</li>--}}
                                            {{--<li>Back stock a against ade lost the minnow the min ting</li>--}}
                                            {{--<li>Minnow weather started getting rough the tiny</li>--}}
                                        {{--</ul>--}}

                                        {{--<p>The weather started getting rough the tiny ship was lost the min ting a maxum security road and back stock a against ade lost the minnow weather started ting rough the tiny ship was lost the min ting a maximum security road and back at stock a against ade lost the minnow the min ting a maximum.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <!--Tab-->
                    <div class="tab" id="prod-reviews">
                        <h3>2 Reviews Found</h3>

                        <!--Reviews Container-->
                        <div class="reviews-container">

                            <!--Reviews-->
                            <article class="review-box clearfix">
                                <figure class="rev-thumb"><img src="asset/images/resource/author-thumb-1.jpg" alt=""></figure>
                                <div class="rev-content">
                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span></div>
                                    <div class="rev-info">Admin – April 03, 2016: </div>
                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                </div>
                            </article>

                            <article class="review-box clearfix">
                                <figure class="rev-thumb"><img src="asset/images/resource/author-thumb-2.jpg" alt=""></figure>
                                <div class="rev-content">
                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                    <div class="rev-info">Ahsan – April 01, 2016: </div>
                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                </div>
                            </article>

                        </div>

                        <!--Add Review-->
                        <div class="add-review">
                            <h3>Add a Review</h3>

                            <form method="post" action="http://wp1.themexlab.com/2017/valencia/shop-single.html">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <label>Name *</label>
                                        <input type="text" name="name" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <label>Email *</label>
                                        <input type="email" name="email" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <label>Website *</label>
                                        <input type="text" name="website" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <label>Rating </label>
                                        <div class="rating">
                                            <a href="#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                            <a href="#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                            <a href="#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                            <a href="#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                            <a href="#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Your Review</label>
                                        <textarea name="review-message"></textarea>
                                    </div>
                                    <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                        <button type="button" class="theme-btn btn-style-three">Add Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <!--Tab-->
                    <div class="tab" id="add-info">
                        <div class="content">
                            <h3>Additional Information</h3>
                            <p>The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum was lost the min ting a maximum security road and back stock a against ade lost the now weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum.</p>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <!--Column-->
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <!--Default Video Box-->
                                        <div class="default-video-box">
                                            <div class="inner-box">
                                                <figure class="image-box"><img src="asset/images/resource/featured-image-7.jpg" alt=""></figure>
                                                <a href="https://www.youtube.com/watch?v=wDwXASGueKo" class="lightbox-image overlay-link"><div class="icon-box"><span class="icon flaticon-play-button-2"></span></div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="styled-list-one">
                                            <li>The tiny ship was lost the min ting a maximum security road the minnow</li>
                                            <li>Ting a maximum security road and back stock</li>
                                            <li>Back stock a against ade lost the minnow the min ting</li>
                                            <li>Minnow weather started getting rough the tiny</li>
                                        </ul>

                                        <p>The weather started getting rough the tiny ship was lost the min ting a maxum security road and back stock a against ade lost the minnow weather started ting rough the tiny ship was lost the min ting a maximum security road and back at stock a against ade lost the minnow the min ting a maximum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>


<!--Related Cars-->
<div class="related-cars no-padding-top">
    <div class="auto-container">
        <!--Heading-->
        <div class="sec-title centered">
            <div class="icon-box"><span class="flaticon-sports-car"></span></div>
            <h2>Related Fleet</h2>
            <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage</div>
        </div>

        <div class="row clearfix">
            <!--Default Car Item-->
            <div class="default-car-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="cars"><img src="asset/images/gallery/3.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3><a href="cars">Rangerover</a></h3>
                        <ul class="info clearfix">
                            <li>Price: <span class="price"><strong>$58</strong> / Hour</span></li>
                            <li>Price: <span class="price"><strong>$595</strong> / Day</span></li>
                        </ul>
                        <a href="cars" class="theme-btn btn-style-four">Rent a Car</a>
                    </div>
                </div>
            </div>

            <!--Default Car Item-->
            <div class="default-car-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="car-single.html"><img src="asset/images/gallery/5.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3><a href="cars">Lexus Supreme</a></h3>
                        <ul class="info clearfix">
                            <li>Price: <span class="price"><strong>$65</strong> / Hour</span></li>
                            <li>Price: <span class="price"><strong>$655</strong> / Day</span></li>
                        </ul>
                        <a href="cars" class="theme-btn btn-style-four">Rent a Car</a>
                    </div>
                </div>
            </div>

            <!--Default Car Item-->
            <div class="default-car-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="cars"><img src="asset/images/gallery/4.jpg" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3><a href="cars">Aston Martin</a></h3>
                        <ul class="info clearfix">
                            <li>Price: <span class="price"><strong>$80</strong> / Hour</span></li>
                            <li>Price: <span class="price"><strong>$790</strong> / Day</span></li>
                        </ul>
                        <a href="car-single.html" class="theme-btn btn-style-four">Rent a Car</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    @endsection
