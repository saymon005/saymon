<?php

if (!function_exists('version')) {
    function version(): string
    {
        return config('app.version', '1.0.0');
    }
}

if (!function_exists('vasset')) {
    function vasset(string $path): string
    {
        return asset($path) . '?v=' . version();
    }
}