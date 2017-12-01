<?php

use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$theme_url = Yii::$app->assetManager->getBundle(frontend\assets\MainAsset::className())->baseUrl
?>
<!--================================Revolution SLIDER SECTION==========================================-->

<section id="slider-revolution">
    <div class="fullwidthbanner-container">
        <div class="revolution-slider tx-center">
            <ul><!-- SLIDE  -->

                <!-- Slide1 -->
                <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="<?= $theme_url; ?>/images/slider/slide-1.jpg" alt="slide">
                    <!-- LAYERS -->
                    <!-- LAYER 1 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
                        <div class="sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
                            WELCOME TO <span class="yallow-1 sub-title-18 ffm">listing</span> HTML TEMplate
                        </div>
                    </div>
                    <!-- LAYER 2 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" title-48 cwhite tx-left fwb lp5 lh1 ffm">
                            AMAZING classified
                        </div>
                    </div>
                    <!-- LAYER 3 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
                        <div class="title-48 cwhite tx-left fwb lp5 lh1 ffm">
                            <span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">html</span> Template
                        </div>
                    </div>
                    <!-- LAYER 4 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" text-14 cwhite tx-left fwn lp1 lh4 ffm">
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit sed do eiusmod.
                        </div>
                    </div>
                    <!-- LAYER 5 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" tx-left dib lp1">
                            <a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite" href="#">purchase now</a>
                        </div>
                    </div>
                    <!-- LAYER 6 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="190" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2400" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" tx-left dib lp1 ml15">
                            <a class="button1 btn-fs-18 blue-1 fwn lh1 bg-white btn-tfc btn-br4 hwhite hbgblue" href="#">read more</a>
                        </div>
                    </div>
                    <!-- LAYER 7 -->
                    <div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="220" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-1-1.png" alt="slide">
                    </div>
                    <!-- LAYER 8 -->
                    <div class="tp-caption rs-right sft stt tp-resizeme" data-x="right" data-y="160" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInOutQuad" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-1-2.png" alt="slide">
                    </div>

                </li>

                <!-- Slide2 -->
                <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="<?= $theme_url; ?>/images/slider/slide-2.jpg" alt="slide">
                    <!-- LAYERS -->	
                    <!-- LAYER 1 -->
                    <div class="tp-caption rs-left sfr stl tp-resizeme" data-x="left" data-y="center" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-2-1.png" alt="slide">
                    </div>
                    <!-- LAYER 2 -->
                    <div class="tp-caption sft stt tp-resizeme" data-x="150" data-y="140" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInOutQuad" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-2-2.png" alt="slide">
                    </div>
                    <!-- LAYER 3 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
                            WELCOME TO <span class="yallow-1 sub-title-18 ffm">listing</span> html TEMplate
                        </div>
                    </div>
                    <!-- LAYER 4 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInBack" style="z-index: 9;">
                        <div class="title-48 cwhite tx-left fwb lp2 lh1 ffm">
                            GREAT classified
                        </div>
                    </div>
                    <!-- LAYER 5 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" title-48 cwhite tx-left fwb lp2 lh1 ffm">
                            <span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">html</span> Template
                        </div>
                    </div>
                    <!-- LAYER 6 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInBack" style="z-index: 9;">
                        <div class="text-14 cwhite tx-left fwn lp1 lh4 ffm">
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit sed do eiusmod.
                        </div>
                    </div>
                    <!-- LAYER 7 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left dib lp1">
                            <a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite" href="#">purchase now</a>
                        </div>
                    </div>
                    <!-- LAYER 8 -->
                    <div class="tp-caption rs-right sfl str tp-resizeme" data-x="840" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2400" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left dib lp1 ml15">
                            <a class="button1 btn-fs-18 blue-1 fwn lh1 bg-white btn-tfc btn-br4 hwhite hbgblue" href="#">read more</a>
                        </div>
                    </div>
                </li>
                <!-- Slide3 -->
                <li data-transition="slideright" data-slotamount="10" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="<?= $theme_url; ?>/images/slider/slide-3.jpg" alt="slide">
                    <!-- LAYERS -->

                    <!-- LAYER 1 -->
                    <div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="center" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-3-1.png" alt="slide">
                    </div>
                    <!-- LAYER 2 -->
                    <div class="tp-caption rs-right sft stt tp-resizeme" data-x="590" data-y="277" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInOutQuad" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-3-2.png" alt="slide">
                    </div>
                    <!-- LAYER 3 -->
                    <div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="337" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-3-3.png" alt="slide">
                    </div>
                    <!-- LAYER 4 -->
                    <div class="tp-caption rs-right sft stt tp-resizeme" data-x="580" data-y="107" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInOutQuad" style="z-index: 9;">
                        <img src="<?= $theme_url; ?>/images/slider/slide-3-4.png" alt="slide">
                    </div>
                    <!-- LAYER 5 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
                        <div class=" sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
                            خوش آمدید <span class="yallow-1 sub-title-18 ffm">لیست ها</span> html TEMplate
                        </div>
                    </div>
                    <!-- LAYER 6 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInBack" style="z-index: 9;">
                        <div class="title-48 cwhite tx-left fwb lp2 lh1 ffm">
                            AMAZING classified
                        </div>
                    </div>
                    <!-- LAYER 7 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
                        <div class="title-48 cwhite tx-left fwb lp2 lh1 ffm">
                            <span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">html</span> Template
                        </div>
                    </div>
                    <!-- LAYER 8 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2500" data-easing="easeInBack" style="z-index: 9;">
                        <div class="text-14 cwhite tx-left fwn lp1 lh4 ffm">
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit sed do eiusmod.
                        </div>
                    </div>
                    <!-- LAYER 9 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2800" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left dib lp1">
                            <a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite" href="#">purchase now</a>
                        </div>
                    </div>
                    <!-- LAYER 10 -->
                    <div class="tp-caption rs-left sfl str tp-resizeme" data-x="190" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="3000" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left dib lp1 ml15">
                            <a class="button1 btn-fs-18 blue-1 fwn lh1 bg-white btn-tfc btn-br4 hwhite hbgblue" href="#">read more</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--================================SEARCH FORM SECTION ==========================================-->

