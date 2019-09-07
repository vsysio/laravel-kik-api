<?php

return [
    'auth' => [

        /**
         * Username for your bot
         */

        'username' => env('KIK_AUTH_USERNAME'),

        /**
         * API key for your bot
         */

        'key' => env('KIK_AUTH_KEY'),
    ],
    'api' => [

        /**
         * What URL do we use to access the 'public/' folder in your Laravel application?
         */

        'webhook' => env('KIK_API_WEBHOOK_BASE_URL'),

        /**
         * Shouldn't need to configure this one, but leaving this in place Kik wants to
         */

        'url' => env('KIK_API_IRL','https://api.kik.com/v1/')
    ],

    /**
     * Friendly name of your bot?
     */

    'botname' => env('KIK_BOT_NAME'),

    /**
     * Who owns j00?
     */
    'botowner' => env('KIK_BOT_OWNER')
];