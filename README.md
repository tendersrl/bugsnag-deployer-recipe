# Version
### Simple package to set your app version on Bugsnag in Laravel project when deploying

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tendersrl/bugsnag-deployer-recipe.svg?style=flat-square)](https://packagist.org/packages/tendersrl/bugsnag-deployer-recipe)
[![Build Status](https://img.shields.io/travis/com/tendersrl/bugsnag-deployer-recipe/master.svg?style=flat-square)](https://travis-ci.com/tendersrl/bugsnag-deployer-recipe)
[![StyleCI](https://github.styleci.io/repos/222470946/shield?branch=master)](https://github.styleci.io/repos/222470946)
[![MIT licensed](https://img.shields.io/github/license/tendersrl/bugsnag-deployer-recipe?style=flat-square)](https://img.shields.io/github/license/tendersrl/bugsnag-deployer-recipe)
[![Total Downloads](https://img.shields.io/packagist/dt/tendersrl/bugsnag-deployer-recipe.svg?style=flat-square)](https://packagist.org/packages/tendersrl/bugsnag-deployer-recipe)

## Description

This package provides a Deployer recipe to let you call Bugsnag ```php artisan bugsnag:deploy``` command in your Laravel project when deploying.

## Install

Via Composer

``` bash
$ composer require tendersrl/bugsnag-deployer-recipe
```

## Usage

Add in your AppServiceProvider the app version ti report on Bugsnag, as described in [Bugsnag documentation](https://docs.bugsnag.com/platforms/php/laravel/#tracking-releases)

``` php
public function boot()
{
    Bugsnag::setAppVersion('v1.2.3');
}
```

**Note** You don't need to register the ```DeployCommand``` command in your ```app/Console/Kernel.php``` file as this package do that for you.

Lastly import the Recipe ```vendor/tendersrl/bugsnag-deployer-recipe/recipes/BugsnagRecipe.php``` in your ```deployer.php``` file

``` php
require 'vendor/tendersrl/bugsnag-deployer-recipe/recipes/BugsnagRecipe.php';
```

and add the task ```artisan:bugsnag:deploy``` as your last task (after deploy is done).

``` php
after('your:last:task', 'artisan:bugsnag:deploy');
```

## Minimum requirements

- Laravel 5.5
- PHP 7.0



## License

This package is licensed under the MIT License
