<?php
$pageTitle       = 'Domestic Tour';
$metaDescription = 'Domestic tour packages across Pakistan with 4Guys Travel & Tourism.';
$canonicalPath   = 'domestic-tour';
$heading         = 'Destinations';
$headingAccent   = 'Domestic';
$intro           = 'Discover the beauty of Pakistan with our handpicked domestic tour packages.';
$imageDir        = 'storage/domestic';
$fallbackImage   = 'storage/destinations/domestic.jpg';
$waLabel         = 'Domestic Tour';
require __DIR__ . '/includes/places-data.php';
$places = $domesticPlaces;
include __DIR__ . '/includes/place-page.php';
