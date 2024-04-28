<?php

function slider () {
    $sliders = [
        [   
            'class'=>'carousel-item active',
            'h1' => 'Gvalos',
            'span' => 'Hospital',
            'p' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
            'img' => 'images/slider-img.jpg',
        ],
        [
            'class'=>'carousel-item',
            'h1' => 'Trico',
            'span' => 'Gospital',
            'p' => 'We will sell your heart after surgery and tell your family you died accidently',
            'img' => 'images/gospital.png',
        ],
        [
            'class'=>'carousel-item',
            'h1' => 'Morgi',
            'span' => '100%',
            'p' => 'YOU WILL DIE 100%',
            'img' => 'images/sikvtili.png',
        ],
    ];

    foreach ($sliders as $slider)
                echo '<div class="'. $slider['class'] .'">
                <div class="container ">
                  <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                  <div class="play_btn">
                    <button>
                      <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                  </div>
                  <h1>' . $slider['h1'] .
                     '<br>
                    <span>'
                      . $slider['span'] .
                    '</span>
                  </h1>
                  <p>'
                    . $slider['p'] .
                  '</p>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="'. $slider['img']   .'" alt="">
                </div>
              </div>
              </div>
              </div>
              </div>';
};

function treatment() {
    $treatments = [
        [
            'img' => 'images/t1.png',
            'h4' => 'Nephrologist Care',
            'p' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
        ],
        [
            'img' => 'images/t2.png',
            'h4' => 'Eye Care',
            'p' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
        ],
        [
            'img' => 'images/t3.png',
            'h4' => 'Pediatrician Clinic',
            'p' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
        ],
        [
            'img' => 'images/t4.png',
            'h4' => 'Parental Care',
            'p' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
        ],
    ];

    foreach ($treatments as $treatment) {
        echo '<div class="col-md-6 col-lg-3">
        <div class="box ">
        <div class="img-box">
              <img src="'. $treatment['img'] .'" alt="">
            </div>
            <div class="detail-box">
              <h4>
                '. $treatment['h4'] .'
              </h4>
              <p>
                '. $treatment['p'] .'
              </p>
              <a href="">
                Read More
              </a>
            </div>
            </div>
            </div>
        ';
    };
};

function doctors() {
    $doctors = [
        [
            'img' => 'images/team1.jpg',
            'h5' => 'Hennry',
        ],
        [
            'img' => 'images/team2.jpg',
            'h5' => 'Jenni',
        ],
        [
            'img' => 'images/team3.jpg',
            'h5' => 'Morco',
        ],
    ];

    foreach ($doctors as $doctor) {
        echo '<div class="item">
        <div class="box">
          <div class="img-box">
            <img src="'. $doctor['img'] .'" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              '. $doctor['h5'] .'
            </h5>
            <h6>
              MBBS
            </h6>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>';
    };
};

function testimonials() {
    $testimonials = [
        [
            'class' => 'carousel-item active',
            'h5' => 'Morijorch',
            'p' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
        ],
        [
            'class' => 'carousel-item',
            'h5' => 'Rochak',
            'p' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsu will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',
        ],
        [
            'class' => 'carousel-item',
            'h5' => 'Brad Johns',
            'p' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
        ],
    ];

    foreach ($testimonials as $testimonial) {
        echo '<div class="'. $testimonial['class'] .'">
        <div class="box">
          <div class="client_info">
            <div class="client_name">
              <h5>
                '. $testimonial['h5'] .'
              </h5>
              <h6>
                Default model text
              </h6>
            </div>
            <i class="fa fa-quote-left" aria-hidden="true"></i>
          </div>
          <p>
            '. $testimonial['p'] .'
          </p>
        </div>
      </div>';
    };
};
?>
