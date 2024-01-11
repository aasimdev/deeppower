<?php
$GLOBALS['title'] = "DeepPower";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
include('header.php');

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $item = array_filter($news, function ($item) use ($newsId) {
        return $item['id'] == $newsId;
    });
    $item = reset($item);
}

?>


<section class="news-detail">
    <div class="container">
        <?php if ($item) : ?>
            <h1><?php echo $item['title']; ?></h1>
            <div class="news-detail-info">
                <?php
                foreach ($item['description'] as $paragraph) {
                    echo "
                        <div class=\"newsItem\">
                            {$paragraph[0]}
                        </div>";
                }
                if ($item['category'] == "company") : ?>
                    <div class="news-moreinfo">
                        <a href="index.php" class="theme-btn">
                            For more information about DeepPower, Inc., please visit our website at www.DeepPower.com
                        </a>
                    </div>
                    <div class="news-about">
                        <h4>About DeepPower, Inc.</h4>
                        <p>Deep Power is developing XDrill<sup>TM</sup>, a breakthrough geothermal drilling technology to access the Earth’s unlimited source of heat energy, which can be used to produce unlimited, low-cost green electricity anywhere in the world. The Earth’s molten core is as hot as the Sun and harnessing just 0.1% of that heat energy can power humanity for 2 million years. Previous generations of drilling technology cannot go deep enough to make geothermal cost effective. We are developing XDrill<sup>TM</sup> to boldly go where no humans have gone before. The deeper we go the more energy we can unleash. Unlike large area solar and wind farms, a 9-inch hole by 5 miles deep can produce the same amount of power as 320 acres of solar panels. Like a power plug into the Earth, we aim to provide every city, state, and country direct and independent access to this “holy grail” source of eternal green energy. </p>
                    </div>
                    <div class="news-about">
                        <h4>Forward-Looking Statements</h4>
                        <p>This press release may contain “forward-looking statements.” Forward-looking statements are neither historical facts nor assurances of future performance. Instead, they are based only on our current beliefs, expectations, and assumptions regarding the future of our business, future plans and strategies, projections, anticipated events and trends, the economy and other future conditions. Because forward-looking statements relate to the future, they are subject to inherent uncertainties, risks and changes in circumstances that are difficult to predict and many of which are outside of our control. Our actual results and financial condition may differ materially from those indicated in the forward-looking statements. Therefore, you should not rely on any of these forward-looking statements. Any forward-looking statement made by us in this release is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise, except as may be required under applicable law. </p>
                    </div>
                    <div class="news-presscontact">
                        <a href="tel:" class="theme-btn">
                            <span>Press Contact:</span> <br>
                            1 (800) 347-0589
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php
include('footer.php'); ?>