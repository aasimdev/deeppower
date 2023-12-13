<?php
$GLOBALS['title'] = "DeepPower";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>

<section class="hnewslesster podcastt">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="ceoMsg__msg">
                    <h1>Videos</h1>
                    <p>Hear first hand from one of the leaders in the geothermal industry every podcast.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- <form action="./php/subscriber.php" method="POST" autocomplete="off">
                    <input type="email" name="email" id="email" placeholder="Subscribe to our podcast" class="form-control">
                    <button class="theme-btn" type="submit">Go</button>
                </form> -->
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

<section class="videocat">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#ceo-podcast">
                        <div class="videocat-bg">
                            <img src="./assets/img/cat-bg.png" class="w-100 d-block" alt="cat">
                        </div>
                        <span>CEO Podcast</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#news-commentary">
                        <div class="videocat-bg">
                            <img src="./assets/img/cat-bg.png" class="w-100 d-block" alt="cat">
                        </div>
                        <span>News <br> Commentary</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#short-videos">
                        <div class="videocat-bg">
                            <img src="./assets/img/cat-bg.png" class="w-100 d-block" alt="cat">
                        </div>
                        <span>Short Videos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="catlatest" id="news-commentary">
    <div class="container">
        <div class="catlatest-heading">
            <h2>News Commentary</h2>
            <a href="news-commentary.php">See All</a>
        </div>
        <div class="row">
            <?php
            $filteredCommentaryNews = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary' && $item['scope'] === 'public';
            });
            $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 3);

            foreach ($latestCompanyNews as $video) {
                echo "<div class=\"col-lg-4\">
                <div class=\"catlatest-item\">
                    <div class=\"catlatest-thumbnail\">
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                        <a href=\"single-video.php?id={$video['videoID']}\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#51ba6b'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        </a>
                    </div>
                    <h4>{$video['date']} - {$video['title']}</h4>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</section>

<section class="catlatest" id="ceo-podcast">
    <div class="container">
        <div class="catlatest-heading">
            <h2>CEO Podcast</h2>
            <a href="ceo-podcast.php">See All</a>
        </div>
        <div class="row">
            <?php
            $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });
            $latestCEOPodcast = array_slice($filteredCEOPodcast, 0, 3);
            function getThumbnailUrl($videoID)
            {
                if ($videoID === "xCk_y6XJPdY") {
                    return "//img.youtube.com/vi/{$videoID}/sddefault.jpg";
                } else {
                    return "//img.youtube.com/vi/{$videoID}/maxresdefault.jpg";
                }
            }
            foreach ($latestCEOPodcast as $video) {
                    echo "<div class=\"col-lg-4\">
                <div class=\"catlatest-item\">
                    <div class=\"catlatest-thumbnail\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                        <a href=\"single-video.php?id={$video['videoID']}\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#51ba6b'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        </a>
                    </div>
                    <h4>{$video['date']} - {$video['title']}</h4>
                </div>
            </div>";
                }
            ?>
        </div>
    </div>
</section>

<section class="catlatest" id="short-videos">
    <div class="container">
        <div class="catlatest-heading">
            <h2>Short Videos</h2>
            <a href="short-videos.php">See All</a>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            <?php
            $filteredShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-video' && $item['scope'] === 'public';
            });
            $latestShortVideos = array_slice($filteredShortVideos, 0, 5);
            foreach ($latestShortVideos as $video) {
                echo "<div class=\"col\">
                <div class=\"short-item\">
                    <div class=\"short-item-thumbnail\">
                        <a href=\"https://www.youtube.com/watch?v={$video['videoID']}\" class=\"popup-youtube\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#51ba6b'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        </a>
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <h4>{$video['title']}</h4>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</section>



<?php
include('footer.php'); ?>