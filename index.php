<?php
$GLOBALS['title'] = "DeepPower";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>


<section class="banner">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./assets/img/hero-1.png" class="d-none d-md-block w-100" alt="hero">
                <img src="./assets/img/hero-1-mobile-sm.jpg" class="d-md-none w-100" alt="hero">
            </div>
            <!-- <div class="carousel-item active">
                <img src="./assets/img/hero-1.jpg" class="d-block w-100" alt="hero">
            </div>-->
            <!-- <div class="carousel-item">
                <img src="./assets/img/hero-2.jpg" class="d-block w-100" alt="hero">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/hero-3.jpg" class="d-block w-100" alt="hero">
            </div>  -->
        </div>
    </div>
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bannerText">
                        <h1>Unlimited Clean Energy Below Our Feet</h1>
                        <p>DeepPower is developing XDrill<sup>TM</sup>, a breakthrough geothermal drilling technology to access the Earth’s unlimited source of clean heat energy, which can be used to produce unlimited, low-cost, green electricity anywhere in the world. </p>
                        <a href="deeppower-drilling-technology.php" class="theme-btn d-inline-flex">
                            <span>Learn More</span>
                            <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                            </svg>
                        </a>

                        <div class="bannerText__percentage">
                            <h2>600% <span>Faster</span></h2>
                            <h6><span class="d-sm-none">Faster</span> than conventional drilling</h6>
                        </div>
                        <div class="carousel-indicators d-none d-sm-flex" id="carousel-indicators1">

                        </div>



                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-watchbtn">
                        <img src="./assets/img/watch-video.svg" alt="watch video">
                        <a href="https://www.youtube.com/watch?v=ju-04Zl9T3Q" class="popup-youtube"></a>
                    </div>
                </div>
            </div>

            <!-- <div class="mobile-action d-sm-none">
                <a href="deeppower-drilling-technology.php" class="theme-btn">
                    <span>Learn More</span>
                    <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                    </svg>
                </a>
                <div class="carousel-indicators justify-content-center" id="carousel-indicators2">

                </div>
            </div> -->
        </div>
    </div>
</section>


<section class="dp-carousel">
    <div class="container">
        <div class="dp-carousel-content">
            <p>The Earth’s molten core is as hot as the Sun as
                evidenced by the eruption of volcanos and geysers
                such as Old Faithful in Yellowstone National Park.
                Harnessing just 0.1% of that heat energy can power
                humanity for 2 million years. </p>
            <p>Current state-of-the-art drilling technology cannot drill
                deep enough to make geothermal cost effective at a
                global scale. We are developing XDrill<sup>TM</sup>, a breakthrough drilling technology to boldly go where
                no humans have gone before. The deeper we go the
                more heat energy we can unleash.</p>
            <p> Unlike large area solar and wind farms, a 9-inch hole
                drilled 5 miles deep can produce the same amount of
                power as 320 acres of solar panels. By plugging into
                this power deep within the Earth, we aim to provide
                direct access to an unlimited source of constant heat
                energy which can be used to produce unlimited, low-cost, green
                electricity anywhere in the world.</p>
        </div>
    </div>
    <!-- <div class="dp-carousel-main">
       <?php  /*
        foreach ($videos as $video) {
            if ($video['category'] !== 'short-video') {
                echo "<div class=\"dp-carousel-item\">
                <div class=\"podcast-item\">
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <h2>{$video['date']} - {$video['title']}</h2>
                    
                </div>
                </div>";
            }
        }
      */  ?>
    </div> -->
</section>

<div class="slideshow js-slideshow">
    <?php
    foreach ($videos as $video) {
        if (in_array($video['category'], ['news-commentary', 'ceo-podcast'])) {
            echo "<div class=\"slide\">
                <div class=\"podcast-item\">
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">

                    <a href=\"https://www.youtube.com/watch?v={$video['videoID']}\" class=\"popup-youtube\">
                <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                <circle cx='32' cy='32' r='32' fill='#51ba6b'/>
                <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
            </svg>
                </a>
                    </div>";

            $title = isset($video['date']) && !empty($video['date']) ? "{$video['date']} - {$video['title']}" : $video['title'];

            echo "<h2>{$title}</h2>
                
            </div>
        </div>";
        }
    }
    ?>
</div>

