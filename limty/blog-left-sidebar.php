<?php
$db=new mysqli ('localhost','root','','limty');
$blog=$db->query('select * from blog order by id desc');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from limty-html.netlify.app/limty/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 05:08:45 GMT -->
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
  <!-- <link rel="icon" href="img/favicon.png" /> -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owlCarousel.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div id="st-preloader">
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
    <div class="st-preloader-wave"></div>
  </div>
  <header class="st-header st-style1 st-other-page-header st-sticky-menu">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-site-branding">
            <a href="#" class="st-logo-link"><img src="assets/img/light-img/logo.png" alt="demo"></a>
          </div>
          <!-- For Site Title -->
          <!-- <span class="st-site-title">
            <a href="index.html">Logo</a>
          </span> -->
          <div class="st-nav-wrap st-fade-down">
            <div class="st-nav-toggle st-style1">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <nav class="st-nav st-desktop-nav">
              <ul class="st-nav-list">
                <li class="st-has-children"><a href="index.php#home">Home</a>
                  <ul>
                    <li><a href="index.php">Minimal Landing</a></li>
                    <li><a href="home2.php">Animated Home</a></li>
                    <li><a href="home7.php">Dark Home</a></li>
                    <li><a href="home4.php">Creative Landing</a></li>
                    <li><a href="home3.php">Animated Home 2</a></li>
                    <li><a href="home5.php">Creative Landing 2</a></li>
                    <li><a href="home6.php">Minimal Landing 2</a></li>
                  </ul>
                </li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#service">Service</a></li>
                <li><a href="index.php#portfolio">Portfolio</a></li>
                <li><a href="index.php#team">Team</a></li>
                <li><a href="index.php#price">Price</a></li>
                <li class="st-has-children"><a href="index.php#blog">Blog</a>
                  <ul>
                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                    <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                    <li><a href="blog-no-sidebar.php">Blog No Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.php">Blog Details Right Sidebar</a></li>
                    <li><a href="blog-details-left-sidebar.php">Blog Details Left Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.php">Blog Details No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="index.php#contact">Contact</a></li>
              </ul>
            </nav><!-- .st-nav -->
          </div><!-- .st-nav-wrap -->
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start Page Title -->
  <section class="st-page-header st-bg" data-src="assets/img/light-img/page-header-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="st-page-header-text">
            <h1>Our news & blog</h1>
            <ul class="st-breadcam">
              <li><a href="index.php">Home</a></li>
              <li>Blog Right Sidebar</li>
            </ul>
          </div>
        </div><!-- .col -->
      </div>
    </div>
  </section>
  <!-- End Page Title -->
  
  <!-- Start Blog Section -->
  <div class="st-blog-wrap st-section" id="blog">
    <div class="container">
      <div class="row">
        <aside class="col-lg-4">
          <div class="st-sidebar st-left-sidebar">
            <div class="widget widget_search">
              <form method="get" class="search-form" action="#">
                <label>
                  <input type="search" class="search-field" placeholder="Search …">
                </label>
                <input type="submit" class="search-submit" value="Search">
              </form>
            </div><!-- .widget -->
            <div class="widget widget_categories">
              <h2 class="widget-title">Categories</h2>
              <ul>
                <li><a href="#">Business Growth <span>(2)</span></a></li>
                <li><a href="#">Design <span>(4)</span></a></li>
                <li><a href="#">Development <span>(3)</span></a></li>
                <li><a href="#">Consulting <span>(2)</span></a></li>
                <li><a href="#">Technology <span>(1)</span></a></li>
              </ul>
            </div><!-- .widget -->
            <div class="widget widget_recent_entries">
              <h2 class="widget-title">Recent Post</h2>
              <ul>
                <li>
                  <a href="#">
                    <img src="assets/img/light-img/recent-post1.jpg" alt="demo">
                    <div class="r-post-head">
                      <h2>Lorem Ipsum Dolor..</h2>
                      <span>February 29, 2019</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="assets/img/light-img/recent-post2.jpg" alt="demo">
                    <div class="r-post-head">
                      <h2>Lorem Ipsum Dolor..</h2>
                      <span>February 17, 2019</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="assets/img/light-img/recent-post3.jpg" alt="demo">
                    <div class="r-post-head">
                      <h2>Lorem Ipsum Dolor..</h2>
                      <span>February 16, 2019</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div><!-- .widget -->
            <div class="widget widget_tag_cloud">
              <h2 class="widget-title">Popular Tags</h2>
              <div class="tagcloud">
                <a href="#">Idea</a>
                <a href="#">Book</a>
                <a href="#">Service</a>
                <a href="#">Clean</a>
                <a href="#">Marketing</a>
                <a href="#">Agency</a>
                <a href="#">Unique</a>
                <a href="#">Creative</a>
                <a href="#">Clear</a>
              </div>
            </div>
            <div class="widget widget_archive">
              <h2 class="widget-title">Arachives</h2>
              <ul>
                <li><a href="#">January 2018</a></li>
                <li><a href="#">March 2018</a></li>
                <li><a href="#">April 2018</a></li>
                <li><a href="#">May 2018</a></li>
                <li><a href="#">June 2018</a></li>
              </ul>
            </div>
          </div>
        </aside>
        <div class="col-lg-8">
          <div class="st-blog-list">
            <div class="row">
              <?php while($da=$blog->fetch_assoc()){ ?>
              <div class="col-lg-6">
                <div class="st-blog st-style1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                  <div class="st-zoom">
                    <a href="#" class="st-blog-thumb st-bg st-zoom-in" data-src="assets/image/<?php echo $da['photo']?>"></a>
                  </div>
                  <div class="st-blog-info">
                    <div class="st-blog-label">By <a href="#"><?php echo $da['add_by'] ?></a></div>
                    <h2 class="st-blog-title"><a href="#"><?php echo $da['title']?></a></h2>
                    <div class="st-blog-text"><?php echo $da['details']?></div>
                    <div class="st-blog-meta">
                      <div class="st-blog-meta-left"><span class="st-posted-by"><?php echo $da['date']?></span></div>
                      <div class="st-blog-meta-right"><a href="#" class="st-blog-btn">Read More <i class="fas fa-chevron-right"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              
              
             
              
            </div>
          </div>
          <div class="st-pagination">
            <ul>
              <li class="is-active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next Page</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Section -->
  <hr>

  <!-- Start Footer Seciton -->
  <footer class="st-site-footer st-style1">
    <div class="st-main-footer text-center">
      <div class="container">
        <div class="st-footer-logo">
          <img src="assets/img/light-img/footer-logo.png" alt="demo">
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
        <div class="st-copyright-text">© limty, 2019. Developed by <a href="#">Laralink</a></div>
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
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from limty-html.netlify.app/limty/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 05:08:45 GMT -->
</html>
