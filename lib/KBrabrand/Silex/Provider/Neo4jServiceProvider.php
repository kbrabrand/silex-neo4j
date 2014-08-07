<?php

namespace KBrabrand\Silex\Provider;

use Silex\Application,
    Silex\ServiceProviderInterface;

use Everyman\Neo4j\Client as Neo4jClient;

class Neo4jServiceProvider implements ServiceProviderInterface {

    public function register(Application $app) {
        $app['neo4j.transport'] = 'localhost';
        $app['neo4j.port'] = 7474;

        $app['neo4j'] = $app->share(function() use ($app) {
            return new Neo4jClient(
                $app['neo4j.transport'],
                $app['neo4j.port']
            );
        });
    }

    public function boot(Application $app) { }
}
