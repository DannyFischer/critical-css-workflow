<?php

function criticalCSS()
{
    $dir = get_template_directory_uri().'/dist/css/critical/';
    $page = null;

    if (is_page('about')) {
        $page = file_get_contents($dir.'about.css');
    }

    elseif (is_page('projects')) {
        $page = file_get_contents($dir.'projects.css');
    }

    else {
        $page = file_get_contents($dir.'index.css');
    }

    $output = $page;

    printf('<style>%s</style>', $output);
}
