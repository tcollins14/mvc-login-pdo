<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'YOUR_DATABASE_HOST';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'YOUR_DATABASE_NAME';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'YOUR_DATABASE_USERNAME';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'YOUR_DATABASE_PASSWORD';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    const SECRET_KEY = 'YOUR_SECRET_KEY';

    const MAILGUN_API_KEY = 'YOUR_MAILGUN_API_KEY';

    const MAILGUN_DOMAIN = 'YOUR_MAILGUN_DOMAIN';
}
