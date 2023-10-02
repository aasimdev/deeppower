<?php
$GLOBALS['title'] = "DeepPower";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>

<section class="newsPage">
    <div class="container">
        <h1 class="newsPage-title">Newsroom</h1>
        <!-- Media and Events -->
        <div class="l-newcommentary">
            <div class="newsPage-category">
                <h2>Media and Events </h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mediaNevent">
                        <div class="mediaNevent-thumbnail">
                            <a href="./PDF/deeppower-leads-out-in-geothermal-energy-gold-rush.pdf" target="_blank">
                                <img src="./assets/img/deeppower-leads-out-in-geothermal-energy-gold-rush.png" alt="deeppower">
                            </a>
                        </div>
                        <h4>DeepPower leads out in geothermal energy gold rush - Utah Business</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="catlatest-item">
                        <div class="catlatest-thumbnail">
                            <img src="//img.youtube.com/vi/7FpprtVKgpY/mqdefault.jpg" alt="Thumbnail" class="w-100">
                            <a href="https://www.youtube.com/watch?v=7FpprtVKgpY" class="popup-youtube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                    <circle cx="32" cy="32" r="32" fill="#51ba6b"></circle>
                                    <path d="M38 32.5L27 39L27 26L38 32.5Z" fill="black"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="nEventLinks">
                            <a href="https://www.normantranscript.com/news/ou-unveils-geothermal-drill-that-could-change-world-of-energy/article_6a3b3e36-eea3-11ed-b86f-db021008e188.html" target="_blank">OU unveils geothermal drill that could change world of energy</a>

                            <a href="https://journalrecord.com/2023/05/20/ou-joins-search-for-geothermal-energys-holy-grail/" target="_blank">OU joins search for geothermal energy’s holy grail</a>
                            <a href="https://www.thinkgeoenergy.com/deeppower-partners-with-ou-on-novel-geothermal-drilling-tech/" target="_blank">DeepPower partners with OU on novel geothermal drilling tech</a>
                            <a href="https://www.geodrillinginternational.com/deep-geothermal/news/1444466/deeppower-announces-r-d-programme-with-the-university-of-oklahoma" target="_blank">DeepPower announces R&D programme with the University of Oklahoma</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="catlatest-item">
                        <div class="catlatest-thumbnail">
                            <img src="//img.youtube.com/vi/wSiLSbjfsPY/maxresdefault.jpg" alt="Thumbnail" class="w-100">
                            <a href="https://www.youtube.com/watch?v=wSiLSbjfsPY" class="popup-youtube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                    <circle cx="32" cy="32" r="32" fill="#51ba6b"></circle>
                                    <path d="M38 32.5L27 39L27 26L38 32.5Z" fill="black"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="nEventLinks">
                            <a href="https://www.compsmag.com/news/revolutionizing-geothermal-energy-deeppowers-patent-pending-technology-leads-to-unprecedented-drilling-rates/" target="_blank">Revolutionizing Geothermal Energy: DeepPower’s Patent-Pending Technology Leads to Unprecedented Drilling Rates</a>

                            <a href="https://techtransfercentral.com/2022/12/06/u-oklahoma-and-deeppower-sign-research-deal-to-develop-drilling-technology-for-geothermal-energy/" target="_blank">U Oklahoma and DeepPower sign research deal to develop drilling technology for geothermal energy</a>
                            <a href="https://www.world-energy.org/article/32675.html" target="_blank">Deeppower Reports Progress on Novel Geothermal Drilling Technology</a>
                            <a href="https://explorer.aapg.org/story/articleid/65472/university-of-oklahoma-develops-geothermal-soonerdrill" target="_blank">University of Oklahoma Develops Geothermal ‘SoonerDrill’</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News Commentary -->
            <div class="l-newcommentary">
                <div class="newsPage-category">
                    <h2>News Commentary </h2>
                    <a href="news-commentary.php">See all <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="row">
                    <?php
                    $filteredCommentaryNews = array_filter($videos, function ($item) {
                        return $item['category'] === 'news-commentary';
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


            <!-- Latest Company News -->
            <div class="newsPage-category">
                <h2>Latest Company News</h2>
                <a href="news-company.php">See all <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="row">
                <?php
                $filteredCompanyNews = array_filter($news, function ($item) {
                    return $item['category'] === 'company';
                });

                // print_r($filteredCompanyNews);

                // Reverse the array
                $reversedCompanyNews = array_reverse($filteredCompanyNews);

                // Sort the company news articles by date in descending order
                usort($reversedCompanyNews, function ($a, $b) {
                    return strtotime($b['id']) - strtotime($a['id']);
                });

                $latestCompanyNews = array_slice($filteredCompanyNews, 0, 4);

                foreach ($latestCompanyNews as $item) {
                    echo "<div class=\"col-lg-6\">
        <div class=\"newsItem\">
            <h5>{$item['title']}</h5>
            <p>{$item['excerpt']}</p>
            <div class=\"newsItem__date\">
                <span>{$item['date']}</span>
                <a href=\"single-news.php?id={$item['id']}\">Read More</a>
            </div>
        </div>
    </div>";
                } ?>

            </div>


            <!-- Latest Industry News -->
            <div class="newsPage-category">
                <h2>Latest Industry News</h2>
                <a href="news-industry.php">See all <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="row">
                <?php
                $filteredIndustryNews = array_filter($news, function ($item) {
                    return $item['category'] === 'industry';
                });

                // Reverse the array by ID
                // $reversedIndustryNews = array_reverse($filteredIndustryNews);

                // Take the latest 4 industry news articles
                $latestIndustryNews = array_slice($filteredIndustryNews, 0, 4);
                foreach ($latestIndustryNews as $item) {
                    echo "<div class=\"col-lg-6\">
        <div class=\"newsItem\">
            <h5>{$item['title']}</h5>
            <p>{$item['excerpt']}</p>
            <div class=\"newsItem__date\">
                <span>{$item['date']}</span>
                <a href=\"single-news.php?id={$item['id']}\">Read More</a>
            </div>
        </div>
    </div>";
                } ?>

            </div>

            <!-- <div class="newsArchiveBtn">
            <a href="#" class="theme-btn">
                <span>View Archive Posts</span>
                <svg width="10" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 14.1753L6.29787 2.19072L7.53192 0L4.89362 11.512L10 11.5979L0 25L0.553192 23.5395L4.42553 14.1753H0Z" fill="#091113" />
                </svg>
            </a>
        </div> -->

        </div>
</section>


<?php
include('footer.php'); ?>