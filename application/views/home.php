<!doctype html>
<html lang="en">
<head>
  <?php include("application/templates/header.php"); 
  include("assets/js/JS.js");
    // include("applications/templates/footer.php");?>
  <meta name="Shirt Buildr, built by screenprinters for screenprinters" content="">
  <meta name="Coding Dojo Bootcamp June 24th 2013" content="Screenprinting layout and design web app">
<title>Shirt Buildr - The Design Tool for Screenprinters, by Screenprinters</title>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top plaid">
      <div class="container">
        <a class="navbar-brand" href="#">shirt buildr</a>
        <div class="nav-collapse collapse">
          <!--register modal link-->
          <a href="#register" role="button" data-toggle="modal" class="pull-right">or Register</a>
          <!--login boxes-->
          <?php
              // check if there are errors for login
              if($login_errors)
              {
                echo    "<div class='alert alert-danger span3'>
                            ". $login_errors ."
                        </div>";
              } 

              // check if there are errors for registration
              if(isset($register_errors) && $register_errors)
              {
                // displays registration errors
                echo    "<div class='alert alert-danger span3'>
                            ". $register_errors ."
                        </div>";
              }
              if(isset($register_success) && $register_success)
              {
                // echoes success message once the user has successfully registered
                echo    "<div class='alert alert-success span3'>
                            ". $register_success ."
                        </div>";
              }
            ?>
            <form action="/user/process_login" method="post" class="pull-right">
                <input type="hidden" name="action" value="login" />
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" value="Login" class="btn btn-primary btn-large"/>Login</button>
              </form>
        </div>
      </div>
    </div>  
  <!-- Registration Modal -->
  <div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header plaid">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title">Create an Account</h1>
        </div>
        <div class="modal-body">
              <form action="/user/process_register" method="post">
                <input type="hidden" name="action" value="register"/>
                <label for="first_name">First Name:  </label>
                <input type="text" name="first_name" placeholder="First Name"/><br />
                <div class="clear"></div>
                <label for="last_name">Last Name:  </label>
                <input type="text" name="last_name" placeholder="Last Name"/><br />
                <div class="clear"></div>
                <label for="email">Email:  </label>
                <input type="text" name="email" placeholder="Email address"/><br />
                <div class="clear"></div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password"/><br />
                <div class="clear"></div>
                <label for="confirm_password">Confirm Password:  </label>
                <input type="password" name="confirm_password" placeholder="Confirm Password"/><br />
                <div class="clear"></div>
        </div>
        <div class="modal-footer plaid">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary"value="Register"/>Register</button></form>
          </div>
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- / End Registration modal -->      
  <div class="main_banner">
    <div class="container">
      <img src="../assets/img/dude.png" alt="T-shirt">
      <div class="jumbotron plaid">
            <h1>Seamless, Affordable Corporate Screenprinting</h1>
            <p><a class="btn btn-primary btn-large right">Learn more</a></p>
        </div>
    </div>  
  </div>
  <div class="middle_banner">
    <div class="container">
      <!-- <div class="container"> -->
        <div class="row">
          <div class="col-lg-4 plaid">
            <h2>Simple Ordering</h2>
            <p>Just choose your garment, upload your logo with our design tool, and order as needed.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
          </div>
          <div class="col-lg-4 plaid">
            <h2>2-3 Day Turnaround</h2>
            <p>World class equipment allows us to delivery quality garments at industry leading turnaround times.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
         </div>
          <div class="col-lg-4 plaid">
            <h2>Free Onsite Visits and Delivery</h2>
            <p>Office visits to touch and feel the garments before you order. Free delivery upon order completion.</p>
            <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
          </div>
        </div>
    </div>
  </div> 
    <div class="bottom_banner">
    <div class="container">
       <!-- Carousel
      ================================================== -->
      <section id="carousel ">
        <div class="bs-docs-example">
          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item screen active">
                <div class="col-lg-4 plaid">
                  <h2>Simple Interface</h2>
                  <p>Simplicity should lead business apps.  Shirt Buildr has a Dropdead simple interface that does one thing and does it well.</p>
                  <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
                </div>
              </div>
              <div class="item screen1">
                <div class="col-lg-4 plaid">
                  <h2>Mobile Shirt Buildr</h2>
                  <p>Design, add, and edit garment designs on the go. Designed with Screenprinting businesses in mind.</p>
                  <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
                </div>
              </div>
              <div class="item screen2">
                <div class="col-lg-4 plaid">
                  <h2>Cloud Based</h2>
                  <p>Manage all your orders accross your devices, no apps to download.  And since Shirt Buildr exists in the cloud, all orders are available all the time.</p>
                  <p><a class="btn btn-primary" class="right" href="#">View details</a></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
          </div>
        </div>
    </div>  
  </div> 
  <footer class="plaid">
    <p class="center">Shirt Buildr 2013</p>
  </footer>
</body>
</html>