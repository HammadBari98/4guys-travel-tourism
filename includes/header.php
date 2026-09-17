<?php
/**
 * Shared site header.
 *
 * Expected variables (set them before including this file):
 *   $pageTitle        string  <title> / og:title / twitter:title
 *   $metaDescription  string  meta description / og:description
 *   $canonicalPath    string  path appended to https://travlla.botble.com/
 *   $currentPage      string  slug used to highlight the active nav item
 *   $isHome           bool    true = transparent style-1 header (homepage)
 *   $pageStyles       string  optional raw <style> block for this page's
 *                             background-image classes
 */
$pageTitle       = $pageTitle ?? '4Guys Travel & Tourism';
$metaDescription = $metaDescription ?? '4Guys Travel & Tourism is a modern tour and travel platform for booking guided tours, holiday packages and unforgettable destinations worldwide.';
$canonicalPath   = $canonicalPath ?? '';
$currentPage     = $currentPage ?? '';
$isHome          = $isHome ?? false;
$pageStyles      = $pageStyles ?? '';

function nav_active(string $page, string $currentPage): string
{
    return $page === $currentPage ? 'current-menu-item' : '';
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="dns-prefetch" href="https://www.googletagmanager.com/">
<link rel="dns-prefetch" href="https://www.facebook.com/">
<link rel="dns-prefetch" href="https://www.linkedin.com/">
<style>
    :root {
        --primary-color: #066168 !important;
        --primary-color-hover: #054c52 !important;
        --primary-color-rgb: 6,97,104 !important;
        --secondary-color: #FFAA0D !important;
        --heading-color: #443935 !important;
        --text-color: #346065 !important;
    }
    .logo-header-inner img{max-width:144px!important}
    .logo-footer img{max-width:174px!important}
    .trv-side-pnl-logo img{max-width:121px!important}
    @media (max-width:1366px){.logo-header-inner img{max-width:126px!important}}
    @media (max-width:991px){.logo-header-inner img{max-width:99px!important}}
    @media (max-width:360px){.logo-header-inner img{max-width:99px!important}}
</style>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<link rel="canonical" href="https://travlla.botble.com/<?php echo $canonicalPath; ?>">
<meta name="robots" content="index, follow">
<meta property="og:site_name" content="4Guys Travel & Tourism">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<meta property="og:url" content="https://travlla.botble.com/<?php echo $canonicalPath; ?>">
<meta property="og:image" content="https://travlla.botble.com/logo.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<link rel="icon" type="image/png" href="favicon.png">
<link rel="shortcut icon" type="image/png" href="favicon.png">
<link href="storage/fonts/dd08a094e8/fonts.css" rel="stylesheet" type="text/css">
<link href="storage/fonts/aecf06625d/fonts.css" rel="stylesheet" type="text/css">
<style>:root{--primary-font: "Figtree", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;--heading-font: "Afacad", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;}</style>
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/bootstrap-select.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/bootstrap-slider.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/bootstrap-datetimepicker.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/bootstrap-icons.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/font-awesome.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/feather.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/owl.carousel.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/vendors/swiper-bundle.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/fonts.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/style0ff5.css?v=1.0.2">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/tour-filter0ff5.css?v=1.0.2">
<link media="all" type="text/css" rel="stylesheet" href="themes/travlla/css/theme-overrides0ff5.css?v=1.0.2">
<style>@layer base{img[data-dims-auto]{max-width:100%;width:auto;height:auto}}</style>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"4Guys Travel & Tourism","url":"https://travlla.botble.com"}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"4Guys Travel & Tourism","url":"https://travlla.botble.com","logo":{"@type":"ImageObject","url":"https://travlla.botble.com/logo.png"}}</script>
<?php echo $pageStyles; ?>
</head>
<body id="page-<?php echo $currentPage !== '' ? $currentPage : 'home'; ?>" theme-mode="light">
<div class="cursor"></div>
<div class="cursor2"></div>
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <img src="logo.png" alt="4Guys Travel & Tourism" style="max-width:110px;margin-bottom:20px;">
        <figure class="loader" aria-hidden="true">
            <div class="dot white"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </figure>
        <span class="visually-hidden">Loading</span>
    </div>
