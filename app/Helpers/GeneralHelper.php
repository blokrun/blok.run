<?php

function t($slug = null) {


    $translation = \App\Models\Translation::where('slug', $slug)->where('language_id', getLanguageId() )->first();

    if (!empty($translation)) {
        return $translation['text'];
    } else {
        return $slug;
    }
}

function markdownToHtml($markdown)
{
    $parsedown = new \Parsedown();
    return $parsedown->text($markdown);
}

// 1 - Lithuanian, 2 - English
function getLanguageId () {

    // lithuanian
    if (getDomain()=='xecode.lt') {
        return 1;

    // for testing
    } elseif (getDomain()=='127.0.0.1') {
        return 1;

    // english
    } else {
        return 2;
    }
}

function getDomain() {
    // Get the current request object
    $request = request();

    // Check if the request is secure (HTTPS)
    $isSecure = $request->secure();

    // Get the host (domain) from the request
    $domain = $request->getHost();

    // Build the full URL including the protocol (http/https)
    $protocol = $isSecure ? 'https://' : 'http://';
    //$fullUrl = $protocol . $domain;

    $domain = str_replace('www.', '', $domain);

    return $domain;
}


?>
