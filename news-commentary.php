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
                <form action="./php/subscriber.php" method="POST" autocomplete="off">
                    <input type="email" name="email" id="email" placeholder="Subscribe to our podcast" class="form-control">
                    <button class="theme-btn" type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="videoTSingle">
    <div class="container">
        <div class="videoTSingle-wrap">
            <h3>News Commentary</h3>
            
        </div>
    </div>
</section>

<section class="podcast">
    <div class="container">
        <div class="row">
            <?php
             $filteredCommentaryNews = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary';
            });
            foreach ($filteredCommentaryNews as $video) {
                echo "<div class=\"col-lg-4\">
                <div class=\"podcast-item\">
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    <a href=\"single-video.php?id={$video['videoID']}\">
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#51ba6b'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                    </a></div>
                    <h2>{$video['date']} - {$video['title']}</h2>
                </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>

<?php
include('footer.php'); ?>