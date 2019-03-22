@extends('main')

@section('title','|Home')

@section('content')
  
  <!--slide show-->
  
  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Carousel indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>

        </ol>   

        <!-- Wrapper for carousel items -->

        <div class="carousel-inner">

            <div class="item active">

                <img src="images/slide/mis1.png" alt="First Slide" class="center-block">

            </div>

            <div class="item">

                <img src="images/slide/mis2.jpg" alt="Second Slide" class="center-block">

            </div>

            <div class="item">

                <img src="images/slide/mis3.jpg" alt="Third Slide" class="center-block">

            </div>
              
              <div class="item">

                <img src="images/slide/mis4.jpg" alt="fourth Slide" class="center-block">

            </div>
              
              <div class="item">

                <img src="images/slide/mis5.jpg" alt="fifth Slide" class="center-block">

            </div>

        </div>

        <!-- Carousel controls -->

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>

        </a>

        <a class="carousel-control right" href="#myCarousel" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>

        </a>

    </div>


  
<!--This is a first div-->

<div class="container">
    <div class="row" style="padding-top:20px">
        <div class="col-md-12">
         <div class="jumbotron">
        <div class="row">
            <div class="col-md-6">
                
                <h1>Welcome!</h1>
                <p>Thank you for visiting our website....</p>
                <p><a class="btn btn-primary btn-lg" href="{{url('/about')}}" role="button">Learn more</a></p>
             
            </div>
                <div class="col-md-5 col-md-offset-1">
                    <img src="images/slide/mis33.jpg">
                    <img src="images/slide/mis34.jpg">
                </div>
        </div>
         </div>
           
        </div>
    </div>
        <div>
        <hr>
            <h1 style="font-size:50px;font-weight: bold;color:#228B22">Our Services</h1>
        </div>
        
        <div class="row">
            <div class="col-md-12">
            
            <div class=row>
            <div class="col-md-4">
                <img src="images/slide/icon1.png">
                <h2>Customer Software Development</h2>
                <p>We offer full-cycle development
                services for web, mobile and desktop that have already brought
                value to Walmart, eBay and Viber...</p>
            </div>
           <div class="col-md-4">
            <img src="images/slide/icon2.png">
                <h2>Mobile App Development</h2>
                <p>75 experts, 300+ projects.
                We develop iOS, Android, WP, Cordova and Xamarin apps, mobile back-ends,
                provide integration and maintenance...</p>
           </div>
            <div class="col-md-4">
            <img src="images/slide/icon5.png">
                <h2>CRM Consulting</h2>
                <p>Industry-focused consulting, customizing and loyalty
                solutions for B2B and B2C enterprises, featuring a
                retail bank CRM with 7 mln clients...</p>
           </div>

            </div>
                 <div class=row>
            <div class="col-md-4">
                <img src="images/slide/icon3.png">
                <h2>Web Portals</h2>
                <p>Design, development, integration, security audit, maintenance,
                and other services to drive e-cooperation with customers, partners,
                vendors, and community members...</p>
            </div>
           <div class="col-md-4">
            <img src="images/slide/icon4.png">
                <h2>SharePoints</h2>
                <p>We create corporate web portals and
                intranets to help established enterprises benefit from
                collaboration and document management...</p>
           </div>
            <div class="col-md-4">
            <img src="images/slide/icon6.png">
                <h2>Bussiness Intelligence</h2>
                <p>Bringing in Data Science and BI expertise since past,
                we cover our clients’ needs with data warehouses,
                OLAP cubes, reports and dashboards...</p>
           </div>

            </div>
                
                <hr>
                              
            </div>
           
        </div>
        
</div>

 @endsection 