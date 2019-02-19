<?php
/**
 * Created by PhpStorm.
 * User: ADEDAYO OYINLOLA
 * Date: 12/4/2018
 * Time: 10:44 AM
 */

class commerce
{
    protected $db;
    protected $f3;
    protected $statusSuccess = 100;

    //! HTTP route pre-processor
    function beforeRoute(Base $f3)
    {
        $db = $f3->get('DB');
    }

    function afterRoute(Base $f3)
    {
        // Render HTML layout

        echo Template::instance()->render('templates/header1.html');
    }
    function __construct() {
        $f3 = Base::instance();
        // Connect to the database
        $db = $f3->get('DB');

        // Use database-managed sessions
        new DB\SQL\Session($db);
        // Save frequently used variables
        $this->db = $db;
        $this->f3 = $f3;

    }
    function getInputData() {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        return $obj;

    }
    function getSelectData() {

        $json = file_get_contents('php://select');
        $obj = json_decode($json);

        return $obj;

    }
}