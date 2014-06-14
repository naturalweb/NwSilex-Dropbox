<?php
namespace NwSilex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Dropbox\Client;

class DropboxServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['dropbox'] = $app->share(function ($app) {
            return new Client($app['dropbox.token'], $app['dropbox.app']);
        });
    }

    public function boot(Application $app)
    {
    }
}