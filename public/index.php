<?php
chdir(dirname(__DIR__));

require 'vendor/autoload.php';

date_default_timezone_set('Europe/Amsterdam');

(new \Phapp\App(require 'config/config.php'))->run();