<?php
$this->title = "جزییات تبلیغ";
?>
<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
    <h4 class="white">health &amp; fitness</h4>
</div>
<section class="aside-layout-section padding-top-70 padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="row"><!-- row -->
            <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                <div class="listing-single padding-bottom-40">
                    <div class="single-listing-wrap">
                        <div class="single-listing-scroller  bgwhite shadow-1">
                            <!-- declare a slideshow -->
                            <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-pager="#adv-custom-pager" data-cycle-pager-template="<a href='#'><img src='{{src}}'></a>" style="position: relative;">
                                <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/site/ads-image', 'img' => $adsModel->image]) ?>" alt="item" class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: hidden;">

                                <a class="cat-tag bgblue-1 white" href="#"><i class="fa fa-heart"></i></a>
                                <div class="listing-main-content">
                                    <h4><?= $adsModel->title ?></h4>
                                    <p><i class="fa fa-map-marker yallow-1"></i>867 Divisadero Street, San Francisco, CA 94117, USA</p>
                                    <div class="social">
                                        <ul>
                                            <li><a class="bggreen-1 white" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="bgyallow-1 white" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/site/ads-image', 'img' => $adsModel]); ?>" alt="item" class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: visible;"><img src="images/listings/details/02.jpg" alt="item" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; visibility: hidden;"><img src="images/listings/details/03.jpg" alt="item" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; visibility: hidden;"><img src="images/listings/details/04.jpg" alt="item" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 96; visibility: hidden;"><img src="images/listings/details/05.jpg" alt="item" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 95; visibility: hidden;"><img src="images/listings/details/06.jpg" alt="item" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 94; visibility: hidden;"></div>
                            <!-- empty element for pager links -->
                            <div id="adv-custom-pager" class="center external"><a href="#" class="cycle-pager-active"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/01.jpg"></a><a href="#"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/02.jpg"></a><a href="#"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/03.jpg"></a><a href="#"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/04.jpg"></a><a href="#"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/05.jpg"></a><a href="#"><img src="file:///C:/xampp/htdocs/advanced/frontend/web/themes/listing/images/listings/details/06.jpg"></a></div>
                        </div>
                        <div class="listing-details">
                            <div class="row tabs">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tab-link current" data-tab="tab-1">
                                        <div class="link-top bgblue-1"></div>
                                        <i class="fa fa-home bgblue-1 white"></i>توضیحات
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tab-link" data-tab="tab-2">
                                        <div class="link-top bggreen-1"></div>
                                        <i class="fa fa-map-marker bggreen-1 white"></i>map view
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tab-link" data-tab="tab-3">
                                        <div class="link-top bgyallow-1"></div>
                                        <i class="fa fa-star bgyallow-1 white"></i>REVIEWS
                                    </div>
                                </div>
                            </div>
                            <div id="tab-1" class="tab-content current">
                                <h5>توضیحات</h5>
                                <p>
                                    <?= $adsModel->description ?>
                                    <br>
                                    <br>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <h5>MAP</h5>
                                <div id="map" style="overflow:visible !important;"></div>
                            </div>
                            <div id="tab-3" class="tab-content">
                                <p>No review yet.</p>
                            </div>	
                        </div>

                        <div class="listing-contact-detail-wrap">
                            <div class="listing-contact-section-title">
                                <h5>تماس</h5>
                            </div>
                            <?php if($profile = isset(Yii::$app->user->identity->profile) ? Yii::$app->user->identity->profile: null){ ?>
                            
                            <div class="listing-contact-section-table">
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">آدرس</li>

                                        <li class="details"><?= $profile->address ?> </li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">موبایل</li>
                                        <li class="details"><?= $profile->tel_number ?></li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">شناسه تلگرام</li>
                                        <li class="details"><?= $profile->telegram_id ?></li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">ایمیل</li>
                                        <li class="details"><?= $profile->address ?></li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">وب سایت</li>
                                        <li class="details"><?= $profile->website ?>/</li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">دسته بندی</li>
                                        <li class="details">Health &amp; Fitness</li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">مکان</li>
                                        <li class="details">London, UK </li>
                                    </ul>
                                </div>
                                <div class="listing-contact-table-field">
                                    <ul>
                                        <li class="info">تگ ها</li>
                                        <li class="details">
                                            <?= $adsModel->tags ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php 
                            }
                            else{
                                echo "<p>اطلاعاتی وجود ندارد</p>";
                            }
                            ?>
                        </div>

                        <div class="listing-feature-section">
                            <div class="listing-feature-section-title">
                                <h5>FEATURES</h5>
                            </div>
                            <div class="row listing-feature-wrapper clearfix">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Air conditioning</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Outdoor Seating</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Takes Reservation</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Wifi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-times bgred-3 white"></i>
                                        <p>Accepts Credit Cards</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Alcohol</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Good for Groups</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-field">
                                        <i class="fa fa-check bggreen-4 white"></i>
                                        <p>Take out</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-video-section bgwhite">
                            <div class="listing-video-section-title">
                                <h5>ویدیو</h5>
                            </div>
                            <div class="listing-video-wrapper clearfix">  
                                <div class="video">
                                    <img class="video-banner" src="images/video-cover.jpg" alt="video">
                                    <div class="video-btn">
                                        <a href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=11b1c2&amp;wmode=opaque" class="html5lightbox nohover" data-width="570" data-height="320" title="title here "><i class="fa fa-play blue-1 "></i></a>
                                    </div>
                                </div>			
                            </div>
                        </div>

                        <div class="listing-owner-section">
                            <div class="listing-owner-section-title">
                                <h5>اطلاعات مجری</h5>
                            </div>
                            <div class="listing-owner-wrapper clearfix">
                                <div class="listing-owner-figure pull-left">
                                    <img src="images/listings/owner/01.jpg" alt="owner">
                                </div>
                                <div class="listing-owner-content pull-right">
                                    <a class="user" href="#"><i class="fa fa-user bgblue-1 white"></i>Designsvilla</a>
                                    <a class="contact-number" href="#"><i class="fa fa-phone bgblue-1 white"></i>(010) 1234 5678</a>
                                    <a class="owner-adress" href="#"><i class="fa fa-map-marker bgblue-1 white"></i>Wiston 23rd street # 2 London, UK </a>
                                    <a class="view-profile white bgblue-1" href="#">view profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- content area end -->
            <div class="col-md-3 col-sm-4 col-xs-12" style="text-align: right"><!-- sidebar column -->
                <div class="sidebar sidebar-wrap">
                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bgred-1"></span>لیست های جستجو</h5>
                        </div>
                        <div class="sidebar-widget-content listing-search-bar  clearfix">
                            <div class="sidebar-listing-search-wrap">
                                <form action="#">
                                    <p class="blue-1">جستجو برای :</p>
                                    <select class="sidebar-listing-search-select">
                                        <option>ALL CATEGORIES</option>
                                        <option>ALL CATEGORIES</option>
                                        <option>ALL CATEGORIES</option>
                                    </select>
                                    <input class="sidebar-listing-search-input" placeholder="Search" name="search" type="text">
                                    <p class="blue-1">جستجوی نزدیک :</p>
                                    <select class="sidebar-listing-search-select">
                                        <option>ALL CATEGORIES</option>
                                        <option>ALL CATEGORIES</option>
                                        <option>ALL CATEGORIES</option>
                                    </select>

                                    <input class="sidebar-listing-search-input" placeholder="Search" name="search" type="text">
                                    <p>Search In Radius</p>
                                    <div id="slider-range-min"></div>
                                    <p><a href="#">Advanced Search</a></p>
                                    <div class="listing-search-btn">
                                        <input class="sidebar-listing-search-btn white bgblue-1" value="SEARCH" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bgyallow-1"></span>recent posts</h5>
                        </div>
                        <div class="sidebar-widget-content recent-post clearfix">
                            <div class="recent-post-entry clearfix">
                                <div class="recent-entry-figure">
                                    <img src="images/news/thumb/70/01.jpg" alt="recent post">
                                </div>
                                <div class="recent-entry-content">
                                    <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                    <p class="recent-entry-disc">Welcome Dirctorium</p>
                                    <p class="recent-entry-meta date">07 Sep, 2015</p>
                                </div>
                            </div>
                            <div class="recent-post-entry clearfix">
                                <div class="recent-entry-figure">
                                    <img src="images/news/thumb/70/02.jpg" alt="recent post">
                                </div>
                                <div class="recent-entry-content">
                                    <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                    <p class="recent-entry-disc">Welcome Dirctorium</p>
                                    <p class="recent-entry-meta date">07 Sep, 2015</p>
                                </div>
                            </div>
                            <div class="recent-post-entry clearfix">
                                <div class="recent-entry-figure">
                                    <img src="images/news/thumb/70/03.jpg" alt="recent post">
                                </div>
                                <div class="recent-entry-content">
                                    <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                    <p class="recent-entry-disc">Welcome Dirctorium</p>
                                    <p class="recent-entry-meta date">07 Sep, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bggreen-1"></span>opening hours</h5>
                        </div>
                        <div class="sidebar-widget-content opening-hours  clearfix">
                            <div class="sidebar-opening-hours-widget">
                                <div class="opening-hours-field clearfix">
                                    <span>sunday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>monday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>tuesday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>wednesday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>thursday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>friday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                                <div class="opening-hours-field clearfix">
                                    <span>saturday</span>
                                    <span>9:00 am ~ 02:00 pm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bgblue-1"></span>ADVERTISING</h5>
                        </div>
                        <div class="sidebar-widget-content advertise  clearfix">
                            <div class="sidebar-image-ads">
                                <a href="#"><img src="images/01.jpg" alt="custom-image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bggreen-2"></span>تگ های مورد نظر</h5>
                        </div>
                        <div class="sidebar-widget-content tags  clearfix">
                            <div class="sidebar-tag-cloud">
                                <ul>
                                    <?php
                                    $tags = explode(',', $adsModel->tags);
                                    foreach ($tags as $tag):
                                    ?>
                                    <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/ads/tag', 'tag' => $tag]) ?>"><?= $tag ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </div><!-- section container end -->
</section>