<section id="search-form">
    <div class="container">
        <div class="search-form-wrap">
            <form class="clearfix" action="#">
                <div class="input-field-wrap pull-left">
                    <input class="search-form-input" name="key-word" placeholder="enter keyword" type="text"/>
                </div>
                <div class="select-field-wrap pull-left">
                    <select class="search-form-select" name="location" >
                        <option class="options" value="all-locations">همه مکان ها</option>
                        <option class="options" value="america">America</option>
                        <option class="options" value="canada">Canada</option>
                        <option class="options" value="france">France</option>
                        <option class="options" value="germane ">germane</option>
                        <option class="options" value="russia">Russia</option>
                        <option class="options" value="china">china</option>
                    </select>
                </div>
                <div class="select-field-wrap pull-left">
                    <select class="search-form-select" name="categories" >
                        <option class="options" value="all-categories">all categories</option>
                        <option class="options" value="america">business</option>
                        <option class="options" value="canada">free lancing</option>
                        <option class="options" value="france">web development</option>
                        <option class="options" value="germane ">designing</option>
                        <option class="options" value="russia">wordpress</option>
                        <option class="options" value="china">bootstrap</option>
                    </select>
                </div>
                <div class="submit-field-wrap pull-left">
                    <input class="search-form-submit bgyallow-1 white" name="key-word" type="submit"/>
                </div>
            </form>
        </div>
    </div>
</section>

<!--================================FEATURE LISTING SECTION==========================================-->

<section class="feature-section padding-top-20 padding-bottom-70">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>تبلیغات پربازدید</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->
    </div><!-- section container end -->
    <div class="container-fluid"><!-- section container -->
        <div class="feature-wrap">
            <ul class="feature-slider clearfix">
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/01.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgyallow-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Account Required</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgyallow-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/02.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgblue-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Doctor Available</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgblue-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/03.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bggreen-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bggreen-1" href="#"><i class="fa fa-paper-plane white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">هتل & مسافرت</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> ایران</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bggreen-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/04.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgorange-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Meeting partner</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgorange-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/05.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bggreen-2">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">SALE MY Property</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bggreen-2"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/01.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgyallow-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Account Required</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgyallow-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/02.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgblue-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Doctor Available</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgblue-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/03.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bggreen-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bggreen-1" href="#"><i class="fa fa-paper-plane white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bggreen-1"></div>
                </li><!-- /.ITEM -->
                <li class="item"><!-- .ITEM -->
                    <div class="feature-item">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/carousel/04.jpg" alt="feature item"/>
                            <div class="feature-overlay">
                                <div class="feature-overlay-inner rgba-bgorange-1">
                                    <div class="overlay-content">
                                        <ul class="feature-links">
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-content clearfix">
                            <div class="feature-meta-cat">
                                <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                            </div>
                            <div class="feature-title">
                                <h6><a href="single-listing.html">Meeting partner</a></h6>
                            </div>
                            <div class="feature-location pull-left"><!-- location-->
                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                            </div><!-- location end-->
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="5"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    <div class="listing-border-bottom bgorange-1"></div>
                </li><!-- /.ITEM -->
            </ul>
        </div>
    </div>
</section>


