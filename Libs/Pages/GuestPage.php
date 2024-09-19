<?php
namespace Libs\Pages;

abstract class GuestPage extends BasePage {

    function __construct()
    {
        parent::__construct();
        $this->process();
    }

    function process()
    {
        $result = "";

        if ($_SERVER["REQUEST_METHOD"] === "GET") $result = $this->get();
        else if ($_SERVER["REQUEST_METHOD"] === "POST") $result = $this->post();
        else {
            http_response_code(409);
        }

        echo $result;
    }

    function get()
    {
        http_response_code(409);
    }

    function post()
    {
        http_response_code(409);
    }

}