<!-- <div class=\"podcast-action\">
                        <a href=\"https://www.youtube.com/watch?v={$video['videoID']}\" class=\"popup-youtube\">Watch Video</a>" . (isset($video['date']) && !empty($video['date']) ? "<span>{$video['date']}</span>" : "")
                        . "
                    </div> -->

<!-- <section class="hlVideo">
    <div class="container">
        <div class="hlVideo__content">
            <h2>DeepPower CEO Chats – Andrew Van Noy with Joseph Seman-Graves</h2>
            <img src="./assets/img/thumbnail.jpg" alt="thumbnail">
            <p>Hear first hand from one of the leaders in the geothermal industry every CEO Chat.</p>
        </div>
    </div>
</section> -->

<!-- <hr class="halfDivider"> -->

<section class="hnewslesster">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="ceoMsg">
                    <div class="ceoMsg__face">
                        <img src="./assets/img/ceo.png" alt="ceo">
                    </div>
                    <div class="ceoMsg__msg">
                        <h2>Podcast</h2>
                        <p>Hear first hand from one of the leaders in the geothermal industry every podcast.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- <form action="./php/subscriber.php" method="POST" autocomplete="off">
                    <input type="email" name="email" id="email" placeholder="Subscribe to our podcast" class="form-control">
                    <button class="theme-btn" type="submit">Go</button>
                </form>
 -->

                <div id="mc_embed_shell">
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">

                    <div id="mc_embed_signup">
                        <form action="https://deeppower.us8.list-manage.com/subscribe/post?u=610eea8bece1c59e96ae57abd&amp;id=7d5dcb6627&amp;f_id=007678e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <input type="email" name="EMAIL" class="required email form-control" placeholder="Subscribe to our podcast" id="mce-EMAIL" required="" value="">
                                </div>

                                <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_610eea8bece1c59e96ae57abd_7d5dcb6627" tabindex="-1" value="" spellcheck="false" data-ms-editor="true"></div>
                                <div class="clear"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="theme-btn" value="Go"></div>
                            </div>
                        </form>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display: none;"></div>
                            <div class="response" id="mce-success-response" style="display: none;"></div>
                        </div>
                    </div>
                    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                    <script type="text/javascript">
                        (function($) {
                            window.fnames = new Array();
                            window.ftypes = new Array();
                            fnames[0] = 'EMAIL';
                            ftypes[0] = 'email';
                            fnames[3] = 'ADDRESS';
                            ftypes[3] = 'address';
                            fnames[4] = 'PHONE';
                            ftypes[4] = 'phone';
                        }(jQuery));
                        var $mcj = jQuery.noConflict(true);
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lvGas">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="lvGas__img">
                    <img src="./assets/img/lv-img.png" alt="lv">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lvGas__content">
                    <h2>Leveraging the $5 Trillion Global Oil & Gas Industry</h2>
                    <p>The century old $5 trillion global oil & gas industry includes companies that have mastered the art of drilling. They have global scale infrastructure and the people needed for drilling, management and operations. However, their drilling technologies are not designed for the high heat, high pressure and high corrosion conditions of deep geothermal.</p>
                    <a href="technology.php" class="theme-btn">
                        <span>Read More</span>
                        <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="technology">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <span class="subtitle">Technology</span>
                <div class="lvGas__content ms-0">
                    <h2>DeepPower Platform</h2>
                    <p>We are developing a suite of breakthrough drilling technologies, based on existing oil & gas drilling techniques, to boldly go where no oil rig has gone before.</p>
                    <a href="technology.php" class="theme-btn">
                        <span>Discover</span>
                        <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/drilling.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Drilling</h5>
                            <p>We start with the tried and true concept of an oil and gas exploration drill. Then, we change the method and geometry of drilling in such a way that we reduce the stress around the wellbore – in effect weakening the rock.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/casing.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Casing</h5>
                            <p>We intend to use traditional oil and gas casing down several miles, then switch to our special single mono-bore casing to go all the way to superhot rock.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/coating.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Coating</h5>
                            <p>At about 5 to 6 miles down, the superhot rock is approximately 400<sup>o</sup>C. Water becomes very corrosive and has cause many early geothermal systems to fail. We intend to develop high performance anti-corrosion coatings to protect well casings, valves, heat exchangers and other equipment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="enRevolution">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>An Energy Revolution in the Making</h2>
            </div>
            <div class="col-lg-6">
                <p>Superhot rock geothermal energy is a visionary technology deserving of investment, and yet almost entirely unrecognized in the decarbonization debate. It has the potential to meet long-term demands for zero-carbon, always-on power, and can generate hydrogen for transportation fuel and other applications. Unlocking the potential of this energy source could expand our options and potentially carve a path forward to replace fossil fuels.</p>
            </div>
        </div>
        <div class="enRevolution__energies">
            <h5>The value of superhot rock energy</h5>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="energyList">
                        <li>Competitive power</li>
                        <li>Endless supply</li>
                        <li>Always on</li>
                        <li>Small footprint</li>
                        <li>Pivot from fossil energy</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="energyList">
                        <li>Repower fossil power plants</li>
                        <li>No fuel cost</li>
                        <li>Zero gases</li>
                        <li>Energy security</li>
                        <li>Accessible worldwide</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="enRevolution__btn">
            <a href="https://www.catf.us/work/superhot-rock/" target="_blank" class="theme-btn">
                <span>Read More</span>
                <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="superRock">
    <div class="container">
        <h2>Superhot rock energy provides potential to address both climate change and energy security</h2>
        <img src="./assets/img/rock.jpg" alt="rock">
        <p>As COP27 approaches amidst a global energy crisis and world leaders turn their focus to addressing both energy security and climate change, a new report from Clean Air Task Force (CATF) details a potentially groundbreaking tool to manage both: superhot rock energy.</p>
        <p>A form of advanced geothermal energy that uses innovative deep drilling techniques, superhot rock energy has the potential to provide abundant, always available, renewable, cost-competitive, carbon-free energy virtually everywhere on Earth — all with a land-use footprint much smaller than that of other energy sources.</p>
        <p>The report provides an overview of existing and announced projects in Japan, Iceland, Italy, Mexico, New Zealand, and the U.S., and details the advances needed to reach commercialization – including improvements to thermal reservoir creation, well construction, downhole power and remote sensing tools, and surface power production.</p>
        <a href="https://www.catf.us/2022/10/superhot-rock-energy-provides-potential-address-both-climate-change-energy-security/" target="_blank" class="theme-btn">
            <span>Read More</span>
            <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
            </svg>
        </a>
    </div>