</div>
<header class="site-header header-style-1 mobile-sider-drawer-menu sticky-header header-transparent" id="header_main"> <div class="main-bar-wraper navbar-expand-xl"> <div class="main-bar"> <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type=button class="navbar-toggler collapsed" aria-label="Toggle navigation"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar icon-bar-first"></span> <span class="icon-bar icon-bar-two"></span> <span class="icon-bar icon-bar-three"></span> </button> <div class="logo-header"> <div class="logo-header-inner logo-header-one"> <a href="index.php" aria-label="4Guys Travel & Tourism"> <img width=386 height=161 data-dims-auto src=logo-white.png data-bb-lazy="true" loading="lazy" alt="4Guys Travel & Tourism"> </a> </div></div> <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-end"> <ul class="nav navbar-nav"> <li class="<?php echo nav_active('index', $currentPage); ?>"> <a href="index.php"> Home </a> </li> <li class="<?php echo nav_active('about-us', $currentPage); ?>"> <a href="about-us.php"> About Us </a> </li> <li class="<?php echo nav_active('services', $currentPage); ?>"> <a href="services.php"> Services </a> </li> <li class="<?php echo nav_active('destinations', $currentPage); ?>"> <a href="destinations.php"> Destinations </a> </li> <li class="<?php echo nav_active('tours', $currentPage); ?>"> <a href="tours.php"> Tours </a> </li> <li class="<?php echo nav_active('contact', $currentPage); ?>"> <a href="contact.php"> Contact </a> </li> </ul> </div> <div class="extra-nav header-1-nav"> <div class="extra-cell one"> <div class="header-search"> <a href="#search" class="header-search-icon" aria-label="Search"> <svg class="icon svg-icon-ti-ti-search" xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
> <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /> <path d="M21 21l-6 -6" /></svg> </a> </div> </div> <div class="extra-cell two trv-r-section-block"> <a href="javascript:;" class="navSidebar-button" aria-label="Open info panel"> <span class="trv-nev-line1"></span> <span class="trv-nev-line2"></span> <span class="trv-nev-line1"></span> <b class="trv-new-info-btn">Info</b> </a> </div> </div> </div> </div></header>
<div class="xs-sidebar-group info-group"> <div class="xs-overlay xs-bg-black"></div> <div class="xs-sidebar-widget"> <div class="sidebar-widget-container"> <div class="widget-heading"> <a href="javascript:;" class="close-side-widget" aria-label="Close"> <svg class="icon svg-icon-ti-ti-square-x" xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
> <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14" /> <path d="M9 9l6 6m0 -6l-6 6" /></svg> </a> </div> <div class="sidebar-textwidget"> <div class="sidebar-info-contents"> <div class="content-inner"> <div class="content-box"> <div class="trv-side-pnl-info"> <div class="trv-side-pnl-logo"> <a href="index.php" aria-label="4Guys Travel & Tourism"> <img width=386 height=161 data-dims-auto src=logo.png data-bb-lazy="true" loading="lazy" alt="4Guys Travel & Tourism"> </a> </div> <div class="trv-side-pnl-content"> <div class="trv-side-pnl-content-mid"> <h3 class="trv-sm-title">It&#039;s Time to Traveling</h3> <h3 class="trv-lg-title">Plan Your Next Holiday</h3> <p>4Guys Travel & Tourism is a modern tour and travel platform for booking guided tours, holiday packages and unforgettable destinations worldwide.</p> </div> <ul class="social-icons"> <li> <a href="https://www.facebook.com/share/1bQSLK2TFt/" title="Facebook" target="_blank"> <svg  xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
 class="icon svg-icon-ti-ti-brand-facebook page_speed_d41d8cd98f00b204e9800998ecf8427e"> <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg> </a> </li> <li> <a href="https://www.instagram.com/4guystravel?stkn=ZGQ4ZnZsd2Zmanhi" title="Instagram" target="_blank"> <svg  xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
 class="icon svg-icon-ti-ti-brand-instagram page_speed_d41d8cd98f00b204e9800998ecf8427e"> <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /> <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /> <path d="M16.5 7.5l0 .01" /></svg> </a> </li> <li> <a href="https://www.tiktok.com/@4guystravel?_r=1&amp;_t=ZS-99o7Vb8Pnvg" title="TikTok" target="_blank"> <svg  xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
 class="icon svg-icon-ti-ti-brand-tiktok page_speed_d41d8cd98f00b204e9800998ecf8427e"> <path d="M9 12a4 4 0 1 0 4 4v-16a5 5 0 0 0 5 5" /></svg> </a> </li> <li> <a href="https://www.linkedin.com/" title="LinkedIn" target="_blank"> <svg  xmlns="http://www.w3.org/2000/svg" width=24 height=24 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
 class="icon svg-icon-ti-ti-brand-linkedin page_speed_d41d8cd98f00b204e9800998ecf8427e"> <path d="M8 11v5" /> <path d="M8 8v.01" /> <path d="M12 16v-5" /> <path d="M16 16v-3a2 2 0 1 0 -4 0" /> <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" /></svg> </a> </li> </ul> </div> </div> </div> </div> </div> </div> </div> </div></div>
<main>