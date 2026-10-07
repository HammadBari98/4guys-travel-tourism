<?php
$pageTitle       = 'International Tour';
$metaDescription = 'International tour packages to Maldives, Bali, Thailand, Dubai, Turkey and more with 4Guys Travel & Tourism.';
$canonicalPath   = 'international-tour';
$heading         = 'Destinations';
$headingAccent   = 'International';
$intro           = 'Explore the world with our handpicked international tour packages.';
$imageDir        = 'storage/international';
$fallbackImage   = 'storage/destinations/maldives.jpg';
$bannerImage   = 'storage/backgrounds/international-banner.jpg';
$waLabel         = 'International Tour';
require __DIR__ . '/includes/places-data.php';
$places = $internationalPlaces;
include __DIR__ . '/includes/place-page.php';
