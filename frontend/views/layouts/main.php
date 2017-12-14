<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;

$mianAsset = MainAsset::register($this);
$theme_url = $mianAsset->baseUrl;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="rtl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="user-scalable = yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Listing - Classified Listing HTML Template">
        <meta name="keywords" content="Listing,HTML,CSS,Classified,blog,business,corporate,clean,responsive">
        <meta name="author" content="Muqadass Aleem, Muammad Asif">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <!--================================FAVICON================================-->

        <link rel="apple-touch-icon" sizes="57x57" href="<?= $theme_url; ?>/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= $theme_url; ?>/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= $theme_url; ?>/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= $theme_url; ?>/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= $theme_url; ?>/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= $theme_url; ?>/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= $theme_url; ?>/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= $theme_url; ?>/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $theme_url; ?>/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= $theme_url; ?>/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= $theme_url; ?>/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= $theme_url; ?>/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= $theme_url; ?>/images/favicon/favicon-16x16.png">
        <link rel="shortcut icon" href="<?= $theme_url; ?>/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $theme_url; ?>/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="<?= $theme_url; ?>/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= $theme_url; ?>/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <!--================================GOOGLE FONTS=========================================-->
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  


    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="preloader"><span class="preloader-gif"></span></div>
        <div class="theme-wrap clearfix">
            <!--================================responsive log and menu==========================================-->
            <div class="wsmenucontent overlapblackbg"></div>
            <div class="wsmenuexpandermain slideRight">
                <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
                <a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
            </div>
            <!--================================HEADER==========================================-->
            <div class="header">
                <div class="top-toolbar"><!--header toolbar-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                                <div class="social-content">
                                    <ul class="social-links">
                                        <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        <li><button class = "login" data-toggle = "modal" data-target = "#login">ورود</button></li>
                                        <li><button class = "register" data-toggle = "modal" data-target = "#register">عضویت</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                <div class="top-contact-info">
                                    <ul>
                                        <li class="toolbar-email"><i class="fa fa-envelope-o"></i> info@ads-line.com</li>
                                        <li class="toolbar-contact"><i class="fa fa-phone"></i> +98 990 121 45 62</li>
                                        <li><a class="toolbar-new-listing" href="#"><i class="fa fa-plus-circle"></i> افزودن لیست</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--header toolbar end-->
                <div class="nav-wrapper"><!--main navigation-->
                    <div class="container">
                        <!--Main Menu HTML Code-->
                        <nav class="wsmenu slideLeft clearfix">
                            <div class="logo pull-left"><a href="index.html" title="Responsive Slide Menus"><img src="images/logo.png" alt="" /></a></div>
                            <ul class="mobile-sub wsmenu-list pull-right">
                                <li><a href="<?= Yii::$app->homeUrl ?>" class="">خانه</a></li>
                                <li><a href="pricing.html" class="">قیمت ها</a>
                                    <ul class="wsmenu-submenu">
                                        <li><a href="pricing.html">Pricing 1</a></li>
                                        <li><a href="pricing-2.html" class="">Pricing 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">دسته بندی ها <span class="arrow"></span></a></li>
                                <li><a href="listing-archive.html">لیست تبلیغات <span class="arrow"></span></a></li>
                                <li><a href="#">Shortcodes <span class="arrow"></span></a>
                                    <div class="megamenu clearfix">
                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                            <li><a href="sc-rs-slider1.html">Revolution Slider</a></li>
                                            <li><a href="sc-rs-slider2.html">Post Slider</a></li>
                                            <li><a href="sc-map.html">Geo Location Map</a></li>
                                            <li><a href="sc-services.html">Services</a></li>
                                            <li><a href="sc-locations.html">Locations</a></li>
                                        </ul>
                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                            <li><a href="sc-category.html">Categories</a></li>
                                            <li><a href="sc-listing.html">Listings</a></li>
                                            <li><a href="sc-feature-carousel.html">Feature Listing</a></li>
                                            <li><a href="sc-testimonial.html">Testimonial</a></li>
                                        </ul>
                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                            <li><a href="sc-funfacts.html">FunFacts Counter</a></li>
                                            <li><a href="sc-pricing.html">Pricing Tables</a></li>
                                            <li><a href="sc-blog.html">Blog Style</a></li>
                                            <li><a href="sc-callout.html">Callout</a></li>
                                        </ul>
                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                            <li><a href="sc-sidebar.html">SideBars</a></li>
                                            <li><a href="sc-social.html">Social Styles</a></li>
                                            <li><a href="sc-partner.html">Partners</a></li>
                                            <li><a href="sc-search-form.html">Search Form</a></li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li><a href="contact.html">تماس باما <span class="arrow"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div><!--main navigation end-->
            </div><!-- header end -->

            <?= $content ?>
            
            <section class="partner-section padding-top-70 padding-bottom-40">
                <div class="container"><!-- section container -->
                    <div class="section-title-wrap margin-bottom-50"><!-- section title -->
                        <h4>partners</h4>
                        <div class="title-divider">
                            <div class="line"></div>
                            <i class="fa fa-star-o"></i>
                            <div class="line"></div>
                        </div>
                    </div><!-- section title end -->

                    <div class="row partner-wrap style-1 clearfix">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?= $theme_url ?>/images/partner/01.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?= $theme_url ?>/images/partner/02.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?= $theme_url ?>/images/partner/03.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?= $theme_url ?>/images/partner/04.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                    </div><!-- .row partner end -->
                </div><!-- container end -->
            </section>

            <!--================================SOCIAL SECTION==========================================-->

            <section class="social-section  style-2">
                <div class="container"><!-- section container -->
                    <div class="row social-wrap clearfix">
                        <div class="col-md-2 col-sm-4 col-xs-12 social-connect pull-left">
                            <h5>let's connect</h5>
                        </div>
                        <div class="col-md-10 col-sm-8 col-xs-12 social-links">
                            <ul class="pull-right clearfix">
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-twitter-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-linkedin-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-facebook-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class=" " href="#"><i class="fa fa-skype"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-pinterest-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-apple"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-instagram"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-google-plus-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-dribbble"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-youtube-play"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-tumblr-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-bitbucket-square"></i></a>
                                </li><!-- .ITEM -->
                                <li class="item">
                                    <a class="" href="#"><i class="fa fa-windows"></i></a>
                                </li><!-- .ITEM -->
                            </ul>
                        </div>
                    </div>
                </div><!-- container end -->
            </section>


            <!--================================ FOOTER AREA ==========================================-->

            <footer class="footer style-1 padding-top-60 bg222">
                <div class="container">
                    <div class="footer-main padding-bottom-10">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>آخرین اخبار</h5>
                                </div>
                                <div class="footer-logo">
                                    <a href="#"><img src="<?= $theme_url ?>/images/footer-logo.png" alt="footer logo"></a>
                                </div>
                                <div class="footer-intro">
                                    <p>Lorem ipsum dolor sit amet sectetuer
                                        esl adipiscing elit sed diam nonummy
                                        nibhi euismod tincidunt ut laoreet
                                        dolore amet magna.
                                    </p>
                                    <a href="about.html">read more</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>recent posts</h5>
                                </div>
                                <div class="footer-recent-post-widget">
                                    <div class="footer-recent-post clearfix">
                                        <div class="footer-recent-post-figure">
                                            <img src="<?= $theme_url ?>/images/news/thumb/100/01.jpg" alt="recent post"/>
                                        </div>
                                        <div class="footer-recent-post-content">
                                            <div class="footer-recent-post-title">
                                                <a href="#">Hello Classified Listing</a>
                                            </div>
                                            <div class="footer-recent-post-disc">
                                                <p>Welcome to listing</p>
                                            </div>
                                            <div class="footer-recent-post-caption">
                                                <p class="date">07 Sep, 2015</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-recent-post clearfix">
                                        <div class="footer-recent-post-figure">
                                            <img src="<?= $theme_url ?>/images/news/thumb/100/01.jpg" alt="recent post"/>
                                        </div>
                                        <div class="footer-recent-post-content">
                                            <div class="footer-recent-post-title">
                                                <a href="#">Hello Classified Listing</a>
                                            </div>
                                            <div class="footer-recent-post-disc">
                                                <p>Welcome to listing</p>
                                            </div>
                                            <div class="footer-recent-post-caption">
                                                <p class="date">07 Sep, 2015</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>Flikr Photos</h5>
                                </div>
                                <div class="footer-flikr-widget">
                                    <ul class="flikr-list clearfix">
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/01.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/02.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/03.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/04.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/05.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?= $theme_url ?>/images/news/flikr/06.jpg" alt="flikr photo"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container end -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-8 col-sm-12 col-xs-12 pull-right margin-bottom-20">
                                <nav class="footer-menu wsmenu clearfix">
                                    <ul class="wsmenu-list pull-right">
                                        <li><a href="#" class="">Home</a></li>
                                        <li><a href="#">features <span class="arrow"></span></a></li>
                                        <li><a href="#">categories <span class="arrow"></span></a></li>
                                        <li><a href="#">listings <span class="arrow"></span></a></li>
                                        <li><a href="#">pages <span class="arrow"></span></a></li>
                                        <li><a href="#">Contact Us <span class="arrow"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 pull-left margin-bottom-20">
                                <div class="footer-copyright">
                                    <p>&copy; 2016 All Rights Reserved @ <a href="http://designsvilla.com" target="_blank">Designsvilla</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--================================MODAL WINDOWS FOR REGISTER AND LOGIN FORMS ===========================================-->
        <!-- Modal login form -->
        <div class = "modal fade" id = "login" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
            <div class = "listing-modal-1 modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
                        <h4 class = "modal-title" id = "myModalLabel"> ورود</h4>
                    </div>
                    <div class = "modal-body">
                        <div class=" listing-login-form">
                            <form action="#">
                                <div class="listing-form-field">
                                    <i class="fa fa-user blue-1"></i>
                                    <input class="form-field bgwhite" type="text" name="user_name" placeholder="username" />
                                </div>
                                <div class="listing-form-field">
                                    <i class="fa fa-lock blue-1"></i>
                                    <input class="form-field bgwhite" type="password" name="user_pass" placeholder="password"  />
                                </div>
                                <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                    <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
                                    <label class="checkbox-lable">مرابیادآور</label>
                                    <a href="#">فراموشی گذرواژه?</a>
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field submit bgblue-1" type="submit"  value="login" />
                                </div>
                            </form>
                            <div class="bottom-links">
                                <p>not a member?<a href="#">ایجاد حساب کاربری</a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal registration form -->
        <div class = "modal fade" id = "register" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
            <div class = "listing-modal-1 modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
                        <h4 class = "modal-title" id = "myModalLabel2">عضویت</h4>
                    </div>
                    <div class = "modal-body">
                        <div class=" listing-register-form">
                            <form action="#">
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="text" name="user_name" placeholder="name"  />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="email" name="user_email" placeholder="email" />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="password" name="user_password" placeholder="password"  />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="confirm password" />
                                </div>
                                <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                    <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label>
                                    <label class="checkbox-lable">i agree with</label>
                                    <a href="#">terms & conditions</a>
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field submit bgblue-1" type="submit"  value="create account" />
                                </div>
                            </form>
                            <div class="bottom-links">
                                <p>login with social network</p>
                                <div class="listing-form-social">
                                    <ul>
                                        <li><a class=" bgblue-4 white" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class=" bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class=" bgred-2 white" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        

        <!--================================ testimonial ===========================================-->
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	

            <div class="rg-image-wrapper">
            <div class="rg-image"></div>
            <div class="rg-caption-wrapper">
            <div class="rg-caption" style="display:none;">
            <p></p>
            <h5></h5>
            <div class="caption-metas">
            <p class="position"></p>
            <p class="orgnization"></p>
            </div>
            </div>
            </div>
            <div class="clear"></div>
            </div>
        </script>	
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
