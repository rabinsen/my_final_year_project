@extends('layouts.master')

@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">PROPERTIES</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-properties-content">
                        <!-- start properties content head -->
                        <div class="aa-properties-content-head">
                            <div class="aa-properties-content-head-left">
                                {{--<form action="" class="aa-sort-form">--}}
                                    {{--<label for="">Sort by</label>--}}
                                    {{--<select name="">--}}
                                        {{--<option value="1" selected="Default">Default</option>--}}
                                        {{--<option value="2">Name</option>--}}
                                        {{--<option value="3">Price</option>--}}
                                        {{--<option value="4">Date</option>--}}
                                    {{--</select>--}}
                                {{--</form>--}}
                                {{--<form action="" class="aa-show-form">--}}
                                    {{--<label for="">Show</label>--}}
                                    {{--<select name="">--}}
                                        {{--<option value="1" selected="12">6</option>--}}
                                        {{--<option value="2">12</option>--}}
                                        {{--<option value="3">24</option>--}}
                                    {{--</select>--}}
                                {{--</form>--}}
                            </div>
                            <div class="aa-properties-content-head-right">
                                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <!-- Start properties content body -->
                        <div class="aa-properties-content-body">
                            <ul class="aa-properties-nav">
                                @foreach( $properties as $property)
                                    <li>
                                        <article class="aa-properties-item">
                                            <a class="aa-properties-item-img" href="#">
                                                <img src="{{ url('/images/'.$property->images->thumbnail) }}" class="img-thumbnail">
                                            </a>

                                            <div class="aa-tag for-rent">
                                                For Sale
                                            </div>
                                            <div class="aa-properties-item-content">
                                                <div class="aa-properties-info">
                                                    <span>{{ $property->bedroom }} beds</span>
                                                    <span>{{ $property->bathroom }} baths</span>
                                                    <span>{{ $property->kitchen }} kitchen</span>
                                                    <span>{{ $property->landArea }} sq. foot</span>
                                                </div>
                                                <div class="aa-properties-about">
                                                    <h3><a href="#">{{ $property->title }}</a></h3>

                                                    <p>{{ $property->description }}</p>
                                                </div>
                                                <div class="aa-properties-detial">
                                                    <span class="aa-price">
                                                        {{ $property->price }}
                                                    </span>
                                                    <a class="aa-secondary-btn" href="{{ route('details', $property->id) }}">View Details</a>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Start properties content bottom -->
                        <div class="aa-properties-content-bottom">
                            <nav>
                                {{ $properties->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Start properties sidebar -->
                {{--<div class="col-md-4">--}}
                    {{--<aside class="aa-properties-sidebar">--}}
                        {{--<!-- Start Single properties sidebar -->--}}
                        {{--<div class="aa-properties-single-sidebar">--}}
                            {{--<h3>Properties Search</h3>--}}

                            {{--<form action="">--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<input type="text" placeholder="Type Your Location">--}}
                                {{--</div>--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select id="" name="">--}}
                                        {{--<option selected="" value="0">Category</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select id="" name="">--}}
                                        {{--<option selected="" value="0">Type</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select id="" name="">--}}
                                        {{--<option selected="" value="0">Type</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<input type="submit" value="Search" class="aa-search-btn">--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<!-- Start Single properties sidebar -->--}}
                        {{--<div class="aa-properties-single-sidebar">--}}
                            {{--<h3>Populer Properties</h3>--}}

                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="media-object" src="img/item/1.jpg" alt="img">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading"><a href="#">This is Title</a></h4>--}}

                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                    {{--<span>$65000</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="media-object" src="img/item/1.jpg" alt="img">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading"><a href="#">This is Title</a></h4>--}}

                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                    {{--<span>$65000</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="media-object" src="img/item/1.jpg" alt="img">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading"><a href="#">This is Title</a></h4>--}}

                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                    {{--<span>$65000</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</aside>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection