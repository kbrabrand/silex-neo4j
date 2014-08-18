Neo4j service provider for Silex
============================
Service provider making the Neo4j graph database accessible to your Silex application.

[![Build Status](https://travis-ci.org/kbrabrand/silex-neo4j.svg?branch=master)](https://travis-ci.org/kbrabrand/silex-neo4j)

## Installation
Add `"kbrabrand/silex-neo4j": "XXX"` to the composer.json file inside your project and do a `composer install`. Check [Composer][1] for the latest available version.

## Setup instructions
Register the Neo4j service provider in your Silex app like this;

```php
use KBrabrand\Silex\Provider\Neo4jServiceProvider;

$app->register(new Neo4jServiceProvider(), array(
    'neo4j.transport' => 'localhost', // Hostname as string, or Everyman\Neo4j\Transport object
    'neo4j.port'      => 7474,        // Port number, ignored if transport is not a string
));
```

## Usage
After registering the Neo4j service provider, the Everyman\Neo4j\Client instance can be accessed from the `$app` variable like this;

```php
$node = $app['neo4j']->getNode(123);
```

## Tests
The service provider comes with PHPUnit tests and can be run by doing a `./vendor/phpunit/phpunit/phpunit` inside the silex-neo4j folder.

## License
License
Copyright (c) 2014, Kristoffer Brabrand kristoffer@brabrand.no

Licensed under the MIT License

[1]: http://packagist.org/packages/kbrabrand/silex-neo4j
