@extends('frontend.layouts.app')
@section('content')
<!-- start slider Section -->
<section id="slider_sec">
    <div class="container">
        <div class="row">
            <div class="slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="wrap_caption">
                                <div class="caption_carousel">
                                    <h1>We are webeeo</h1>
                                    <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap_caption">
                                <div class="caption_carousel">
                                    <h1>We are Creative</h1>
                                    <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="wrap_caption">
                                <div class="caption_carousel">
                                    <h1>We Have Greate Team</h1>
                                    <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End slider Section -->

<!-- start about Section -->
<section id="abt_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>ABOUT</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="abt">
                    <p>Mauris luctus aliquet nunc quis consectetur. Curabitur elit massa, consequat vel velit sit amet, scelerisque hendrerit mi. Cras pellentesque sem turpis, quis interdum mi sagittis a. Donec mattis porttitor eleifend</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- start Counting section-->
<section id="counting_sec">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="counting_sl">
                    <i class="fa fa-user"></i>
                    <h2 class="counter">43,753</h2>
                    <h4>Happy Clients</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="counting_sl">
                    <i class="fa fa-desktop"></i>
                    <h2 class="counter">20,210</h2>
                    <h4>Complete Project</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="counting_sl">
                    <i class="fa fa-ticket"></i>
                    <h2 class="counter">43,753</h2>
                    <h4>Answered Tickets</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="counting_sl">
                    <i class="fa fa-clock-o"></i>
                    <h2 class="counter">45,105</h2>
                    <h4>Development Hours</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- start progress bar Section -->
<section id="skill_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Skill diagram</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="skills progress-bar1">
                <ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                    <li class="progress">
                        <div class="progress-bar" data-width="85">
                            Wordpress 85%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="65">
                            Graphic Design 65%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="90">
                            HTML/CSS Design 90%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="60">
                            SEO 60%
                        </div>
                    </li>
                </ul>
                <ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                    <li class="progress">
                        <div class="progress-bar" data-width="75">
                            Agencying 75%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="95">
                            App Development 95%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="70">
                            IT Consultency 70%
                        </div>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="90">
                            Theme Development 90%
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>
<!-- End progress bar Section -->

<!-- start Service Section -->
<section id="pr_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>OUR Service</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="service">
                    <i class="fa fa-globe"></i>
                    <h2>web Development</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-globe"></i>
                        <h2>web Development</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="service">
                    <i class="fa fa-paper-plane"></i>
                    <h2>E-mail marketing</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-paper-plane"></i>
                        <h2>E-mail marketing</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="service">
                    <i class="fa fa-wordpress"></i>
                    <h2>WordPress</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-wordpress"></i>
                        <h2>WordPress</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="service">
                    <i class="fa fa-paint-brush"></i>
                    <h2>Graphic Design</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-paint-brush"></i>
                        <h2>Graphic Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Section -->

<!-- start portfolio Section -->
<section id="protfolio_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Portfolio</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="portfolio-filter text-uppercase text-center">
                    <ul class="filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".web-design">Web Design</li>
                        <li data-filter=".graphic">Graphic</li>
                        <li data-filter=".photography">Photography</li>
                        <li data-filter=".motion-video">Motion video</li>
                    </ul>
                </div>

                <div class="all-portfolios">
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_06.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_01.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_02.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio graphic">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_04.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio photography">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_05.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_07.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio photography">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio web-design">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_09.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
                        <div class="single-portfolio photography">
                            <img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
                        </div>
                    </div>
                </div>


            </div>
            <div class="post_btn">
                <div class="hover_effect_btn" id="hover_effect_btn">
                    <a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- start our team Section -->
