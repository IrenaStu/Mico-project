<?php


function displaySubscriptionFormWithLogo() {
    echo '
        <div class="info_top">
            <div class="info_logo">
                <a href="">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="info_form">
                <form action="subscribe.php" method="POST">
                    <input name="email" type="email" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div> ';
}  


function adress() {
    echo '<h5>Address</h5><br>';

    $adressLinks = [ 
        ['link' => '#', 'linkStyle' => 'fa fa-map-marker" aria-hidden="true', 'linkName' => 'Location'],
        ['link' => '#', 'linkStyle' => 'fa fa-phone" aria-hidden="true', 'linkName' => 'Call +01 1234567890'],
        ['link' => '#', 'linkStyle' => 'fa fa-envelope', 'linkName' => 'demo@gmail.com'],
    ];

    foreach ($adressLinks as $adressli) {
        echo '<div class="info_contact">
                <a href="' . $adressli['link'] . '">
                    <i class="' . $adressli['linkStyle'] . '"></i>
                    <span>' . $adressli['linkName'] . '</span>
                </a>
              </div>';
    }
}

 function  socialLinks() {
    $socialIcons = [ 
        ['link' => '#', 'linkStyle' => 'fa fa-facebook" aria-hidden="true', ],
        ['link' => '#', 'linkStyle' => 'fa fa-twitter" aria-hidden="true"',],
        ['link' => '#', 'linkStyle' => 'fa fa-linkedin aria-hidden="true',],
        ['link' => '#', 'linkStyle' => 'fa fa-instagram" aria-hidden="true',],
    ]; 
      
    foreach ($socialIcons as $icon) {
      echo '
                <a href="' . $icon  ['link'] . '">
                <i class="' . $icon ['linkStyle'] . '"></i>
                </a>
        ';
    }

 }

 function usfulLink() {
    echo '<h5>Usful link</h5><br>';
    $menuLinks = [ 
        ['link' => 'index.php', 'Name' => 'Home'],
        ['link' => 'about.php', 'Name' => 'About'],
        ['link' => 'treatment.php', 'Name' => 'Treatment'],
        ['link' => 'doctor.php', 'Name' => 'Doctors'],
        ['link' => 'Testimonial.php', 'Name' => 'Testimonial'],
        ['link' => 'contact.php', 'Name' => 'Contact us'],
    ]; 

    foreach ($menuLinks as $index => $menuLink) {
        if ($index == 0) {
            echo '<div class="info_links_menu">
                    <a class="active" href="'.$menuLink['link'].'">
                        '.$menuLink['Name'].'
                    </a> 
                  </div>';
        } else {
            echo '<div class="info_links_menu"> 
                    <a href="'.$menuLink['link'].'">
                        '.$menuLink['Name'].'
                    </a> 
                  </div>';
        }
    }
}

function distribution() {
  
    $latestPosts = [
      [
        'title' => 'LATEST POSTS',
        'img1' => 'images/post1.jpg',
        'img1Name' => 'Normal distribution',
        'img2' => 'images/post2.jpg',
        'img2Name' => 'Normal distribution',
      ],
      [
        'title' => 'News',
        'img1' => 'images/post3.jpg',
        'img1Name' => 'Normal distribution',
        'img2' => 'images/post4.png',
        'img2Name' => 'Normal distribution',
      ],
    ];
    
    foreach ($latestPosts as  $post) {
      echo ' <div class="col-md-6 col-lg-3">
      <div class="info_post">
        <h5>' . $post['title'] . '</h5>
        <div class="post_box">
          <div class="img-box">
            <img src="' . $post['img1'] . '" alt="">
          </div>
          <p>' . $post['img1Name'] . '</p>
        </div>
        <div class="post_box">
          <div class="img-box">
            <img src="' . $post['img2'] . '" alt="">
          </div>
          <p>' . $post['img2Name'] . '</p>
        </div>
        </div>
        </div> ';
    }
  }
  function footercontent() {
    $contentitems = [
       'year' => 'displayYear',
       'text1'=> 'All Rights Reserved By',
       'link' => 'https://html.design/',
       'text2'=> 'Free Html Templates',
    ];
      
    for ($i = 0; $i < 1; $i++) {
       echo '  <footer class="footer_section">
       <div class="container">
         <p>
           &copy; <span id="'. $contentitems['year'] .'"></span> '. $contentitems['text1'] .'
           <a href="'. $contentitems['link'] .'">'. $contentitems['text2'] .'</a>
         </p>
       </div>
     </footer> ';
    }
}

function displayFooter() {
    echo '<section class="info_section ">
        <div class="container">';
    
    echo displaySubscriptionFormWithLogo();
    
    echo '<div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-3">';
    echo adress();
    echo '<div class="social_box">';
    echo sociallinks();
    echo '</div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_links">';
    echo usfulLink();
    echo '</div>
                    </div>';
    
    echo distribution();
    
    echo '</div>
            </div>
        </div>
    </section>';

    echo footercontent();
}





  

                


?>
