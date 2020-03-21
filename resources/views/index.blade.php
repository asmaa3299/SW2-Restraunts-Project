<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hunter House</title>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
    <!-- Header Section -->
        <section>
            <div class="col-12 header">
                <div class="row header-content justify-content-center">
                    <p class="col-9"><i class="fas fa-location-arrow"></i> Nozha 11 Mahmod Street in front of Shams Sporting Club
                        Cairo.<br><strong>Open everyday, 10:00 AM - 11:00 PM</strong></p>
                    <button class="col-4 btn"><a href="{{url('/reservation')}}">Reserve Now</a></button>
                </div> 
            </div>
        </section>
    
    <!-- About Us Section -->
        <section>
          <div class="container">
            <div class="row about-us justify-content-around">
                <div class="col-12 col-md-5 header-about">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="col-12 col-md-6 content">
                    <h2 style="text-align: center;
                    color: rgb(255, 115, 0); margin: 10px 0 10px 0 ">Our Story<h2>
                
                <center><div class="col-6 line"></div></center>

                    <div class="about-content justify-content-around">
                        <p>
                            A collaboration between chef Dinah Blackburn and interior designer Lee Rainwater, 
                            Hunter is where East Austin returns to the Old West. Styled like the saloons of yore, 
                            here you can sip cactus wine and enjoy the robust taste of farm-to-table American fare 
                            without the frills.
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </section>

    <!-- Slideshow Section -->
        <section row>
            <div class="col-12 container">
                <div class="row justify-content-center slideshow" id="slideshow">
                    <div class="col-12 col-md-6">
                        <h2 style="text-align: center;color: rgb(255, 115, 0); margin: 10px 0 10px 0 ">
                            Why our clients choose us?!
                        <h2>
                        <center><div class="col-10 line" style="margin-bottom: 30px;"></div></center>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-3 card" id="card1">
                        <img src="/img/art-blur-cappuccino-close-up-302899.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Our Beloved Coffee.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card2">
                        <img src="/img/blur-breakfast-close-up-dairy-product-376464.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Our Beloved Pan Cake Breakfast.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card3">
                        <img src="/img/chocolate-with-milted-chocolate-on-white-ceramic-plate-45202.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Our Beloved Brownise.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card4">
                        <img src="/img/cooked-seafoods-699953.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Our Special Seafood Soap.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card5">
                        <img src="/img/selective-focus-photography-of-pasta-with-tomato-and-basil-1279330.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">The Most Delicious Pasta.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card6">
                        <img src="/img/top-view-of-food-1640772.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Our Special Dinner.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card7">
                        <img src="/img/close-up-photo-of-a-cheese-burger-1633578.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">You Must Try Our Cheese Burger.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card8">
                        <img src="/img/steak-food-769289.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Steak!! Hurry Up To Enjoy your Meal.</h3>
                        </div>
                    </div>
                    <div class="col-3 card" id="card9">
                        <img src="/img/avocado-cooked-delicious-dish-262959.jpg" alt="" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <h3 class="card-text">Also! We've Cooked Afocado.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

<script src="/js/main.js"></script>
</body>
</html>