<section id="tm_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Team</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                <div class="all_team">
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
                        <h3> Jamie Catllahan <span>Designer</span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
                        <h3>Lisa Kudrow <span> Manager </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
                        <h3> John Clarance <span>   Senior Manager   </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
                        <h3>Sheena Maya<span> Developer </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
                        <h3> Jamie Catllahan <span>Designer</span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
                        <h3>Lisa Kudrow <span> Manager </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
                        <h3> John Clarance <span>   Senior Manager   </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
                        <h3>Sheena Maya<span> Developer </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
                        <h3> Jamie Catllahan <span>Designer</span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
                        <h3>Lisa Kudrow <span> Manager </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
                        <h3> John Clarance <span>   Senior Manager   </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                    <div class="sngl_team">
                        <img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
                        <h3>Sheena Maya<span> Developer </span></h3>
                        <p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End our team Section -->

<!-- start our teastimonial Section -->
<section id="tstm_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all_tstm">

                    <div class="clnt_tstm">
                        <div class="sngl_tstm">
                            <i class="fa fa-quote-right"></i>
                            <h3>what people say?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
                            <h6>- jhon deo</h6>
                        </div>
                    </div>

                    <div class="clnt_tstm">
                        <div class="sngl_tstm">
                            <i class="fa fa-quote-right"></i>
                            <h3>Clien Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
                            <h6>- shura deo</h6>
                        </div>
                    </div>
                    <div class="clnt_tstm">
                        <div class="sngl_tstm">
                            <i class="fa fa-quote-right"></i>
                            <h3>Awesome Support SIMA</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
                            <h6>- kumara deo</h6>
                        </div>
                    </div>
                    <div class="clnt_tstm">
                        <div class="sngl_tstm">
                            <i class="fa fa-quote-right"></i>
                            <h3>Theme Feature great</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
                            <h6>- dhera deo</h6>
                        </div>
                    </div>
                    <div class="clnt_tstm">
                        <div class="sngl_tstm">
                            <i class="fa fa-quote-right"></i>
                            <h3>Non conflict</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
                            <h6>- jhon deo</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End our teastimonial Section -->


<!-- start Latest post Section -->
<section id="lts_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Latest Blog</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">
                    <img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img2.jpg?10828543012475550494" alt=""/>
                    <h2>How to fix your bug</h2>
                    <p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
                    <a href="single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">
                    <img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img3.jpg?16122351990094232768" alt=""/>
                    <h2>Pellentesque nibh libero</h2>
                    <p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
                    <a href="">Read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">
                    <img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823" alt=""/>
                    <h2>pharetra eu tempor vel</h2>
                    <p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
                    <a href="">Read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="post_btn">
                <div class="hover_effect_btn" id="hover_effect_btn">
                    <a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Latest post Section -->

<!-- start pricing Section -->
<section id="pricing_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Pricing Plan</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sngl_pricing">
                    <h2 class="title_bg_1">Basic</h2>
                    <h3><span class="currency">$</span>30<span class="monuth">/  mo</span></h3>
                    <ul>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li><a href="" class="btn pricing_btn">Send</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sngl_pricing">
                    <h2 class="title_bg_2">Standerd</h2>
                    <h3><span class="currency">$</span>50<span class="monuth">/  mo</span></h3>
                    <ul>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li><a href="" class="btn pricing_btn">Send</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sngl_pricing">
                    <h2 class="title_bg_3">Extended</h2>
                    <h3><span class="currency">$</span>90<span class="monuth">/  mo</span></h3>
                    <ul>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li>30 GB of Storage</li>
                        <li><a href="" class="btn pricing_btn">Send</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End pricing Section -->


<!-- start Happy Client Section -->
<section id="clt_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Our Happy Clients</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                <div class="al_clt">
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Happy Client  Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Contact Info</h1>
                    <h2>WE???RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="cnt_form">
                    <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cnt_info">
                    <ul>
                        <li><i class="fa fa-facebook"></i><p>121 King Street, Melbourne Victoria 3000 Australia</p></li>
                        <li><i class="fa fa-envelope"></i><p>contact@info.com</p></li>
                        <li><i class="fa fa-phone"></i><p>+0987654321 (+012345678)</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact us  Section -->

<!-- start located map Section -->
<section id="ltd_map_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="map">
                    <h1>located THE MAP</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
                    <div id="slidingDiv">
                        <div class="map_area">
                            <div id="googleMap" style="width:100%;height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End located map  Section -->
@endsection
