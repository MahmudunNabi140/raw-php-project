<?php
$db=new mysqli ('localhost','root','','limty');
$genaral=$db->query('select * from general_info')->fetch_assoc();
$slider=$db->query('select * from sliders order by id desc');
$icone=$db->query('select * from icone order by id desc');
$about_us=$db->query('select * from about_us order by id desc');
$service=$db->query('select * from service order by id desc');
$project=$db->query('select * from project order by id desc');
$tamplate=$db->query('select * from tamplate order by id desc');
$team=$db->query('select * from team order by id desc');
$pricing_plan=$db->query('select * from pricing_plan order by id desc');
$latest_news=$db->query('select * from latest_news order by id desc');
$testimonial=$db->query('select * from testimonial order by id desc');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from limty-html.netlify.app/limty/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 05:08:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="laralink" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Page Title -->
  <title>Limty - Multipurpose Business HTML Template</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owlCarousel.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="st-blue-color">
  <div id="st-preloader">
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
  </div>
  <div class="st-height-70"></div>
  <!-- Start header -->
  <?php include('header.php') ?>
<!-- End header -->
  <div class="st-content">
    <!-- Start Hero Slider -->
 
    <div class="st-hero-slide st-style2 st-flex" id="home">
      <div class="container">
          <?php while($d=$slider->fetch_assoc()){ ?>
        <div class="st-hero-text st-style1 st-color1">
          <h1 class="st-hero-title"><?php echo $d['title_1']?></h1>
          <div class="st-hero-subtitle">
           <?php echo $d['title_2']?>
          </div>
          <div class="st-btn-group st-style1">
            <a href="#" class="st-btn st-style1 st-color1">Learn More</a>
            <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1" class="st-btn st-style2 st-video-open"><i class="flaticon-multimedia"></i> Watch Video</a>
          </div>
        </div>
      </div>
      <div class="st-hero-img"><img src="assets/image/<?php echo $d['photo']?>" alt="demo"></div>
      <div class="st-circla-animation">
        <div class="st-circle st-circle-first"></div>
        <div class="st-circle st-circle-second"></div>
      </div>
      <?php  }?>
      <div class="st-wave-wrap">
        <div class="st-wave st-wave-first">
          <div class="st-wave-in" style="background-image: url(assets/img/light-img/shape1.png);"></div>
        </div>
        <div class="st-wave st-wave-second">
          <div class="st-wave-in" style="background-image: url(assets/img/light-img/shape1.png);"></div>
        </div>
      </div>
    </div>
    
    <!-- End Hero Slider -->

    <!-- Start Icon Box -->
    <section class="st-section-top">
      <div class="container">
        <div class="row">
        <?php $i=0; while($data=$icone->fetch_assoc()){ ?>
          <div class="col-lg-4">
          
            <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-iconbox-icon">
                <i class="flaticon-focus"></i>
              </div>
              <h3 class="st-iconbox-title"><?php echo $data['title'] ?></h3>
              <div class="st-iconbox-text">
              <?php echo $data['details'] ?>
              </div>
              
            </div>
          </div>
          <?php } ?>
         
        </div>
      </div>
    </section>
    <!-- End Icon Box -->

    <!-- Start About Section -->
    <div class="st-about-wrap st-section-top" id="about">
      <div class="container">
        <div class="row">
          <?php $i=0; while($data=$about_us->fetch_assoc()){ ?>
          <div class="col-lg-6">
            <div class="st-vertical-middle">
              <div class="st-vertical-middle-in">
                <div class="st-about-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="assets/image/<?php echo $data['photo']?>" alt="demo"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="st-section-heading st-style1">
              <h1 class="">About Us</h1>
              <br>
              <h1><?php echo $data['title']?></h1>
            </div>
            <div class="st-about-text">
              <p><?php echo $data['details']?></p>
              <ul class="tr-list">
                <li><?php echo $data['type_1']?></li>
                <li><?php echo $data['type_2']?></li>
                <li><?php echo $data['type_3']?></li>
                <li><?php echo $data['type_1']?></li>
              </ul>
              <a href="#" class="st-btn st-style1 st-size1 st-color2">Get More Info!</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <section class="st-service-section st-section-top" id="service">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Business Services</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>Business services are activities that combine or consolidate certain <br>enterprise-wide needed support services</p>
        </div>
      </div>
      <div class="st-owl-controler3-hover">
        <div class="container">
          <div class="st-service-carousel owl-carousel st-style2 st-owl-controler3">
            <?php $i=0; while($data=$service->fetch_assoc()){ ?>
            <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <a href="#" class="st-image"><img src="assets/image/<?php echo $data['photo']?>" alt="demo"></a>
              <div class="st-image-box-info">
                <h3 class="st-image-box-title"><a href="#"><?php echo $data['title']?></a></h3>
                <div class="st-image-box-text"><?php echo $data['details']?></div>
              </div>
            </div>

            
            <?php } ?>
          </div>
          
        </div>

      </div>
      <div class="st-service-background-shap">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="858px" height="924px">
          <path fill-rule="evenodd"  fill="rgb(249, 251, 255)" d="M664.747,103.039 C653.462,87.314 639.932,72.487 623.957,58.931 C548.874,-4.793 440.575,-17.454 354.139,28.436 C295.555,59.540 256.035,109.725 237.462,166.269 C210.450,248.522 169.585,324.882 114.434,391.411 C-3.108,533.202 -36.669,703.629 44.624,816.957 C149.756,963.519 407.069,959.014 619.349,806.896 C831.627,654.780 918.489,412.653 813.356,266.091 C804.112,253.203 793.682,241.497 782.210,230.960 C739.413,191.657 698.632,150.252 664.747,103.039 Z"/>
        </svg>
      </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Fun Fact Section -->
    <div class="st-funfact-wrap st-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-funfact-icon"><i class="flaticon-rate"></i></div>
              <h2 class="st-funfact-number st-counter">999</h2>
              <h3 class="st-funfact-title">Satisfied customers</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s">
              <div class="st-funfact-icon"><i class="flaticon-code"></i></div>
              <h2 class="st-funfact-number st-counter">185</h2>
              <h3 class="st-funfact-title">Built websites</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
              <div class="st-funfact-icon"><i class="flaticon-laptop"></i></div>
              <h2 class="st-funfact-number st-counter">100</h2>
              <h3 class="st-funfact-title">Experts Worker</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.35s">
              <div class="st-funfact-icon"><i class="flaticon-win"></i></div>
              <h2 class="st-funfact-number st-counter">200</h2>
              <h3 class="st-funfact-title">Experience Years</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Fun Fact Section -->

    <!-- Start Project Section -->
    <div class="st-project-wrap st-section st-gray-bg" id="portfolio">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Our Latest Project</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>This is a great place to tell people more about your services and peak <br>their interest. Last year our latest work album</p>
        </div>
      </div>
      <div class="container">
        <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery">
          <div class="st-grid-sizer"></div>
          <?php $i=0; while($data=$project->fetch_assoc()){ ?>
          <div class="st-isotop-item">
            <a href="#" class="st-single-project st-bg st-height1 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-src="assets/image/<?php echo $data['photo']?>">
              <div class="st-project-meta">
                <h3><?php echo $data['title']?></h3>
                <span><?php echo $data['details']?></span>
              </div>
            </a>
          </div><!-- .st-isotop-item -->
          <?php } ?>
        </div><!-- .isotop -->
      </div>
    </div>
    <!-- End Project Section -->

    <!-- Start Skill Section -->
    <section class="st-skill-wrap st-section-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="st-vertical-middle">
              <div class="st-vertical-middle-in wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-skill-img text-center">
                  <img src="assets/img/light-img/skill-img.png" alt="demo">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="st-section-heading st-style2 st-type2">
              <h2>Skills & Expertise</h2>
              <p>A skill is the ability to carry out a task with determined results often within a given amount of time. Skill usually requires certain environ stimuli and situations to assess more then enough.</p>
            </div>
            <div class="st-progressbar-wrap">
              <div class="st-single-progressbar">
                <div class="st-progressbar-meta">
                  <h3 class="st-progressbar-title">Web Development</h3>
                  <div class="st-progressbar-percentage">90%</div>
                </div>
                <div class="st-progressbar" data-progress-percentage="90">
                  <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s"></div>
                </div>
              </div><!-- .st-single-progressbar -->
              <div class="st-single-progressbar">
                <div class="st-progressbar-meta">
                  <h3 class="st-progressbar-title">Web Design</h3>
                  <div class="st-progressbar-percentage">95%</div>
                </div>
                <div class="st-progressbar" data-progress-percentage="95">
                  <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s"></div>
                </div>
              </div><!-- .st-single-progressbar -->
              <div class="st-single-progressbar">
                <div class="st-progressbar-meta">
                  <h3 class="st-progressbar-title">HTML / CSS</h3>
                  <div class="st-progressbar-percentage">85%</div>
                </div>
                <div class="st-progressbar" data-progress-percentage="85">
                  <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s"></div>
                </div>
              </div><!-- .st-single-progressbar -->
              <div class="st-single-progressbar">
                <div class="st-progressbar-meta">
                  <h3 class="st-progressbar-title">WordPress</h3>
                  <div class="st-progressbar-percentage">80%</div>
                </div>
                <div class="st-progressbar" data-progress-percentage="80">
                  <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s"></div>
                </div>
              </div><!-- .st-single-progressbar -->
              <div class="st-single-progressbar">
                <div class="st-progressbar-meta">
                  <h3 class="st-progressbar-title">Photoshop</h3>
                  <div class="st-progressbar-percentage">95%</div>
                </div>
                <div class="st-progressbar" data-progress-percentage="95">
                  <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s"></div>
                </div>
              </div><!-- .st-single-progressbar -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Skill Section -->

    <!-- Start Team Section -->
    <section class="st-team-wrap st-section" id="team">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Creative Team</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>Team members need to learn how to help one another. A team becomes more <br>than just a collection of people when a strong sense.</p>
        </div>
      </div>
      <div class="st-owl-controler3-hover">
        <div class="container">
          <div class="st-member-carousel owl-carousel st-style2 st-owl-controler3">
          <?php $i=0; while($data=$team->fetch_assoc()){ ?>
            <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-member-img">
                <img src="assets/image/<?php echo $data['photo']?>" alt="demo">
              </div>
              <div class="st-member-info">
                <h3 class="st-member-name"><?php echo $data['name']?></h3>
                <div class="st-member-designation"><?php echo $data['title']?></div>
                <ul class="st-member-social-btn st-flex st-mp0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <?php } ?>
            
            
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- Start CTA Section -->
    <section class="st-cta-wrap st-gray-bg">
      <div class="container">
        <div class="row">
            <?php while($d=$tamplate->fetch_assoc()){ ?>
          <div class="col-lg-7 offset-lg-1">
            <div class="st-cta text-center st-section">
              <h2 class="st-cta-title"><?php echo $d['title']?></h2>
              <div class="st-cta-text"><?php echo $d['details']?></div>
              <div class="st-cta-btn">
                <a href="#" class="st-btn st-style1 st-size1 st-color2">Get It Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="st-vertical-middle">
              <div class="st-vertical-middle-in st-flex">
                <div class="st-cta-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img src="assets/image/<?php echo $d['photo']?>" alt="demo">
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="hero-animation1">
        <div class="shap1"></div>
        <div class="shap2"></div>
        <div class="shap3"></div>
        <div class="shap4"></div>
        <div class="shap5"></div>
        <div class="shap6"></div>
      </div>
    </section>
    <!-- End CTA Section -->

    <!-- Start Pricing Plan -->
    <section class="st-pricing-wrap st-section" id="price">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Pricing Plan</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>Pricing strategy in which the selling price is determined by adding a specific <br>amount markup to a product's unit cost.</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php $i=0; while($data=$pricing_plan->fetch_assoc()){ ?>
          <div class="col-lg-4">
            <div class="st-price-card text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-price-card-img"><img src="assets/image/<?php echo $data['photo']?>" alt="demo"></div>
              <h3 class="st-price-card-title"><?php echo $data['title']?></h3>
              <div class="st-price">
                <h3><?php echo $data['price']?></h3>
                <span><?php echo $data['date']?></span>
              </div>
              <ul class="st-price-card-feature st-mp0">
                <li><?php echo $data['support']?></li>
                <li><?php echo $data['data_base']?></li>
                <li><?php echo $data['maintenance']?></li>
                <li><?php echo $data['traffic']?></li>
              </ul>
              <div class="st-price-card-btn">
                <a href="#" class="st-btn st-style1 st-size1 st-color3">Start The Plan</a>
              </div>
            </div>
          </div>
          <?php } ?>
          
          
        </div>
      </div>
    </section>
    <!-- End Pricing Plan -->
    
    <!-- Start Blog Section -->
    <section class="st-blog-wrap st-section st-gray-bg" id="blog">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Latest News</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>News websites and blogs are common sources for web feeds, but feeds are <br>also used to deliver structured</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <?php  while($da=$latest_news->fetch_assoc()){ ?>
          <div class="col-lg-4">
            <div class="st-blog st-style1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-zoom">
                <a href="#" class="st-blog-thumb st-bg st-zoom-in" data-src="assets/image/<?php echo $da['photo']?>"></a>
              </div>
              <div class="st-blog-info">
                <div class="st-blog-label">By <a href="#"><?php echo $da['add_by']?></a></div>
                <h2 class="st-blog-title"><a href="#"><?php echo $da['title']?></a></h2>
                <div class="st-blog-text"><?php echo $da['details']?></div>
                <div class="st-blog-meta">
                  <div class="st-blog-meta-left"><span class="st-posted-by"><?php echo $da['date']?></span></div>
                  <div class="st-blog-meta-right"><a href="#" class="st-blog-btn">Read More <i class="fas fa-chevron-right"></i></a></div>
                </div>
              </div>
            </div>
            
          </div>
          <?php } ?>
          
        </div>
      </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Testimonial Section -->
    <section class="st-testimonial-wrap st-section">
    <div class="st-section-heading st-style1 text-center">
                  <h1>Testimonials</h1>
                  <h3>What client says about us?</h3>
                </div>
      <div class="container">
        <div class="row">
            <?php  while($data=$testimonial->fetch_assoc()){ ?>
          <div class="col-lg-6">
            <div class="st-testimonial-right-img st-flex wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <img src="assets/image/<?php echo $data['photo']?>" alt="demo">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="st-vertical-middle">
              <div class="st-vertical-middle-in">
               
                <div class="st-testimonial-slider owl-carousel st-owl-controler4">
                  <div class="st-single-testimonial">
                    <div class="st-testimonial-quote st-flex"><i class="fas fa-quote-right"></i></div>
                    <div class="st-testimonial-text"><?php echo $data['details']?></div>
                    <div class="st-testimonial-meta">
                      <h3><?php echo $data['name']?></h3>
                      <p><?php echo $data['designation']?></p>
                    </div>
                  </div>
                  <div class="st-single-testimonial">
                    <div class="st-testimonial-quote st-flex"><i class="fas fa-quote-right"></i></div>
                    <div class="st-testimonial-text"><?php echo $data['details']?></div>
                    <div class="st-testimonial-meta">
                      <h3><?php echo $data['name']?></h3>
                      <p><?php echo $data['designation']?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>


        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Contact Section -->
    <section class="st-contact-wrap st-gray-bg st-section" id="contact">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>Contact Us</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="assets/img/light-img/seperator-icon1.png" alt="demo" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>News websites and blogs are common sources for web feeds, but feeds are also <br>used to deliver structured</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div id="cf-msg"></div>
            <form action="message.php" method="post" class="st-contact-form" id="">
              <input type="text" placeholder="Full Name" id="name" name="name">
              <input type="text" placeholder="Email Address" id="email" name="email">
              <input type="text" placeholder="Subject" id="subject" name="subject">
              <textarea cols="30" rows="10" placeholder="Your Message" id="msg" name="details"></textarea>
              <button class="st-btn st-style1 st-size1 st-color2" type="submit" id="submit" name="submit">Send Message</button>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="st-contact-info st-style1">
              <div class="st-contact-info-in">
                <h3 class="st-contact-info-title">Contact Info</h3>
                <div class="st-contact-info-text">Contact is the most important part of businessess. If you need any information about our business, contact the information provided below</div>
                <h3 class="st-contact-info-title">Corporate Office</h3>
                <ul>
                  <li><i class="fas fa-map-signs"></i><?php echo $genaral['address']?></li>
                  <li><i class="fas fa-phone"></i><?php echo $genaral['phone']?></li>
                  <li><i class="fas fa-envelope"></i><a href="#"><?php echo $genaral['email']?></a></li>
                  <li><i class="fas fa-globe"></i><a href="#"><?php echo $genaral['website']?></a></li>
                </ul>
              </div>
              <div class="st-svg-animation1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="590px" height="436px">
                  <defs>
                    <filter filterUnits="userSpaceOnUse" id="Filter_0" x="0px" y="0px" width="590px" height="436px"  >
                        <feOffset in="SourceAlpha" dx="0" dy="5" />
                        <feGaussianBlur result="blurOut" stdDeviation="3.162" />
                        <feFlood flood-color="rgb(106, 106, 106)" result="floodOut" />
                        <feComposite operator="atop" in="floodOut" in2="blurOut" />
                        <feComponentTransfer><feFuncA type="linear" slope="0.15"/></feComponentTransfer>
                        <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                      </feMerge>
                    </filter>
                  </defs>
                  <g filter="url(#Filter_0)">
                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M359.506,400.811 C311.350,416.741 266.303,427.200 215.885,416.924 C166.065,406.770 119.155,382.030 83.358,345.883 C32.880,294.910 5.320,222.074 9.403,150.433 C11.889,106.817 27.202,61.676 61.083,34.027 C101.026,1.428 158.043,-0.486 208.701,8.960 C259.358,18.407 308.226,37.556 359.592,41.763 C414.001,46.218 473.787,34.861 519.488,64.652 C532.722,73.279 543.780,84.912 553.231,97.563 C563.583,111.419 572.219,126.797 576.587,143.532 C584.814,175.056 577.226,208.904 563.417,238.444 C538.267,292.240 493.162,335.144 441.630,364.721 C415.638,379.639 387.934,391.407 359.506,400.811 Z"/>
                  </g>
                </svg>
              </div><!-- .st-svg-animation1 -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start News Letter Section -->
    <section class="st-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="st-newsletter-wrap">
              <div class="st-left-newsletter">
                <div class="st-section-heading st-style1 st-type1">
                  <h3>Just a moment</h3>
                  <h2>Subscribe to our newsletter</h2>
                </div>
                <div class="st-newsletter">
                  <div class="st-newsletter-text">Subscribe to our Newsletter. We'll send email notifications everytime we release new Template.</div>
                  <form class="mailchimp st-subscribe-form" action="https://storerepublic.us12.list-manage.com/subscribe/post?u=d227d8d335060b093084903d0&amp;id=9ba078ceb0">
                    <input type="email" name="subscribe" id="subscriber-email" placeholder="Enter your Email">
                    <button type="submit" id="subscribe-button" class="st-newsletter-btn"><i class="flaticon-plane"></i></button>
                    <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                    <h5 class="subscription-success"> .</h5>
                    <h5 class="subscription-error"> .</h5>
                    <label class="subscription-label" for="subscriber-email"></label>
                  </form>
                </div>
              </div>
              <div class="st-right-newsletter">
                <div class="st-newsletter-img wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                  <img src="assets/img/blue-img/news-letter-img.png" alt="demo">
                  <div class="st-bard-animation">
                    <div class="st-bard-animation1"><img src="assets/img/blue-img/bard1.png" alt="demo"></div>
                    <div class="st-bard-animation2"><img src="assets/img/blue-img/bard2.png" alt="demo"></div>
                    <div class="st-bard-animation3"><img src="assets/img/blue-img/bard3.png" alt="demo"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End News Letter Section -->

    <!-- Start Map Section -->
    <div class="st-map-wrap">
      <div class="st-map-bar st-flex">
        <div class="st-map-bar-img">
          <img src="assets/img/light-img/map-icon-img.png" alt="demo">
          <div class="st-map-bar-icon"><i class="fas fa-map-marker-alt"></i></div>
        </div>
      </div>
      <div class="st-map-wrpa">
        <div class="st-google-map">
          <iframe src="<?php echo $genaral['map']?>" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-- End Map Section -->
  </div>

  <!-- Start Footer Seciton -->
  <footer class="st-site-footer st-style1 st-sticky-footer">
    <div class="st-main-footer text-center">
      <div class="container">
        <div class="st-footer-logo">
          <img src="assets/image/<?php echo $genaral['logo']?>" alt="demo">
        </div>
        <div class="st-footer-text">We understand that it is better to morph virally than to embrace intuitively.<br>
          We will matrix the power of schemas to redefine.</div>
        <div class="st-footer-social">
          <ul class="st-footer-social-btn st-flex st-mp0">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="st-copyright text-center">
        <div class="st-copyright-text">© limty, 2022. Developed by <a href="#">Md.Mahmudun nabi</a></div>
    </div>
  </footer>
  <!-- End Footer Seciton -->
  <!-- Start Video Popup -->
  <div class="st-video-popup">
    <div class="st-video-popup-overlay"></div>
    <div class="st-video-popup-content">
      <div class="st-video-popup-layer"></div>
      <div class="st-video-popup-container">
        <div class="st-video-popup-align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="st-video-popup-close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->
  <!-- Scripts -->
  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/mailchimp.min.js"></script>
  <script src="assets/js/owlCarousel.min.js"></script>
  <script src="assets/js/tamjid-counter.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/isotope.pkg.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from limty-html.netlify.app/limty/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 05:08:35 GMT -->
</html>
