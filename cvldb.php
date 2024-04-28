<?php

function slider () {
    $sliders = [
        [
            'h1' => 'Mico',
            'span' => 'Hospital',
            'p' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
            'img' => 'images/slider-img.jpg',
        ],
        [
            'h1' => 'Trico',
            'span' => 'Gospital',
            'p' => 'We will sell your heart after surgery and tell your family you died accidently',
            'img' => 'images/gospital.png',
        ],
        [
            'h1' => 'Morgi',
            'span' => '100%',
            'p' => 'YOU WILL DIE 100%',
            'img' => 'images/sikvtili.png',
        ],
    ];

    foreach ($sliders as $slider)
                echo '<div class="col-md-6">
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
              </div>';
}





?>
