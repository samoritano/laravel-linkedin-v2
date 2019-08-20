<?php

namespace Bokokode\LinkedIn\Tests;

use Orchestra\Testbench\TestCase;
use Bokokode\LinkedIn\LinkedinServiceProvider;
use Bokokode\LinkedIn\Facades\LinkedIn;

abstract class AbstractTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
      return [LinkedinServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'LinkedIn' => LinkedIn::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('linkedin.api_key', 'yourapikey');
        $app['config']->set('linkedin.api_secret', 'yourapisecret');
    }
}
