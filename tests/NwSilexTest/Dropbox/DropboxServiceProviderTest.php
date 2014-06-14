<?php
namespace NwSilexTest\Dropbox;

use Silex\Application;
use NwSilex\Dropbox\DropboxServiceProvider;
use Dropbox\Client;

class DropboxServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldRegister()
    {   
        $token   = 'abcd1234';
        $nameApp = 'foo-bar';
        
        $app = new Application();

        $app->register(new DropboxServiceProvider(), array(
            'dropbox.token' => $token,
            'dropbox.app'   => $nameApp,
        ));

        $this->assertEquals(new Client($token, $nameApp), $app['dropbox']);
    }
}