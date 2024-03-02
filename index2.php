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

function sectionContent(){
   
  echo '  <section class="slider_section ">
  <div class="dot_design">
    <img src="images/dots.png" alt="">
  </div>
  <div id="customCarousel1" class="carousel slide" data-ride="carousel"> ';
     echo sliderSection();
     echo ' <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt="">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt="">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</section> ';
}




//   end of first slider //


// <!-- about section -->

function aboutSection() {
  
  $about = [
    "img" => "images/about-img.jpg",
    "title" => "About",
    "titleSpan" => "Hospital",
    "body" => "has a more-or-less pirveliof letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less pirveliof letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors",
    "link" => "#",
    "linkName" => "Read More",
  ];

  for ($i=0; $i<1; $i++){
    echo '   <div class="container  ">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="'. $about['img']  .'" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
            '. $about['title']  .' <span>'. $about['titleSpan']  .'l</span>
            </h2>
          </div>
          <p>
          '. $about['body']  .'
          </p>
          <a href="'. $about['link']  .' ">
          '. $about['linkName']  .'
          </a>
        </div>
      </div>
    </div>
  </div>  ';
  }
}
// <!-- end about section -->



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

function sectionTreatment() {
  echo '   <section class="treatment_section layout_padding">
  <div class="side_img">
    <img src="images/treatment-side-img.jpg" alt="">
  </div>
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Hospital <span>Treatment</span>
      </h2>
    </div>
    <div class="row"> ';
      echo hospitalTreatment(); 
        
     echo ' </div>
    </div>
  </div>
</section> ';
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
 
function doctorsTeam() {

  echo '  <section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our <span>Doctors</span>
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="owl-carousel team_carousel"> ';

   echo ourDoctors(); 

    echo ' </div>
        </div>
      </div>
    </section> ';
}

// <!-- end team section -->

//  <!-- client section -->
function testimonialVari() {
  $boxs = [
    [
      'name' => 'Morijorch',
      'title' => 'Default model text',
      'description' => 'Editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various'
    ],
    [
      'name' => 'Rochak',
      'title' => 'Default model text',
      'description' => 'Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.'
    ],
    [
      'name' => 'Brad Johns',
      'title' => 'Default model text',
      'description' => 'Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy. Various'
    ],
  ];
  
  for ($n = 0; $n < 3; $n++) {
    echo '<div class="carousel-item' . ($n === 0 ? ' active' : '') . '">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>' . $boxs[$n]['name'] . '</h5>
                  <h6>' . $boxs[$n]['title'] . '</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>' . $boxs[$n]['description'] . '</p>
            </div>
          </div>';
  }
}  

function sectionTestimonial() {
  echo '  <section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        <span>Testimonial</span>
      </h2>
    </div>
  </div>
  <div class="container px-0">
    <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
      <div class="carousel-inner"> ';
          testimonialVari() ; 
    echo '  </div> 
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>';
}

// <!-- client section -->       
                            


function mainAppointment(){

  
  function docappointmentInputs(){
    $docopts = [
      ["drname" => "Dr. Morco"],
      ["drname" => "Dr. Hennry"],
      ["drname" => "Dr. Jenni"],
    ];
    
    foreach($docopts as $docopt){
      echo '<option value="'.$docopt["drname"].'">'.$docopt["drname"].'</option>';
    }
  }
  
  function depappointmentInputs(){
    $depopts = [
      ["dpname" => "First"],
      ["dpname" => "Second"],
      ["dpname" => "Third"],
    ];
    
    foreach($depopts as $depopt){
      echo '<option value="'.$depopt["dpname"].'">'.$depopt["dpname"].'</option>';
    }
  }
  
  function optInputs() {
    $inpus = [
      [
        'for' => 'inputDoctorName',
        'text' => "Doctor's Name",
        'name' => 'inputDoctorName',
        'id' => 'inputDoctorName',
        'func' => 'docappointmentInputs',
      ],
      [
        'for' => 'inputDepartmentName',
        'text' => "Department's Name",
        'name' => 'inputDepartmentName',
        'id' => 'inputDepartmentName',
        'func' => 'depappointmentInputs',
      ],
    ];
  
    foreach ($inpus as $inpu) {
      echo '<div class="form-group col-lg-4">
      <label for="' . $inpu['for'] . '">' . $inpu['text'] . '</label>
      <select name="' . $inpu['name'] . '" class="form-control wide" id="' . $inpu['id'] . '" required>';
      
      $functionName = $inpu['func'];
      $functionName(); 
  
      echo '</select></div>';
    }
  };
  function ordInputs(){
    $ins = [
      [
        'for' => 'inputPatientName',
        'text' => 'Patient Name',
        'type' => 'text',
        'name' => 'inputPatientName',
        'id' => 'inputPatientName',
        'placeholder' => 'Patient Name',
      ],
      [
        'for' => 'inputPhone',
        'text' => "Phone Number",
        'type' => 'number',
        'name' => 'inputPhone',
        'id' => 'inputPhone',
        'placeholder' => 'XXXXXXXXXX',
      ],
      [
        'for' => 'inputSymptoms',
        'text' => "Symptoms",
        'type' => 'text',
        'name' => 'inputSymptoms',
        'id' => 'inputSymptoms',
        'placeholder' => 'Symptoms',
      ],
      
    ];
      foreach($ins as $index => $in){
        echo '<div class="form-group col-lg-4">
        <label for="' . $in['for'] . '">' . $in['text'] . '</label>
        <input type="' . $in['type'] . '" class="form-control" name="' . $in['name'] . '" id="' . $in['id'] . '" placeholder="' . $in['placeholder'] . '" required>
        <!-- Additional content for the third div -->
      </div>';
      if ($index == 0){
        optInputs();
      }
      }
    
  }
  function dataInputs(){
    $datainps =[
      [
        'for' => 'inputDate',
        'text' => "Choose Date",
        'type' => 'text',
        'name' => 'inputDate',
        'id' => 'inputDate',
        'format' => 'mm-dd-yyyy',
  
      ],
  
    ];
    foreach($datainps as $datainp){
      echo '<div class="form-group col-lg-4">
      <label for="' . $datainp['for'] . '">Choose Date </label>
      <div class="input-group date" name="' . $datainp['name'] . '" id="' . $datainp['id'] . '" data-date-format="' . $datainp['format'] . '" required>
        <input type="' . $datainp['type'] . '" class="form-control" name="' . $datainp['name'] . '" id="' . $datainp['id'] . '"  readonly required>
        <span class="input-group-addon date_icon">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </span>
      </div>
    </div>';
    };
  };
  
  
  echo '<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">
        <form action = "page.php" method = "POST" >
          <h4>
            BOOK <span>APPOINTMENT</span>
          </h4>
          <div class="form-row ">';
            
          ordInputs();
          dataInputs();
          
          
          echo '</div>
          <div class="btn-box">
            <button type="submit" class="btn ">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>';
}




// Get IN TOUCH SECTION

  
  function getintouchInputs(){
    $title = 'Get In Touch';
    $linkg = 'page-two.php';
    $btntext = 'SEND';
    $imgsrc = 'images/contact-img.jpg';
    $inp =[
      ['id' => 'fullname',
      'name' => 'fullname',
      'type' => 'text',
      'placeholder' => 'Full Name',
      ],
      ['id' => 'email',
      'name' => 'email',
      'type' => 'email',
      'placeholder' => 'Email',
      ],
      ['id' => 'phonenumber',
      'name' => 'phonenumber',
      'type' => 'number',
      'placeholder' => 'Phone Number',
      ],
      ['id' => 'message',
      'name' => 'message',
      'type' => 'text',
      'placeholder' => 'Message',
      ],
    ];
    echo '<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
        '.$title.'
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
    <form action = "'.$linkg.'" method = "POST" >';

    for ($v = 0; $v < 4; $v++){
          
      
      if ($v < 3){
        echo '
        <div>
        <input id = "'.$inp[$v]['id'].'"  name = "'.$inp[$v]['name'].'" type="'.$inp[$v]['type'].'" placeholder="'.$inp[$v]['placeholder'].'" required >
      </div>';
         ;
      }else {
       echo  '
       <div>
        <input id = "'.$inp[$v]['id'].'"  name = "'.$inp[$v]['name'].'" type="'.$inp[$v]['type'].'" class="message-box" placeholder="'.$inp[$v]['placeholder'].'" required >
      </div>';
      };
     

    };
    echo '<div class="btn_box">
    <button>
    '.$btntext.'
    </button>
  </div>
</form>
</div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="'.$imgsrc.'" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>';
  };
  // END GET IN TOUCH SECTION

?>