</section>

<section class="dSection">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 position-relative">
                <div class="dSection__box">
                    <h5>Geothermal Technologies</h5>
                    <p>Increased access to geothermal resources. Reduced costs and improved economics for geothermal projects Improved education and outreach about geothermal energy.

                    </p>
                    <p>The analysis projected that, through technology improvements, geothermal electricity generation capacity has the potential to increase to more than 60 gigawatts by 2050—providing 8.5% of all U.S. electricity generation.</p>
                </div>
                <div class="dSection__img">
                    <img src="./assets/img/geothermal.jpg" alt="geothermal">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dSection__content">
                    <h3>Increasing Geothermal Electricity Generation 26-Fold by 2050</h3>
                    <p>To evaluate the potential for geothermal energy to contribute to America’s energy future, the U.S. Department of Energy’s Geothermal Technologies Office initiated the GeoVision analysis—a detailed research effort to explore opportunities for increased geothermal deployment and the pathways necessary to overcome technical and non-technical barriers to such deployment. The analysis evaluated opportunities for successful geothermal deployment based on three key objectives.</p>
                    <a href="https://www.energy.gov/eere/geothermal/geovision" target="_blank" class="theme-btn">
                        <span>Read More</span>
                        <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="technology themebg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <span class="subtitle">Benefits</span>
                <div class="lvGas__content ms-0">
                    <h2>Geothermal Energy</h2>
                    <p>To realize geothermal energy’s full potential, stakeholders must reduce risk and costs by overcoming significant technical and non-technical barriers.</p>
                    <a href="technology.php" class="theme-btn">
                        <span>Discover</span>
                        <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/drilling.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Drilling</h5>
                            <p>We start with the tried and true concept of an oil and gas exploration drill. Then, we change the method and geometry of drilling in such a way that we reduce the stress around the wellbore – in effect weakening the rock.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/casing.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Casing</h5>
                            <p>We intend to use traditional oil and gas casing down several miles, then switch to our special single mono-bore casing to go all the way to superhot rock.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="technology__box">
                            <div class="technology__boximg d-none d-md-block">
                                <img src="./assets/img/coating.jpg" alt="drilling">
                            </div>
                            <h5>DeepPower Coating</h5>
                            <p>At about 5 to 6 miles down, the superhot rock is approximately 400<sup>o</sup>C. Water becomes very corrosive and has cause many early geothermal systems to fail. We intend to develop high performance anti-corrosion coatings to protect well casings, valves, heat exchangers and other equipment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="usDepart">
    <!-- <img src="./assets/img/US-Department-of-Energy.jpg" class="usDepart__img d-block w-100" alt="us"> -->
    <div class="container">
        <div class="usDepart__content">
            <h2>U.S. Department of Energy’s geothermal Earthshot is boon for climate action, with superhot rock energy poised for breakthrough</h2>
            <p>As COP27 approaches amidst a global energy crisis and world leaders turn their focus to addressing both energy security and climate change, a new report from Clean Air Task Force (CATF) details a potentially groundbreaking tool to manage both: superhot rock energy.</p>
            <a href="https://www.catf.us/2022/09/us-department-energys-geothermal-earthshot-boon-climate-action-superhot-rock-energy-poised-breakthrough/" target="_blank" class="theme-btn">
                <span>Discover</span>
                <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                </svg>
            </a>
        </div>
    </div>
