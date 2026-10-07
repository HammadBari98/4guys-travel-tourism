<?php
$pageTitle       = 'Umrah';
$metaDescription = 'Umrah packages and Ziyarat sites in Makkah and Madinah with 4Guys Travel & Tourism.';
$canonicalPath   = 'umrah';
$heading         = 'Ziyarat Places';
$headingAccent   = 'Umrah';
$intro           = 'Visit the blessed sites of Makkah and Madinah with our guided Umrah packages.';
$imageDir        = 'storage/umrah';
$fallbackImage   = 'storage/destinations/umrah.jpg';
$bannerImage   = 'storage/backgrounds/umrah-banner.jpg';
$hideBannerDecor = true;
$waLabel         = 'Umrah';
require __DIR__ . '/includes/places-data.php';
$places = $umrahPlaces;
include __DIR__ . '/includes/place-page.php';
