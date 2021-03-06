<?php

namespace App\Controllers\Admin;

/**
 * User admin controller
 *
 * PHP version 5.6
 */
class Users extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    protected function indexAction()
    {
        echo 'User admin index';
    }
}
