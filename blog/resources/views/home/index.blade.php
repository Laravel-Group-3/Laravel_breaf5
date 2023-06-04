@extends('home.layouts.app')

@section('section')
<!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="canvas-open">
    <i class="icon_menu"></i>
</div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="icon_close"></i>
    </div>
    <div class="search-icon  search-switch">
        <i class="icon_search"></i>
    </div>
    <div class="header-configure-area">
        <div class="language-option">
            <img src="{{  url('home/img/flag.jpg ')}}" alt="">
            <span>EN <i class="fa fa-angle-down"></i></span>
            <div class="flag-dropdown">
                <ul>
                    <li><a href="#">Zi</a></li>
                    <li><a href="#">Fr</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="bk-btn">Booking Now</a>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./rooms.html">Rooms</a></li>
            <li><a href="./about-us.html">About Us</a></li>
            <li><a href="./pages.html">Pages</a>
                <ul class="dropdown">
                    <li><a href="./room-details.html">Room Details</a></li>
                    <li><a href="#">Deluxe Room</a></li>
                    <li><a href="#">Family Room</a></li>
                    <li><a href="#">Premium Room</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">News</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-tripadvisor"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> (12) 345 67890</li>
        <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
    </ul>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (12) 345 67890</li>
                        <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="#" class="bk-btn">Booking Now</a>
                        <div class="language-option">
                            <img src="{{  url('home/img/flag.jpg ')}}" alt="">
                            <span>EN <i class="fa fa-angle-down"></i></span>
                            <div class="flag-dropdown">
                                <ul>
                                    <li><a href="#">Zi</a></li>
                                    <li><a href="#">Fr</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="{{  url('home/img/logo.png ')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
                        <nav class="mainmenu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./rooms.html">Rooms</a></li>
                                <li><a href="./about-us.html">About Us</a></li>
                                <li><a href="./pages.html">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./room-details.html">Room Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="#">Family Room</a></li>
                                        <li><a href="#">Premium Room</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">News</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>

                            <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Farms">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- filter Section Begin -->
<div class="col-md-12">
    <form action="{{url('home.index')}}" method="GET">
    <div class="card">
        <div class="card-header">
            <h4>Farms
                <button type="submit" class="btn btn-primary btn-sm">Filter</button>
            </h4>
        </div>
        <div class="card-body">
            @foreach ($farms as $farm)
            @php
                $checked = [];
                if(isset($_GET['filterbrand']))
                {
                    $checked = $_GET['filterbrand'];
                }
            @endphp
            <div class="mb-1">
                <input type="checkbox" name="filterbrand[]" value="{{$farm->id}}"
                @if(in_array($farm->id,$checked)) checked  @endif
                />
                {{$farm->price}}
            </div>
            @endforeach

        </div>
    </div>
</form>
</div>
<br>
<!-- filter Section End -->

<section class="hero-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>Sona A Luxury Hotel</h1>
                    <p>Here are the best hotel booking sites, including recommendations for international
                        travel and for finding low-priced hotel rooms.</p>
                    <a href="#" class="primary-btn">Discover Now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Hotel</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">2 Adults</option>
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{  url('home/img/hero/hero-1.jpg ')}}"></div>
        <div class="hs-item set-bg" data-setbg="{{  url('home/img/hero/hero-2.jpg ')}}"></div>
        <div class="hs-item set-bg" data-setbg="{{  url('home/img/hero/hero-3.jpg ')}}"></div>
    </div>
</section>
<!-- Hero Section End -->

<br><br>
    <!-- Home Room Section Begin -->

    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    @foreach ($farms as $farm)
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item" style="background-image: url('{{ url('img/room/' . $farm->images->first()->image) }}')">
                            <div class="hr-text">
                                <h3>{{$farm->title}}</h3>
                                <h2>{{$farm->price }}<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Address</td>
                                            <td>{{$farm->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>{{$farm->num_guests}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>{{$farm->num_beds}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed Room:</td>
                                            <td>{{$farm->num_bedrooms}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Description</td>
                                            <td>{{$farm->description}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('post.view', ['id' => $farm->id]) }}" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<br><br>
    <!-- Home Room Section End -->
@endsection

@section('script')
  <!-- Js Plugins -->
  <script src="{{ url('home/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('home/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ url('home/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ url('home/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{ url('home/js/jquery-ui.min.js')}}"></script>
  <script src="{{ url('home/js/jquery.slicknav.js')}}"></script>
  <script src="{{ url('home/js/owl.carousel.min.js')}}"></script>
  <script src="{{ url('home/js/main.js')}}"></script>
@endsection
