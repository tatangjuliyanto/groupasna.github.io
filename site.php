<?php
// Every page is a PHP template rendered two ways: dynamically on a PHP server
// (with visitor reviews), or as static HTML for GitHub Pages via
// build-static.sh (STATIC_BUILD=1), which has no reviews.
if (!defined('STATIC_BUILD')) {
    define('STATIC_BUILD', getenv('STATIC_BUILD') === '1');
}

function page_url(string $page): string
{
    return $page . (STATIC_BUILD ? '.html' : '.php');
}

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
