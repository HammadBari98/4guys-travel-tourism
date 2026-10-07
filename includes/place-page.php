<?php
/**
 * Shared layout for the Umrah / International Tour pages.
 *
 * Expected variables: $pageTitle, $heading, $headingAccent, $intro,
 * $places (array of name => image slug), $imageDir, $fallbackImage,
 * $waLabel (text used in the WhatsApp enquiry).
 * Drop <slug>.jpg into $imageDir to replace the fallback picture.
 */
$currentPage = 'destinations';
$isHome      = false;
$banner      = $bannerImage ?? 'themes/travlla/images/background/inr-banner.jpg';
$bannerOverlay = isset($bannerImage) ? 'linear-gradient(rgba(255,255,255,.55),rgba(255,255,255,.55)),' : '';
$pageStyles  = <<<CSS
<style>.page_speed_4f5fad078626002a7a56d8c6ce26b4e0{background-image: {$bannerOverlay}url('{$banner}'); background-size: cover; background-position: center;} .page_speed_f73a476274bc6cf841ce5d8925037274{background-image: url('themes/travlla/images/background/Cloud-bg.png')}</style>
CSS;
include __DIR__ . '/header.php';

require_once __DIR__ . '/place-image.php';
$waText = rawurlencode("Hi, I'm interested in the $waLabel package. Please share details and pricing.");
?>
<div class="wt-bnr-inr overlay-wraper bg-center page_speed_4f5fad078626002a7a56d8c6ce26b4e0"> <div class="wt-bnr-inr-entry"> <div class="container"> <div class="banner-title-outer"> <div class="banner-title-name"> <h2 class="wt-title"><?php echo htmlspecialchars($pageTitle); ?></h2> </div> <div> <ul class="wt-breadcrumb breadcrumb-style-2"> <li><a href="index.php" title="Home">Home</a></li> <li><?php echo htmlspecialchars($pageTitle); ?></li> </ul> </div> </div> </div> <div class="trv-inr-bnr-cloud"> <div class="marquee"><img width="587" height="196" data-dims-auto src=themes/travlla/images/decorations/banner-cloud.png alt="image"></div> </div> <?php if (empty($hideBannerDecor)): ?><div class="trv-inr-bnr-plane"> <div class="trv-inr-bnr-plane-bx"><img width="431" height="166" data-dims-auto src=themes/travlla/images/decorations/airplane.png alt="image"></div> </div> <div class="trv-inr-bnr-bloon-1"><img width="233" height="337" data-dims-auto src=themes/travlla/images/decorations/balloon-left.png alt="image"></div> <div class="trv-inr-bnr-bloon-2"><img width="110" height="166" data-dims-auto src=themes/travlla/images/decorations/balloon-right.png alt="image"></div><?php endif; ?> </div> </div>
<div class="ck-content"><div data-block-id="places">
<div class="section-full p-t120 p-b90 trv-popular-destination tvr-hot-ballon-wrap page_speed_f73a476274bc6cf841ce5d8925037274">
<div class="container">
<div class="section-head trv-head-title-wrap center-position">
<h2 class="trv-head-title"><span class="site-text-yellow"><?php echo htmlspecialchars($headingAccent); ?></span> <?php echo htmlspecialchars($heading); ?></h2>
<div class="trv-head-discription"><?php echo htmlspecialchars($intro); ?></div>
<div class="trv-head-title-image"><img width="715" height="107" data-dims-auto src=themes/travlla/images/background/Title-Separator.png alt="image"></div>
</div>
<div class="section-content">
<div class="swiper trv-popular-destination-row trv-pop-des-st1-carousal swiper-nav-center-bottom">
<div class="swiper-wrapper">
<?php foreach ($places as $name => $slug): $img = place_image($imageDir, $slug, $fallbackImage); ?>
<div class="swiper-slide"> <div class="trv-destination-bx1"> <div class="trv-media"> <img width="496" height="810" data-dims-auto src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($name); ?>"> </div> <div class="trv-content"> <h3 class="trv-title"><a href="https://wa.me/923000906521?text=<?php echo rawurlencode("Hi, I'm interested in $name. Please share details."); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars($name); ?></a></h3> </div> <div class="trv-on-hover"> <img width="110" height="166" data-dims-auto src=themes/travlla/images/destinations/hotballon-right.png alt="image"> </div> </div> </div>
<?php endforeach; ?>
</div>
<div class="swiper-button-next"></div> <div class="swiper-button-prev"></div>
</div>
<div class="text-center m-t40"><a href="https://wa.me/923000906521?text=<?php echo $waText; ?>" target="_blank" rel="noopener" class="site-button butn-bg-shape"><i class="bi bi-whatsapp"></i> Contact for Booking</a></div>
</div>
<div class="left-hot-ballon"><img width="233" height="337" data-dims-auto src=themes/travlla/images/decorations/balloon-left.png alt="image"></div> <div class="right-hot-ballon"><img width="110" height="166" data-dims-auto src=themes/travlla/images/decorations/balloon-right.png alt="image"></div>
</div></div></div>
<?php include __DIR__ . '/footer.php'; ?>