<!--================================LISTING SECTION ==========================================-->
<section class="listing-section padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>تبلیغات</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->
        <div class="add-listing-wrapper">
            <div class="add-listing-nav shadow-1">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                        <div class="listing-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#latest-listing">Latest ads</a></li>
                                <li><a data-toggle="tab" href="#recent-listing">Recent ads</a></li>
                                <li><a data-toggle="tab" href="#popular-listing">popular ads</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                        <div class="view-switcher">
                            <ul>
                                <li class="gridview active"><i class="fa fa-th"></i></li>
                                <li class="listview"><i class="fa fa-th-list"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-main gridview tab-content padding-top-50">
                <div id="latest-listing" class="tab-pane active">
                    <?=
                    common\widgets\AdsView::widget([
                        'pjax' => true,
                    ])
                    ?>
                </div>
                <div id="recent-listing" class="tab-pane">
                    <div class="listing-wrapper row">
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/01.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgyallow-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Looking for a job</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgyallow-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/02.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgblue-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Doctor Available</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgblue-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/03.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-2">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">SALE MY Property</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-2"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/04.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgpurpal-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgpurpal-1" href="#"><i class="fa fa-eye white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Beauty & Spas</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgpurpal-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/05.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgorange-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Meeting partner</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgorange-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/06.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/07.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgred-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgred-1" href="#"><i class="fa fa-cutlery white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">i need some food</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgred-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/08.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-1" href="#"><i class="fa fa-paw white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">i love my pet</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-1"></div>
                        </div><!-- /.ITEM -->
                    </div>
                </div>
                <div id="popular-listing" class="tab-pane">
                    <div class="listing-wrapper row">
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/01.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgyallow-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Looking for a job</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgyallow-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/02.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgblue-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Doctor Available</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgblue-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/03.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-2">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">SALE MY Property</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-2"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/04.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgpurpal-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgpurpal-1" href="#"><i class="fa fa-eye white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Beauty & Spas</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgpurpal-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/05.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgorange-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Meeting partner</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgorange-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/06.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/07.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bgred-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bgred-1" href="#"><i class="fa fa-cutlery white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">i need some food</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bgred-1"></div>
                        </div><!-- /.ITEM -->
                        <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
                            <div class="listing-item clearfix">
                                <div class="figure">
                                    <img src="images/listings/270x220/08.jpg" alt="listing item"/>
                                    <div class="listing-overlay">
                                        <div class="listing-overlay-inner rgba-bggreen-1">
                                            <div class="overlay-content">
                                                <ul class="listing-links">
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                    <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                    <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-content clearfix">
                                    <div class="listing-meta-cat">
                                        <a class="bggreen-1" href="#"><i class="fa fa-paw white"></i></a>
                                    </div>
                                    <div class="listing-title">
                                        <h6><a href="single-listing.html">i love my pet</a></h6>
                                    </div>
                                    <div class="listing-disc">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                                    </div>
                                    <div class="listing-location pull-left"><!-- location-->
                                        <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                        <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                    </div><!-- location end-->
                                    <div class="star-rating pull-right"><!-- rating-->
                                        <div class="score-callback" data-score="5"></div>
                                    </div><!-- rating end-->
                                </div>
                            </div>
                            <div class="listing-border-bottom bggreen-1"></div>
                        </div><!-- /.ITEM -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section container end -->
</section>

<!--================================LOCATION SECTION==========================================-->

<section class="location-section padding-top-70 padding-bottom-40 bgwhite">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>EXPLORE THE LOCATIONS</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->
        <div class="location-wrapper style1">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
                    <div class="location-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/location/01.jpg" alt="location"/>
                            <div class="location-content-1 clearfix">
                                <div class="location-icon">
                                    <i class="fa fa-map-marker bgblue-1 white"></i>
                                </div>
                                <div class="location-title-disc">
                                    <h5>شهر تهران</h5>
                                    <a class="number-adds" href="#">5 تبلیغ موجود</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--blog entry column end-->
                <div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
                    <div class="location-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/location/02.jpg" alt="location"/>
                            <div class="location-content-1 clearfix">
                                <div class="location-icon">
                                    <i class="fa fa-map-marker bgblue-1 white"></i>
                                </div>
                                <div class="location-title-disc">
                                    <h5>new york city</h5>
                                    <a class="number-adds" href="#">5 تبلیغ موجود</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/location/02.jpg" alt="location"/>
                            <div class="location-content-1 clearfix">
                                <div class="location-icon">
                                    <i class="fa fa-map-marker bgblue-1 white"></i>
                                </div>
                                <div class="location-title-disc">
                                    <h5>new york city</h5>
                                    <a class="number-adds" href="#">5 تبلیغ موجود</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--blog entry column end-->
                <div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
                    <div class="location-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/location/01.jpg" alt="location"/>
                            <div class="location-content-1 clearfix">
                                <div class="location-icon">
                                    <i class="fa fa-map-marker bgblue-1 white"></i>
                                </div>
                                <div class="location-title-disc">
                                    <h5>new york city</h5>
                                    <a class="number-adds" href="#">5 تبلیغ موجود</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--blog entry column end-->
            </div>
        </div>
    </div><!-- section container end -->
