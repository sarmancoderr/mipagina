<?php
namespace Libs\Pages;

use Libs\Database;
use Libs\TemplateEngine;

abstract class BasePage {

    protected Database $db;
    protected TemplateEngine $tpl;

    function __construct()
    {
        $this->db = new Database();
        $this->tpl = new TemplateEngine();
    }

    abstract protected function process();

}