<?php
$pageTitle       = 'Ziarat';
$metaDescription = 'Ziarat tour packages to holy sites with 4Guys Travel & Tourism.';
$canonicalPath   = 'ziarat';
$heading         = 'Holy Sites';
$headingAccent   = 'Ziarat';
$intro           = 'Guided Ziarat packages to the blessed shrines and holy sites.';
$imageDir        = 'storage/ziarat';
$fallbackImage   = 'storage/destinations/ziyarat.jpg';
$bannerImage   = 'storage/backgrounds/ziarat-banner.jpg';
$hideBannerDecor = true;
$waLabel         = 'Ziarat';
require __DIR__ . '/includes/places-data.php';
$places = $ziaratPlaces;
include __DIR__ . '/includes/place-page.php';
