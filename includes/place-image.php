<?php
function place_image(string $dir, string $slug, string $fallback): string
{
    foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
        if (is_file(__DIR__ . "/../$dir/$slug.$ext")) {
            return "$dir/$slug.$ext";
        }
    }
    return $fallback;
}
