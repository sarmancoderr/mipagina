<?php

use Libs\Pages\GuestPage;

new class() extends GuestPage {
    function get()
    {
        return $this->tpl->load("index.twig.html")->render();
    }

    function post()
    {
        $user = $_POST["email"];
        $password = $_POST["password"];
        // syslog(LOG_INFO, $user . ' ' . $password);
        $result = $this->db->table("wp_users")->where("user_email", $user)->first();

        $match = password_verify($password, $result->user_pass);

        syslog(LOG_INFO, $match ? $password . ": match password" : $password . ": not matchs");

        return $this->tpl->load("index.twig.html")->render();
    }
};
