<?php
$db=new mysqli('localhost','root','','limty');
$genaral=$db->query('select * from general_info')->fetch_assoc();
?>
  <header class="st-header st-solid-header st-style1 st-sticky-menu">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-site-branding">
            <a href="#" class="st-logo-link"><img src="assets/image/<?php echo $genaral['logo']?>" alt="demo"></a>
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
              <ul class="st-nav-list onepage-nav">
                <li class="st-has-children"><a href="#home" class="smooth-scroll">Home</a>
                </li>
                <li><a href="#about" class="smooth-scroll">About</a></li>
                <li><a href="#service" class="smooth-scroll">Service</a></li>
                <li><a href="#portfolio" class="smooth-scroll">Portfolio</a></li>
                <li><a href="#team" class="smooth-scroll">Team</a></li>
                <li><a href="#price" class="smooth-scroll">Price</a></li>
                <li class="st-has-children"><a href="#blog" class="smooth-scroll">Blog</a>
                  <ul>
                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                    <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                    <li><a href="blog-no-sidebar.php">Blog No Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.php">Blog Details Right Sidebar</a></li>
                    <li><a href="blog-details-left-sidebar.php">Blog Details Left Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.php">Blog Details No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="#contact" class="smooth-scroll">Contact</a></li>
              </ul>
            </nav><!-- .st-nav -->
          </div><!-- .st-nav-wrap -->
        </div>
      </div>
    </div>
  </header>