<?php
namespace XulonPress;

use XulonPress\ChangeTextException;

/**
 * just changes spaces with dashes.
 *
 * @package ExampleProject
 * @author Mike Funk <mfunk@christianpublishing.com>
 * @copyright 2013 Xulon Press, Inc. All Rights Reserved.
 */

class ChangeText
{
    /**
     * get dependencies
     */
    public function __construct()
    {
        require_once(__DIR__.'/../../vendor/autoload.php');
        require_once(__DIR__.'/Exceptions.php');
    }

    /**
     * just changes spaces with dashes.
     *
     * @param string $text the input text with spaces
     * @return string the changed text with dashes
     */
    public function change($text)
    {
        if (strpos($text, '!!') !== false) {
            throw new ChangeTextException('Text has double bang');
        }
        return str_replace(' ', '-', $text);
    }
}
