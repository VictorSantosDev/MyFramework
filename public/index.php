<?php

use App\Router\Api;

require_once '../vendor/autoload.php';

(new Api())->handle()->execute();