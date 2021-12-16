<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // The URI segment that tells Craft to load the control panel
        'cpTrigger' => App::env('CP_TRIGGER') ?: 'admin',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => App::env('SECURITY_KEY'),

        // No need for separate user names
        'useEmailAsUsername' => true,

        // Cloudflare will compress them better
        'defaultImageQuality' => 100,

        // This will only be a backend for the NuxtJS app
        'headlessMode' => true,

        // Whether administrative changes should be allowed
        'allowAdminChanges' => false,

        // allow uploading gifs
        // 'imageDriver' => 'imagick',

        // Whether Dev Mode should be enabled (see https://craftcms.com/guides/what-dev-mode-does)
        'devMode' => false,

        // Increase file upload limit
        'maxUploadFileSize' => '100MB',

        // Whether crawlers should be allowed to index pages and following links
        'disallowRobots' => false,

        // The string preceding a number which Craft will look for
        'pageTrigger' => 'page/',

        // Whether to enable CSRF protection via hidden form inputs for all forms submitted via Craft
        'enableCsrfProtection' => false,
    ],

    // Local environment settings
    'local' => [
        'allowAdminChanges' => true,
        'devMode' => true,
        'disallowRobots' => true,
        'enableGraphqlCaching' => false,
    ],

    // Dev environment settings
    'dev' => [
        // Increase file upload limit
        'maxUploadFileSize' => '100MB',
        'devMode' => true,
        'disallowRobots' => true,
        'enableGraphqlCaching' => false,
    ],

    // Staging environment settings
    'staging' => [
      'disallowRobots' => true,
      'enableGraphqlCaching' => false,
    ],

    // Production environment settings
    'production' => [
    ],
];
