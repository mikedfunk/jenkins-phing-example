# Example Project

This is just to test setting up [Jenkins](http://jenkins-ci.org/) with [Phing](http://www.phing.info/). At the moment it does nearly everything on the [PHP QA Toolchain](http://phpqatools.org/) via [composer](http://getcomposer.org/) except for:

1. [phpcb](https://github.com/Mayflower/PHP_CodeBrowser) - an [unofficial version](https://packagist.org/packages/zerkalica/php-code-browser) is in composer, apparently in alpha state. It threw a bunch of PHP errors when I tried to use it instead of the pear version.
2. [phpcpd](https://github.com/sebastianbergmann/phpcpd) - Sebastian Bergmann is [working on](https://github.com/sebastianbergmann/phpcpd/pull/58) composer support but it's not on packagist yet.