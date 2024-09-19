<?php

namespace Libs;

use Twig\Environment;

class TemplateEngine extends Environment {
    public function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        parent::__construct($loader, [

        ]);
    }
}
