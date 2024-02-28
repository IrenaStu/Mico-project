
<?php
$menuItems = array(
    "Home" => "index.php",
    "About" => "about.html",
    "Treatment" => "treatment.html",
    "Doctors" => "doctor.html",
    "Testimonial" => "testimonial.html",
    "Contact Us" => "contact.html",
);

$currentPage = "Home";

function generateNavbar($menuItems, $currentPage) {
    echo '<ul class="navbar-nav">';
    foreach ($menuItems as $m => $link) {
        echo '<li class="nav-item';
        if ($m === $currentPage) {
            echo ' active' ;
        }
        echo '">';
        echo '<a class="nav-link" href="' . $link . '">' . $m;
        
        
        if ($m === $currentPage) {
            echo '<span class="sr-only">(current)</span>';
        }
        
        echo '</a></li>';
    }
    echo '</ul>';
};


function generateHeader(){

    $infos = [
        'call' => '+01 123455678990',
        'email' => 'demo@gmail.com',
        'location' => 'Location',
    ];
   
    echo '<header class="header_section">
    <div class="header_top">
      <div class="container">
        <div class="contact_nav">
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
            Call: ' . $infos['call'].'
            </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
            Email: ' . $infos['email'].'
            </span>
          </a>
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
              Location
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
          </a>


          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
            generateNavbar($GLOBALS['menuItems'], $GLOBALS['currentPage']);
           echo '</div>
            <div class="quote_btn-container">
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Login
                </span>
              </a>
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Sign Up
                </span>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>';
};


