<?php

/**
 * make sure things autoload for unit tests
 *
 * @author Mike Funk <mike@mikefunk.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * @link http://stackoverflow.com/questions/12790681/composer-cannot-load-loader-when-phpunit-is-used
 * require_once will not work in composer version
 */
$loader = require(__DIR__."/../vendor/autoload.php");
$loader->add('MikeFunk\\', __DIR__);
