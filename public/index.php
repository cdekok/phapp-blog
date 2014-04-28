<?php
chdir(dirname(__DIR__));

require 'vendor/autoload.php';

(new \Phapp\App(require 'config/config.php'))->run();