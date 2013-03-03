<?php

/**
 * make sure things autoload for unit tests
 *
 * @author Mike Funk <mfunk@christianpublishing.com>
 * @copyright 2013 Xulon Press, Inc. All Rights Reserved.
 */

$loader = require_once __DIR__ . "/../vendor/autoload.php";
$loader->add('XulonPress\\', __DIR__);
