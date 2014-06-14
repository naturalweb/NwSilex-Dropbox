NwSilex Dropbox
===============
[![Build Status](https://travis-ci.org/naturalweb/NwSilex-Dropbox.svg?branch=master)](https://travis-ci.org/naturalweb/NwSilex-Dropbox)
[![Coverage Status](https://coveralls.io/repos/naturalweb/NwSilex-Dropbox/badge.png?branch=master)](https://coveralls.io/r/naturalweb/NwSilex-Dropbox?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/naturalweb/NwSilex-Dropbox/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/naturalweb/NwSilex-Dropbox/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/fb240746-fecd-4263-bcd3-065d2618c719/mini.png)](https://insight.sensiolabs.com/projects/fb240746-fecd-4263-bcd3-065d2618c719)

This is a service provider for the Silex PHP Micro Framework, for usage client the of sdk-dropbox. [Core API](https://www.dropbox.com/developers/core/start/php)

### Requirements:
  * PHP 5.3+, [with 64-bit integers](http://stackoverflow.com/questions/864058/how-to-have-64-bit-integer-on-php)
  * PHP [cURL extension](http://php.net/manual/en/curl.installation.php) with SSL enabled (it's usually built-in).
  * Must not be using [`mbstring.func_overload`](http://www.php.net/manual/en/mbstring.overload.php) to overload PHP's standard string functions.

[SDK API docs.](http://dropbox.github.io/dropbox-sdk-php/api-docs/v1.1.x)

### Installation

- [API on Packagist](https://packagist.org/packages/naturalweb/nwsilex-dropbox)
- [API on GitHub](https://github.com/naturalweb/NwSilex-Dropbox)

In the `require` key of `composer.json` file add the following

    "naturalweb/nwsilex-dropbox": "dev-master"

Run the Composer update comand

    $ composer update

### Loading providers

In order to load and use a service provider, you must register it on the application

```php
$app->register(new NwSilex\Provider\DropboxServiceProvider(), array(
    'dropbox.token' => 'your-token',
    'dropbox.app'   => 'your-app',
));
```
### Usage
```php
$app['dropbox']->getAccountInfo();
```