</section>


<section class="dSection dSection-opposite dsection-img-hide">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-5">
                <div class="dSection__content">
                    <h3>Superhot rock energy could support rapid global decarbonization</h3>
                    <p>Rapid energy innovation is clearly needed now to meet the immense climate challenge. Vast amounts of reliable and dispatchable (always available) zero-carbon power will be needed to support the demand for access to energy by the growing global population.</p>
                    <a href="https://www.catf.us/2022/07/the-carbon-free-energy-resource-youve-never-heard-of-superhot-rock-energy/" target="_blank" class="theme-btn">
                        <span>Read More</span>
                        <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 position-relative">
                <div class="dSection__box">
                    <h5>How does it work?</h5>
                    <p>In a superhot rock system, water is injected deep into hot rock, heated, and returned to the Earth’s surface as steam that can be used to produce power in electric turbines or to generate hydrogen using a high temperature process.</p>
                    <p>Superhot rock is expected to produce five to ten times as much energy as the power produced from one of today’s commercial geothermal wells.</p>
                </div>
                <div class="dSection__img d-none d-sm-block">
                    <img src="./assets/img/superhot-rock.jpg" alt="geothermal">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="news pt-0">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Latest Company News</h2>
                <div class="row">
                    <div class="col-12">
                        <?php
                        $filteredCompanyNews = array_filter($news, function ($item) {
                            return $item['category'] === 'company';
                        });

                        // Sort the company news articles by date in descending order
                        usort($filteredCompanyNews, function ($a, $b) {
                            return strtotime($b['id']) - strtotime($a['id']);
                        });

                        $latestCompanyNews = array_slice($filteredCompanyNews, 0, 3);
                        foreach ($latestCompanyNews as $item) {
                            echo "<div class=\"newsItem\">
                                        <h5>{$item['title']}</h5>
                                        <p>{$item['excerpt']}</p>
                                        <div class=\"newsItem__date\">
                                            <span>{$item['date']}</span>
                                            <a href=\"single-news.php?id={$item['id']}\">Read More</a>
                                        </div>
                                    </div>";
                        } ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsItem">
                    <h2>Latest Industry News</h2>
                </div>

                <div class="row">
                    <div class="col-12">
                        <?php
                        $filteredIndustryNews = array_filter($news, function ($item) {
                            return $item['category'] === 'industry';
                        });

                        // Take the latest 4 industry news articles
                        $latestIndustryNews = array_slice($filteredIndustryNews, 0, 3);
                        foreach ($latestIndustryNews as $item) {
                            echo "
        <div class=\"newsItem\">
            <h5>{$item['title']}</h5>
            <p>{$item['excerpt']}</p>
            <div class=\"newsItem__date\">
                <span>{$item['date']}</span>
                <a href=\"single-news.php?id={$item['id']}\">Read More</a>
            </div>
        </div>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="news.php" class="theme-btn">
            <span>See All News</span>
            <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
            </svg>
        </a>
    </div>
</section>

<?php
include('footer.php'); ?>