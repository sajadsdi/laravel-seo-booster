<?php

return [
    'title'           => config('app.name'),
    'title_separator' => '-',
    'charset'         => "utf-8",
    'viewport'        => "width=device-width, initial-scale=1",
    'description'     => "default description here...",
    'keywords'        => "default, keywords, here",
    'author'          => "هشتگ چاپ",
    'robots'          => config('app.env') == 'production' ? "index, follow" : "noindex, nofollow",
    'image'           => "https://url.to/image.png",
    'icon'            => "favicon.ico",
];
