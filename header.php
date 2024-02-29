
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
        'call_link' => 'tel:+12345678990',
        'email' => 'demo@gmail.com',
        'email_link' => 'mailto:demo@gmail.com',
        'location' => 'https://www.google.com/maps/place/Mico+Hospital/@19.989798,73.7352341,17z/data=!3m1!4b1!4m6!3m5!1s0x3bddec8145a77473:0xa4a7e9777c699000!8m2!3d19.989798!4d73.737809!16s%2Fg%2F1xg5r3xz?entry=ttu target="_blank" rel="noopener noreferrer"' ,
    ];
   
    echo '<header class="header_section">
    <div class="header_top">
      <div class="container">
        <div class="contact_nav">
          <a href="' . $infos['call_link'].'">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
            Call: ' . $infos['call'].'
            </span>
          </a>
          <a href="' . $infos['email_link'].'">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
            Email: ' . $infos['email'].'
            </span>
          </a>
          <a href="'. $infos['location'].'">
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


