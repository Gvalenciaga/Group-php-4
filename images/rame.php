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