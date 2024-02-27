<?php


// function for first slider section //
function sliderSection() {

    $sliders = [
        'title' => ' Mico ',
        'title-span' => ' Hospital ',
        'body' => ' when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to ',
        'button' => 'Contact Us',
        'image-slider' => ' images/slider-img.jpg',
    ];

    for ($i = 0; $i < 3; $i++) {
       
        echo ' <div class="carousel-item' . ($i === 0 ? ' active' : '') . '">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                  ' . $sliders['title'] . ' <br>
                  <span>
                  ' . $sliders['title-span'] . '
                  </span>
                </h1>
                <p>
                ' . $sliders['body'] . '
                </p>
                <a href="">
                ' . $sliders['button'] . '
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="' . $sliders['image-slider'] . '" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> ' ;
     
    }
}
//   end of first slider //

// <!--  treatment section -->
  
function hospitalTreatment() {
     
    $treatments = [
       [
        'image' => "images/t1.png",
        'title' => "Nephrologist Care",
        'body' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => "#",
        'link-name' => "Read More",
       ],
       [
        'image' => "images/t2.png",
        'title' => "Eye Care",
        'body' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => "#",
        'link-name' => "Read More",
       ],
       [
        'image' => "images/t3.png",
        'title' => "Pediatrician Clinic",
        'body' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => "#",
        'link-name' => "Read More",
       ],
       [
        'image' => "images/t4.png",
        'title' => "Parental Care",
        'body' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => "#",
        'link-name' => "Read More",
       ], 
    ];
     
    foreach ($treatments as $treatment) {
        echo '  <div class="col-md-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="'.$treatment['image'].'" alt="">
          </div>
          <div class="detail-box">
            <h4>
            '.$treatment['title'].'
            </h4>
            <p>
            '.$treatment['body'].'
            </p>
            <a href="'.$treatment['link'].'">
            '.$treatment['link-name'].'
            </a>
          </div>
        </div>
      </div> ';
    }
}
// <!-- end treatment section -->

// <!-- team section -->
function ourDoctors() {
     
    $doctors = [
        [
            'image' => 'images/team1.jpg',
            'name' => 'Hennry',
            'title' => 'MBBS',
            'link1' => '#',
            'link2' => '#',
            'link3' => '#',
            'link4' => '#',
            'facebook' => 'fa fa-facebook" aria-hidden="true',
            'tweeter' => 'fa fa-twitter" aria-hidden="true',
            'lindelin' => 'fa fa-linkedin" aria-hidden="true',
            'instagram' => 'fa fa-instagram" aria-hidden="true',
        ],
        [
            'image' => 'images/team2.jpg',
            'name' => 'Jenni',
            'title' => 'MBBS',
            'link1' => '#',
            'link2' => '#',
            'link3' => '#',
            'link4' => '#',
            'facebook' => 'fa fa-facebook" aria-hidden="true',
            'tweeter' => 'fa fa-twitter" aria-hidden="true',
            'lindelin' => 'fa fa-linkedin" aria-hidden="true',
            'instagram' => 'fa fa-instagram" aria-hidden="true',
        ],
        [
            'image' => 'images/team3.jpg',
            'name' => 'Morco',
            'title' => 'MBBS',
            'link1' => '#',
            'link2' => '#',
            'link3' => '#',
            'link4' => '#',
            'facebook' => 'fa fa-facebook" aria-hidden="true',
            'tweeter' => 'fa fa-twitter" aria-hidden="true',
            'lindelin' => 'fa fa-linkedin" aria-hidden="true',
            'instagram' => 'fa fa-instagram" aria-hidden="true',
        ],
    ];

    foreach ($doctors as $doctor)  {
        echo '<div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="' . $doctor['image'] . '" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>' . $doctor['name'] . '</h5>
                        <h6>' . $doctor['title'] . '</h6>
                        <div class="social_box">
                            <a href="' . $doctor['link1'] . '">
                                <i class="' . $doctor['facebook'] . '"></i>
                            </a>
                            <a href="' . $doctor['link2'] . '">
                                <i class="' . $doctor['tweeter'] . '"></i>
                            </a>
                            <a href="' . $doctor['link3'] . '">
                                <i class="' . $doctor['lindelin'] . '"></i>
                            </a>
                            <a href="' . $doctor['link4'] . '">
                                <i class="' . $doctor['instagram'] . '"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>';
    }
}





?>