</section>
<!--================================FUNFACTS COUNTER SECTION==========================================-->

<section id="funfact" class=" padding-top-150 padding-bottom-100" >
    <div class="container">
        <div class="row padding-bottom-20" id="funfact-1">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                <div class="funfact-1 color-1  clearfix">
                    <div class="fun-wrap">
                        <div class="count" id="items" data-to="160" data-speed="4000">160</div>
                        <div class="funfact-divider"></div>
                        <div class="funfact"><p> آیتم</p></div>
                    </div>
                </div>
            </div><!-- /.col-md-3 col -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                <div class="funfact-1 color-1  clearfix">
                    <div class="fun-wrap">
                        <div class="count" id="location" data-to="210" data-speed="4000">210</div>
                        <div class="funfact-divider"></div>
                        <div class="funfact"><p> مکان</p></div>
                    </div>
                </div>
            </div><!-- /.col-md-3 col -->  				
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                <div class="funfact-1 color-1  clearfix">
                    <div class="fun-wrap">
                        <div class="count" id="projects" data-to="795" data-speed="4000">795</div>
                        <div class="funfact-divider"></div>
                        <div class="funfact"><p> پروژه</p></div>
                    </div>
                </div>
            </div><!-- /.col-md-3 col -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                <div class="funfact-1 color-1  clearfix">
                    <div class="fun-wrap">
                        <div class="count" id="events" data-to="158" data-speed="4000">158</div>
                        <div class="funfact-divider"></div>
                        <div class="funfact"><p> رویدادها</p></div>
                    </div>
                </div>
            </div><!-- /.col-md-3 col -->
        </div><!-- /#funfact-1 -->
    </div><!-- container end -->
</section>

<!--================================CATEGOTY SECTION==========================================-->

<section class="categories-section padding-top-70 padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>دسته بندی</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->
        <div class="row category-section-wrap cat-style-1">
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>سلامتی و تناسب <i class="fa fa-heart blue-1"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>هتل و مسافرت <i class="fa fa-paper-plane green-1"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>jobs <i class="fa fa-suitcase yallow-1"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>beauty & spas <i class="fa fa-eye purpal-1"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>Real estate <i class="fa fa-home green-2"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
            <div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <h5>entertainment <i class="fa fa-female orange-1"></i></h5>
                    <div class="cat-list-wrap">
                        <ul class="cat-list">
                            <li><a href="#">activities <span>(4)</span></a></li>
                            <li><a href="#">Fitness <span>(2)</span></a></li>
                            <li><a href="#">Gym <span>(3)</span></a></li>
                            <li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
                            <li><a href="#">Parlours <span>(1)</span></a></li>
                            <li><a href="#">Others<span>(3)</span></a></li>
                            <li><a class="view-all" href="#">view all</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- category column end -->
        </div>
    </div><!-- section container end -->
</section>

<!--================================BLOG SECTION==========================================-->

<section class="blog-section padding-top-70 padding-bottom-40 bgwhite">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>our blog</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->
        <div class="blog-wrapper">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12"><!--blog entry column-->
                    <div class="blog-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/news/home/01.jpg" alt="blog entry"/>
                        </div>
                        <div class="entry-content">
                            <div class="entry-title">
                                <h6>Take me out of country</h6>
                            </div>
                            <div class="entry-metas">
                                <a class="date" href="#">March 16, 2015</a>
                                <a class="love bggreen-1" href="#"><i class="fa fa-heart white"></i></a>
                                <a class="permalink bgyallow-1" href="#"><i class="fa fa-share white"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--blog entry column end-->
                <div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
                    <div class="blog-entry">
                        <div class="figure">
                            <img src="<?= $theme_url ?>/images/news/home/02.jpg" alt="blog entry"/>
                        </div>
                        <div class="entry-content">
                            <div class="entry-title">
                                <h6>Just a New Listing</h6>
                            </div>
                            <div class="entry-metas">
                                <a class="date" href="#">March 16, 2015</a>
                                <a class="love bggreen-1" href="#"><i class="fa fa-heart white"></i></a>
                                <a class="permalink bgyallow-1" href="#"><i class="fa fa-share white"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--blog entry column end-->
            </div>
        </div>
    </div><!-- section container end -->
</section>

<!--================================ PARTNER SECTION ==========================================-->

