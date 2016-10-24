@extends('layouts.master')

@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">APPARTMENT TITLE</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">
                                <img src="{{ url('/images/'.$details->images->thumbnail) }}" alt="img">
                                <img src="{{ url('/images/'.$details->images->slide1) }}" alt="img">
                                {{--<img src="img/slider/3.jpg" alt="img">--}}
                            </div>
                            <div class="aa-properties-info">
                                <h2>{{ $details->title }}</h2>
                                <h2>{{ $details->description }}</h2>
                                <h2>Uploaded by: {{ $details->user->name }}</h2>
                                <span class="aa-price">{{ $details->price }}</span>

                                <h4>Propery Features</h4>
                                <ul>
                                    <li>{{ $details->bedroom }} Bedroom</li>
                                    <li>{{ $details->bathroom }} Baths</li>
                                    <li>{{ $details->kitchen }} Kitchen</li>
                                    <li>{{ $details->landArea }} sq. feet Land Area</li>
                                    <li>{{ $details->houseArea }} sq. feet House Area</li>
                                    <li>{{ $details->plotted }} plotted</li>
                                    <li>{{ $details->storey }} storey</li>
                                    <li>{{ $details->roadDistance }} meter Road Distance</li>
                                    {{--<li>Children Play Ground</li>--}}
                                    {{--<li>Comunity Center</li>--}}
                                    {{--<li>Security System</li>--}}
                                </ul>
                                {{--<h4>Property Video</h4>--}}
                                {{--<iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe>--}}
                                {{--<h4>Property Map</h4>--}}
                                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                            </div>
                            <!-- Properties social share -->
                            {{--<div class="aa-properties-social">--}}
                                {{--<ul>--}}
                                    {{--<li>Share</li>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- Nearby properties -->
                            {{--<div class="aa-nearby-properties">--}}
                                {{--<div class="aa-title">--}}
                                    {{--<h2>Nearby Properties</h2>--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<div class="aa-nearby-properties-area">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<article class="aa-properties-item">--}}
                                                {{--<a class="aa-properties-item-img" href="#">--}}
                                                    {{--<img alt="img" src="img/item/1.jpg">--}}
                                                {{--</a>--}}
                                                {{--<div class="aa-tag for-sale">--}}
                                                    {{--For Sale--}}
                                                {{--</div>--}}
                                                {{--<div class="aa-properties-item-content">--}}
                                                    {{--<div class="aa-properties-info">--}}
                                                        {{--<span>5 Rooms</span>--}}
                                                        {{--<span>2 Beds</span>--}}
                                                        {{--<span>3 Baths</span>--}}
                                                        {{--<span>1100 SQ FT</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="aa-properties-about">--}}
                                                        {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="aa-properties-detial">--}}
                                                        {{--<span class="aa-price">--}}
                                                          {{--$35000--}}
                                                        {{--</span>--}}
                                                        {{--<a class="aa-secondary-btn" href="#">View Details</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</article>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<article class="aa-properties-item">--}}
                                                {{--<a class="aa-properties-item-img" href="#">--}}
                                                    {{--<img alt="img" src="img/item/2.jpg">--}}
                                                {{--</a>--}}
                                                {{--<div class="aa-tag for-sale">--}}
                                                    {{--For Sale--}}
                                                {{--</div>--}}
                                                {{--<div class="aa-properties-item-content">--}}
                                                    {{--<div class="aa-properties-info">--}}
                                                        {{--<span>5 Rooms</span>--}}
                                                        {{--<span>2 Beds</span>--}}
                                                        {{--<span>3 Baths</span>--}}
                                                        {{--<span>1100 SQ FT</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="aa-properties-about">--}}
                                                        {{--<h3><a href="#">Appartment Title</a></h3>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="aa-properties-detial">--}}
                                                          {{--<span class="aa-price">--}}
                                                            {{--$35000--}}
                                                          {{--</span>--}}
                                                        {{--<a class="aa-secondary-btn" href="#">View Details</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</article>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                        </div>
                    </div>

                    <div>


                        <section class="row new-post">
                            <div class="col-md-12 col-md-offset-0">
                                <header><h3>Customer Reviews</h3></header>
                                <form action="{{ route('review', $details->id) }}" method="post">
                                    <div>
                                        <fieldset class="rating">
                                            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Review</button>
                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </form>
                            </div>
                        </section>
                    </div>

                </div>

                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Properties Search</h3>
                            <form action="">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Type Your Location">
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Category</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select id="" name="">
                                        <option selected="" value="0">Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-filter-search">
                                    <span>PRICE ($)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>
                                    <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-advance-search">
                                    <input type="submit" value="Search" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Populer Properties</h3>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- / Properties  -->

@endsection