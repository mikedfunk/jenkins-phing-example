<?php
namespace MikeFunk;

use MikeFunk\ChangeTextException;

/**
 * just changes spaces with dashes.
 *
 * @package ExampleProject
 * @author Mike Funk <mike@mikefunk.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
