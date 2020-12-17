<?php

$addonJson = json_decode(file_get_contents(__DIR__ . '/addon.json'));


if (!defined('MX_MAILGUN_NAME')) {
    define('MX_MAILGUN_NAME', $addonJson->name);
    define('MX_MAILGUN_VERSION', $addonJson->version);
    define('MX_MAILGUN_DOCS', '');
    define('MX_MAILGUN_DESCRIPTION', $addonJson->description);
    define('MX_MAILGUN_AUTHOR', 'Max Lazar');
    define('MX_MAILGUN_DEBUG', false);
}

//$config['MX_MAILGUN_tab_title'] = MX_MAILGUN_NAME;

return [
    'name'           => $addonJson->name,
    'description'    => $addonJson->description,
    'version'        => $addonJson->version,
    'namespace'      => $addonJson->namespace,
    'author'         => 'Max Lazar',
    'author_url'     => 'https://eecms.dev',
    'settings_exist' => true,
    // Advanced settings
    'services'       => [],
];
