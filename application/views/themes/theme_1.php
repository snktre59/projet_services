<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE 8]><html class="ie8"><![endif]-->
  <script src="<?php echo js_url('page/carousel-preload'); ?>"></script>
  
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
  <title><?php echo $titre ?></title>
  <?php foreach($css as $url): ?>
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
  <?php endforeach; ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="body-nav-fixed-menu-top">
  <div class="wrapper-body">

    <!-- NAVBAR -->
    <!--===============================================================-->
    <div id="header">
      <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="menu-top menu-top-inverse">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 hidden-xs">
                <a class="title-menu-top display-inline-block" href="../../cdn-cgi/l/email-protection.html#93e0e6e3e3fce1e7d3f6ebf2fee3fff6bdf0fcfe"><span class="__cf_email__" data-cfemail="a8dbddd8d8c7dadce8cdd0c9c5d8c4cd86cbc7c5">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a>
              </div>
              <div class="col-sm-7 col-xs-12">
                <div class="pull-right">
                  <div class="dropdown dropdown-login pull-left">
                    <button class="btn-menu-top" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Log in</button>
                    <div class="dropdown-menu dropdown-menu-right stop-prop" role="menu" aria-labelledby="dLabel">
                      <div class="wrapper-form-box">
                        <h3>Log In</h3>
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input type="text" class="form-control" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                              <input type="password" class="form-control" placeholder="Password">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary text-theme-xs mr-8">Login</button>
                          <a href="index.html#" class="text-theme-xs pull-right a-black">Forgot your password ?</a>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown dropdown-cart pull-left">
                    <button class="btn-menu-top hidden-xs" id="dShop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> Cart (3)</button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-cart stop-prop" role="menu" aria-labelledby="dShop">
                      <div class="panel-shopping-cart">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="text-center"><i class="fa fa-shopping-cart"></i></th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                              <th>Total</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="table-first"><img class="img-responsive" src="assets/images/general/imac.png" alt="theme-img"></td>
                              <td><span class="title">Apple iMac 21.5</span></td>
                              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
                              <td><span>$1249</span></td>
                              <td class="close-cart"><a href="index.html#" class="btn btn-primary btn-sm"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                              <td class="table-first"><img class="img-responsive" src="assets/images/shop/asus-3.jpg" alt="theme-img"></td>
                              <td><span class="title">Asus Laptop</span></td>
                              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
                              <td><span>$1249</span></td>
                              <td class="close-cart"><a href="index.html#" class="btn btn-primary btn-sm"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                              <td class="table-first"><img class="img-responsive" src="assets/images/shop/lenovo.jpg" alt="theme-img"></td>
                              <td><span class="title">Lenovo Tablet</span></td>
                              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
                              <td><span>$1249</span></td>
                              <td class="close-cart"><a href="index.html#" class="btn btn-primary btn-sm "><i class="fa fa-times"></i></a></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="panel-footer">
                          <div class="row">
                            <div class="col-sm-3">
                              <a href="index.html#" class="btn btn-default btn-sm">Continue Shopping</a>
                            </div>
                            <div class="col-sm-9 text-right">
                              <a href="index.html#" class="btn btn-default btn-sm">Update Cart</a>
                              <a href="index.html#" class="btn btn-primary btn-sm">Procceed to checkout</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-inline social-icons-menu-top pull-right">
                  <a href="index.html#" class="social-hover-v1 a-facebook"></a>
                  <a href="index.html#" class="social-hover-v1 a-google"></a>
                  <a href="index.html#" class="social-hover-v1 a-twitter"></a>
                  <a href="index.html#" class="social-hover-v1 a-linkedin"></a>
                  <a href="index.html#" class="social-hover-v1 a-pinterest"></a>
                  <a href="index.html#" class="social-hover-v1 a-behance"></a>
                  <a href="index.html#" class="social-hover-v1 a-youtube"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span class="logo-circle"><span class="logo-circle-outer"></span></span><img class="img-responsive" src="<?php echo img_url("logo/logo-default.png", "theme-img"); ?>"></a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="index.html">Default</a></li>
                  <li><a href="home-bg-slider.html">Background Image Slider</a></li>
                  <li><a href="home-video-bg.html">Video Background</a></li>
                  <li><a href="home-browser-slider.html">Browser Slider</a></li>
                  <li><a href="home-macbook-slider.html">Macbook Slider</a></li>
                  <li><a href="home-filterable-portfolio.html">Filterable Portfolio</a></li>
                  <li><a href="home-application.html">Application</a></li>
                  <li><a href="home-personal-portfolio.html">Personal Portfolio</a></li>
                  <li><a href="home-personal-portfolio-option-2.html">Personal Portfolio</a></li>
                  <li><a href="home-one-page.html">One Page</a></li>
                  <li><a href="home-photographer.html">Photographer</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">

                  <li class="dropdown-submenu">
                    <a href="index.html#">About Us</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="about-us-option-1.html">Option-1 - About Us</a></li>
                      <li><a href="about-us-option-2.html">Option-2 - About Us</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Services</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="services-option-1.html">Option-1 - Services</a></li>
                      <li><a href="services-option-2.html">Option-2 - Services</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Contact Us</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="contact-us-option-1.html">Option-1 - Contact Us</a></li>
                      <li><a href="contact-us-option-2.html">Option-2 - Contact Us</a></li>
                      <li><a href="contact-us-option-3.html">Option-3 - Contact Us</a></li>
                      <li><a href="contact-us-option-4.html">Option-4 - Contact Us</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Log in - Register</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="register-option-1.html">Option-1 - Register</a></li>
                      <li><a href="login-option-1.html">Option-1 - Log in</a></li>
                      <li><a href="register-login-option-1.html">Option-1 - Register - Log in</a></li>
                      <li><a href="register-option-2.html">Option-2 - Register</a></li>
                      <li><a href="login-option-2.html">Option-2 - Log in</a></li>
                      <li><a href="register-login-option-2.html">Option-3 - Register - Log in</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Coming Soon</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="coming-soon-option-1.html">Option-1 - Coming Soon</a></li>
                      <li><a href="coming-soon-option-2.html">Option-2 - Coming Soon</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Timeline</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="timeline.html">Timeline Side</a></li>
                      <li><a href="timeline-center.html">Timeline Center</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Error</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="404-option-1.html">Option 1 - Error</a></li>
                      <li><a href="404-option-2.html">Option 2 - Error</a></li>
                      <li><a href="404-option-3.html">Option-3 - Error</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="index.html#">Sub Level - 1</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="index.html#">Sub Level - 2</a></li>
                      <li class="dropdown-submenu">
                        <a href="index.html#">Sub Level - 2</a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="dropdown-submenu">
                            <a href="index.html#">Sub Level - 3</a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="index.html#">Sub Level - 4</a></li>
                              <li class="dropdown-submenu">
                                <a href="index.html#">Sub Level - 4</a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="index.html#">Sub Level-5</a></li>
                                  <li><a href="index.html#">Sub Level-5</a></li>
                                  <li><a href="index.html#">Sub Level-5</a></li>
                                </ul>
                              </li>
                              <li><a href="index.html#">Sub Level - 4</a></li>
                            </ul>
                          </li>
                          <li><a href="index.html#">Sub Level-3</a></li>
                          <li><a href="index.html#">Sub Level-3</a></li>
                        </ul>
                      </li>
                      <li><a href="index.html#">Sub Level - 2</a></li>
                    </ul>
                  </li>
                  <li><a href="pricetables.html">Pricing Tables</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                </ul>
              </li>

              <li class="li-mega-menu dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
                <div class="wrapper-mega-menu v1" role="menu">
                  <div class="mega-menu">
                    <div class="container">
                      <div class="wrapper-row wrapper-row-features">
                        <div class="row">
                          <div class="col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                              <li><a href="feature-icon-box.html"><i class="fa fa-rocket"></i>Icon</a></li>
                              <li><a href="feature-general-typography.html"><i class="fa fa-font"></i>Typography</a></li>
                              <li><a href="feature-content-box.html"><i class="fa fa-list-alt"></i>Content Box</a></li>
                              <li><a href="feature-primary-button.html"><i class="fa fa-hand-o-up"></i>Button</a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                              <li><a href="feature-accordion.html"><i class="fa fa-cogs"></i>Accordion</a></li>
                              <li><a href="feature-tab.html"><i class="fa fa-tasks"></i>Tab</a></li>
                              <li><a href="feature-panel.html"><i class="fa fa-columns"></i>Panel</a></li>
                              <li><a href="feature-form.html"><i class="fa fa-check-square-o"></i>Form</a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                              <li><a href="feature-counter.html"><i class="fa fa-tachometer"></i>Counter</a></li>
                              <li><a href="feature-slider.html"><i class="fa fa-play-circle"></i>Slider</a></li>
                              <li><a href="feature-callout.html"><i class="fa fa-desktop"></i>Callout</a></li>
                              <li><a href="pricetables.html"><i class="fa fa-rocket"></i>Pricing Tables</a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                              <li><a href="navbar-fixed-inverse.html"><i class="fa fa-bars"></i>Header Inverse</a></li>
                              <li><a href="navbar-fixed-default-menu-top.html"><i class="fa fa-bars"></i>Default Menu Top</a></li>
                              <li><a href="navbar-fixed-inverse-menu-top.html"><i class="fa fa-bars"></i>Inverse Menu Top</a></li>
                              <li><a href="navbar-transparent.html"><i class="fa fa-bars"></i>Transparent</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="shop.html">Shop Default</a></li>
                  <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                  <li><a href="shop-item.html">Shop Item</a></li>
                  <li><a href="shop-cart.html">Shop Cart</a></li>
                </ul>
              </li>

              <li class="li-mega-menu dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mega Menu</a>
                <div class="wrapper-mega-menu v2 stop-prop" role="menu">
                  <div class="mega-menu">
                    <div class="container">
                      <div class="wrapper-row">
                        <div class="row">
                          <div class="col-sm-4 col-md-3">
                            <h3 class="title-sm hr-full">Lists</h3>
                            <ul class="list-unstyled list-lg">
                              <li><i class="fa fa-check"></i>Fast Service</li>
                              <li><i class="fa fa-check"></i>7/24 Customer Support</li>
                              <li><i class="fa fa-check"></i>Experienced Team</li>
                              <li><i class="fa fa-check"></i>Joyful Experience</li>
                              <li><i class="fa fa-check"></i>Fast Service</li>
                              <li><i class="fa fa-check"></i>7/24 Customer Support</li>
                              <li><i class="fa fa-check"></i>Experienced Team</li>
                              <li><i class="fa fa-check"></i>Joyful Experience</li>
                              <li><i class="fa fa-check"></i>Fast Service</li>
                              <li><i class="fa fa-check"></i>7/24 Customer Support</li>
                            </ul>
                          </div>
                          <div class="col-sm-2 col-md-3">
                            <h3 class="title-sm hr-full"><span class="hidden-sm">Post</span> Boxes</h3>
                            <div class="post-xs-side">
                              <img class="img-responsive" src="assets/images/placeholder/80x80.gif" alt="theme-img">
                              <a href="index.html#" class="category">MUSIC</a>
                              <p class="title hidden-sm">Lorem ipsum dolor amet</p>
                              <p class="meta hidden-md hidden-sm">January 1, 2014</p>
                            </div>
                            <div class="post-xs-side">
                              <img class="img-responsive img-thumb" src="assets/images/placeholder/80x80.gif" alt="theme-img">
                              <a href="index.html#" class="category">VIDEO</a>
                              <p class="title hidden-sm">Lorem ipsum dolor amet</p>
                              <p class="meta hidden-md hidden-sm">January 1, 2014</p>
                            </div>
                            <div class="post-xs-side">
                              <img class="img-responsive img-thumb" src="assets/images/placeholder/80x80.gif" alt="theme-img">
                              <a href="index.html#" class="category">MOVIE</a>
                              <p class="title hidden-sm">Lorem ipsum dolor amet</p>
                              <p class="meta hidden-md hidden-sm">January 1, 2014</p>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3">
                            <h3 class="title-sm hr-full">Slider</h3>
                            <!-- SLIDER -->
                            <div class="wrapper-slider text-theme">
                              <div id="slider-mega-menu" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img class="img-slide" src="assets/images/portfolio/2.png" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="assets/images/portfolio/1.png" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="assets/images/portfolio/3.png" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="assets/images/portfolio/4.png" alt="theme-img">
                                  </div>
                                </div>
                                <!-- Controls -->
                                <a href="index.html#slider-mega-menu" role="button" data-slide="prev">
                                  <i class="fa fa-angle-left fa-2x btn-prev"></i>
                                </a>
                                <a href="index.html#slider-mega-menu" role="button" data-slide="next">
                                  <i class="fa fa-angle-right fa-2x btn-next"></i>
                                </a>
                              </div>
                            </div>
                            <!-- SLIDER END-->
                            <p class="text-theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius sapien pellentesque.</p>
                            <a class="text-theme btn btn-md btn-primary">Read More</a>
                          </div>

                          <div class="col-sm-2 col-md-3">
                            <h3 class="title-sm hr-full">Portfolio</h3>
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/1.png" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/2.png" alt="theme-img">
                                  </a>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/3.png" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/4.png" alt="theme-img">
                                  </a>
                                </div>
                              </div>
                              <div class="row hidden-sm">
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/5.jpg" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="index.html#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="assets/images/portfolio/7.png" alt="theme-img">
                                  </a>
                                </div>
                              </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                  <li><a href="blog-bg-intro.html">Blog Background Intro</a></li>
                  <li><a href="timeline-center.html">Blog Timeline</a></li>
                  <li><a href="blog-post-option-1.html">Blog Post</a></li>
                  <li><a href="blog-post-option-2.html">Blog Post Bg Intro</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="portfolio-item.html">Portfolio Item</a></li>
                  <li><a href="portfolio-4-column.html">4 Column</a></li>
                  <li><a href="portfolio-3-column.html">3 Column</a></li>
                  <li><a href="portfolio-2-column.html">2 Column</a></li>
                  <li><a href="portfolio-fluid-full-4-column.html">Fluid Full 4 Column</a></li>
                  <li><a href="portfolio-fluid-full-3-column.html">Fluid Full 3 Column</a></li>
                  <li><a href="portfolio-fluid-full-2-column.html">Fluid Full 2 Column</a></li>
                  <li><a href="portfolio-fluid-4-column.html">Fluid 4 Column</a></li>
                  <li><a href="portfolio-fluid-3-column.html">Fluid 3 Column</a></li>
                  <li><a href="portfolio-fluid-2-column.html">Fluid 2 Column</a></li>
                </ul>
              </li>

              <li class="li-search">
                <form class="nav-search">
                  <label for="focus-input"><i class="fa fa-search"></i></label>
                  <input id="focus-input" class="container" type="search" name="s" placeholder="To Search, Type and Hit Enter">
                </form>
              </li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>
    <!-- NAVBAR END -->

    <?php foreach($tabFlashMessage as $flashMessage): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $flashMessage['message'];?>
        </div>
    <?php endforeach; ?>

    
    <?php echo $output ?>
    <!-- SECTION FOOTER -->
    <!--===============================================================-->
    <div class="section footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="logo-footer text-theme">
              <span class="logo-circle-footer"><span class="logo-circle-outer-footer"></span></span>
              <img src="<?php echo img_url("logo/logo-footer.png", "Logo"); ?>">
            </div>
            <p class="text-theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet consectetur massa, in efficitur justo aliquam.</p>
            <div class="text-theme">
              <ul class="list-inline">
                <li><a href="index.html#"><i class="fa fa-facebook fa-round"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-twitter fa-round"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-dribbble fa-round"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-linkedin fa-round"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2 col-sm-offset-1 col-xs-6">
            <h3 class="text-theme title-sm hr-left">Home</h3>
            <ul class="list-unstyled text-theme">
              <li><a href="home-macbook-slider.html">Macbook Slider</a></li>
              <li><a href="home-filterable-portfolio.html">Filterable Portfolio</a></li>
              <li><a href="home-application.html">Application</a></li>
              <li><a href="home-personal-portfolio.html">Personal Option-1</a></li>
              <li><a href="home-personal-portfolio-option-2.html">Personal Option-2</a></li>
              <li><a href="home-one-page.html">Agency</a></li>
              <li><a href="home-photographer.html">Photographer</a></li>
            </ul>
          </div>
          <div class="col-sm-2 col-xs-6">
            <h3 class="text-theme title-sm hr-left">Pages</h3>
            <ul class="list-unstyled text-theme">
              <li><a href="about-us-option-1.html">About Us</a></li>
              <li><a href="services-option-2.html">Services</a></li>
              <li><a href="pricetables.html">Pricing Tables</a></li>
              <li><a href="contact-us-option-1.html">Contact</a></li>
              <li><a href="coming-soon-option-1.html">Coming Soon</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-xs-12">
            <h3 class="text-theme title-sm hr-left">Subscribe To Our Newsletter</h3>
            <div class="input-group text-theme">
              <input type="text" class="form-control input-lg" placeholder="E-mail">
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary input-lg btn-z-index"><i class="fa fa-paper-plane"></i>Subscribe</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--SECTION FOOTER BOTTOM -->
    <!--===============================================================-->
    <div class="section footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center col-footer-bottom">
            <a id="scroll-top" href="index.html#"><i class="fa fa-angle-up fa-2x"></i></a>
            <p class="copyright">2015 &copy; Tous droits réservés.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <!-- javascript -->
    <?php foreach($js as $url): ?>
        <script type="text/javascript" src="<?php echo $url; ?>"></script> 
    <?php endforeach; ?>
    
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59515546-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>

</html>
