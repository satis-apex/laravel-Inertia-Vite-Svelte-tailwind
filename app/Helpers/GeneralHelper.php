<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\HtmlString;

function vite_assets(): HtmlString
{
    $devServerIsRunning = false;
    $devServerPath = env("DEV_SERVER_URL");
    if (app()->environment('local')) {
        try {
            Http::get("{$devServerPath}");
            $devServerIsRunning = true;
        } catch (Exception) {
        }
    }
    
    if ($devServerIsRunning) {
        return new HtmlString(<<<HTML
            <script type="module" src="{$devServerPath}/@vite/client"></script>
            <script type="module" src="{$devServerPath}/resources/js/app.js"></script>
            <script type="module" src="{$devServerPath}/resources/css/app.css"></script>
        HTML);
    }
    
    $manifest = json_decode(file_get_contents(
        public_path('build/manifest.json')
    ), true);
    
    $css_path = vite_asset_path('app.css');
    return new HtmlString(<<<HTML
        <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
        <link rel="stylesheet" href="{$css_path}">
    HTML);
}

function vite_asset_path(string $assets)
{
    $path = glob(public_path('build/assets/'.str_replace('.', '.*.', $assets)))[0];
    return str_replace(public_path(), '', $path);
}
