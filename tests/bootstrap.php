<?php

/**
 * make sure things autoload for unit tests
 *
 * @author Mike Funk <mike@mikefunk.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

$loader = require_once __DIR__ . "/../vendor/autoload.php";
$loader->add('MikeFunk\\', __DIR__);
