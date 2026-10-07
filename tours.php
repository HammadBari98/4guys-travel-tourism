<?php
$pageTitle       = 'Packages';
$metaDescription = '4Guys Travel & Tourism is a modern tour and travel platform for booking guided tours, holiday packages and unforgettable destinations worldwide.';
$canonicalPath   = 'tours';
$currentPage     = 'tours';
$isHome          = false;
$pageStyles      = <<<'CSS'
<style>.page_speed_d41d8cd98f00b204e9800998ecf8427e{} .page_speed_b6d718a4baf2d940c28646fbc7649f19{height: 16px; width: auto;} .page_speed_4f5fad078626002a7a56d8c6ce26b4e0{background-image: url('themes/travlla/images/background/inr-banner.jpg'); background-size: cover; background-position: center;} .page_speed_224b51a7b428d98bf8d67e1c5a1897c8{display: none;} .page_speed_345895deafe8ab44d9aaa3779e73aee6{font-size: 12px;} .page_speed_d5aa19c02ca93bd01f98683bd4c5813f{--cc-primary: #066168; --cc-primary-hover: #054c52; --cc-accent-text: #ffffff;}</style>
CSS;
include __DIR__ . '/includes/header.php';
?>
 <div  class="wt-bnr-inr overlay-wraper bg-center page_speed_4f5fad078626002a7a56d8c6ce26b4e0"> <div class="wt-bnr-inr-entry"> <div class="container"> <div class="banner-title-outer"> <div class="banner-title-name"> <h2 class="wt-title">All Packages</h2> </div> <div> <ul class="wt-breadcrumb breadcrumb-style-2"> <li><a href="index.php" title="Home">Home</a></li> <li>Packages</li> </ul> </div> </div> </div> <div class="trv-inr-bnr-cloud"> <div class="marquee"><img width="587" height="196" data-dims-auto src=themes/travlla/images/decorations/banner-cloud.png alt="image"></div> </div> <div class="trv-inr-bnr-plane"> <div class="trv-inr-bnr-plane-bx"><img width="431" height="166" data-dims-auto src=themes/travlla/images/decorations/airplane.png alt="image"></div> </div> <div class="trv-inr-bnr-bloon-1"><img width="233" height="337" data-dims-auto src=themes/travlla/images/decorations/balloon-left.png alt="image"></div> <div class="trv-inr-bnr-bloon-2"><img width="110" height="166" data-dims-auto src=themes/travlla/images/decorations/balloon-right.png alt="image"></div> </div> </div> <div class="p-t60 p-b60 p-t20"> <div class="container"> <div class="flat-tabs" data-custom="true"> <div class="content-right tours-listing"> <form action="#" onsubmit="return false;" method="GET" accept-charset="UTF-8" id="tours-filter-form" class="sidebar-filter-mobile__content"> <input type=hidden name=page value="1" data-value="1" > <input type=hidden name=per_page value="12" > <input type=hidden name=layout value="grid" > <input type=hidden name=layout_col value="3" > <input type=hidden name=filter value="yes" > <input type=hidden name=sort_by value="" > <div class="box-grid-tours tour-items wow fadeIn"> <div class="row position-relative"> <div class="preloader-inner loading-ajax" id="loading"> <div class="loading-ajax-wrapper"> <div class="page-loader"></div> </div></div> <?php
require __DIR__ . '/includes/places-data.php';
require_once __DIR__ . '/includes/place-image.php';
$packages = [
    ['Umrah', ['Umrah' => 'umrah'], 'storage/destinations', 'storage/destinations/umrah.jpg', 'umrah.php'],
    ['Ziarat', ['Ziarat' => 'ziyarat'], 'storage/destinations', 'storage/destinations/ziyarat.jpg', 'ziarat.php'],
    ['Domestic Tour', $domesticPlaces, 'storage/domestic', 'storage/destinations/domestic.jpg', 'domestic-tour.php'],
    ['International Tour', $internationalPlaces, 'storage/international', 'storage/destinations/maldives.jpg', 'international-tour.php'],
];
foreach ($packages as [$type, $items, $dir, $fallback, $link]):
    foreach ($items as $name => $slug):
        $img = place_image($dir, $slug, $fallback);
        $wa  = 'https://wa.me/923000906521?text=' . rawurlencode("Hi, I'm interested in $name ($type). Please share details and pricing.");
?>
<div class="col-lg-4 col-md-6 m-b30"> <div class="trv-popular-tour-st2"> <div class="trv-media"> <a href="<?php echo $link; ?>"> <img width=520 height=380 data-dims-auto src="<?php echo $img; ?>" data-bb-lazy="true" loading="lazy" alt="<?php echo htmlspecialchars($name); ?>"> </a> <div class="trv-tour-title"> <h3 class="trv-title"> <a href="<?php echo $link; ?>"> <i class="bi bi-geo-alt"></i> <?php echo htmlspecialchars($name); ?> </a> </h3> </div> </div> <div class="trv-content"> <div class="trv-content-head-section"> <span class="trv-package-type" style="display:inline-block;background:#066168;color:#fff;font-size:12px;font-weight:600;padding:3px 12px;border-radius:20px;vertical-align:middle;"><?php echo $type; ?></span> </div> <div class="trv-content-bottom-section"> <div class="trv-content-bottom-column"> <div class="trv-book"> <a href="<?php echo $wa; ?>" target="_blank" rel="noopener" class="site-button outline white-txt"><i class="bi bi-whatsapp"></i> Contact for Price</a> </div> </div> </div> </div></div></div>
<?php endforeach; endforeach; ?>
</div> </div> </form></div> </div> </div></div> 
<?php include __DIR__ . '/includes/footer.php'; ?>
