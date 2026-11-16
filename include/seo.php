<?php

require_once __DIR__ . '/seo-data.php';
$baseUrl = 'https://www.drashishgoyalortho.com';

$currentPage = basename($_SERVER['SCRIPT_NAME']);

$seo = $seoPages[$currentPage] ?? [
    'title' => 'Dr. Ashish Kumar Goyal | Orthopedic Surgeon Vadodara',
    'description' => 'Consult Dr. Ashish Kumar Goyal for advanced orthopedic treatments in Vadodara.',
    'keywords' => 'Orthopedic Surgeon Vadodara, Dr Ashish Kumar Goyal',
    'image' => 'assets/images/og-image.jpg',
    'type' => 'website'
];

$canonicalUrl = $baseUrl . (
    $currentPage === 'index.php' ? '/' : '/' . $currentPage
);

$ogImage = $baseUrl . '/' . ltrim($seo['image'], '/');
?>

<!-- Dynamic SEO -->
<title><?= htmlspecialchars($seo['title']) ?></title>

<meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">

<meta name="keywords" content="<?= htmlspecialchars($seo['keywords']) ?>">

<meta name="author" content="Dr. Ashish Kumar Goyal">

<meta name="robots" content="index, follow">

<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

<!-- Open Graph -->
<meta property="og:type" content="<?= htmlspecialchars($seo['type']) ?>">

<meta property="og:site_name" content="Dr. Ashish Kumar Goyal">

<meta property="og:title" content="<?= htmlspecialchars($seo['title']) ?>">

<meta property="og:description" content="<?= htmlspecialchars($seo['description']) ?>">

<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">

<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">

<meta property="og:locale" content="en_IN">

<!-- Twitter SEO -->
<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="<?= htmlspecialchars($seo['title']) ?>">

<meta name="twitter:description" content="<?= htmlspecialchars($seo['description']) ?>">

<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">