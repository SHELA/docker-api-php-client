<?php

require_once '../vendor/autoload.php';

use Docker\Context\Context;
use Docker\Docker;
use Docker\DockerClientFactory;

$docker = Docker::create();
$imageName = "demo:test";
$context = 'context';
$buildContext   = new Context('.');

// todo: .dockerignore

$buildStream = $docker->imageBuild($buildContext->toStream(), [
    't' => $imageName, 'dockerfile' => $context . '/Dockerfile',
    'buildargs' => json_encode([
        'SERVERLESS_PHP_MODULES' => '',
        'SERVERLESS_CTX_PATH'    => $context
    ])
]);

$buildStream->onFrame(function (\Docker\API\Model\BuildInfo $buildInfo) {
    if ($error = $buildInfo->getError()) {
        throw new \RuntimeException($error);
    } else {
        $stream = $buildInfo->getStream();
        if (0 === strpos($stream, 'Step')) {
            echo ("$stream");
        } elseif ($stream) {
            echo $stream;
        }
    }
});

$buildStream->wait();
