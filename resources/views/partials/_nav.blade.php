 
  <!--Default Navbar-->

  
  <nav class="navbar navbar-default navbar-fixed-top" style="padding-right:30px;padding-left:30px;">
  <div class="row">
 <div class="col-md-5">
  <img src="images/slide/logo.png" alt="Intelligence Service">
 </div>
  <div class="col-md-6 col-md-offset-1">

  </div>
 </div> 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="{{ url('/welcome') }}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('welcome') ? "active" : "" }}"><a href="{{ url('/welcome') }}">Home</a></li>
        <li class="{{Request::is('about') ? "active" : "" }}"><a href="{{ url('/about') }}">About</a></li>
        <li class="{{Request::is('contact') ? "active" : "" }}"><a href="{{ url('/contact') }}">Contact</a></li>
                  
            
          </ul>
        </li>
      </ul>
 
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  