<?php
require __DIR__ . '/vendor/autoload.php';

$containerBuilder = new DI\ContainerBuilder();
$container = $containerBuilder
    ->build();

$configurations = [
    [
        'name' => 'Task v1:',
        'range' => range(1, 20),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask1Conditions(),
        'output' => 'echo-space',
    ],
    [
        'name' => 'Task v2:',
        'range' => range(1, 15),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask2Conditions(),
        'output' => 'echo-dash',
    ],
    [
        'name' => 'Task v3:',
        'range' => range(1, 10),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask3Conditions(),
        'output' => 'echo-dash',
    ],
];

foreach ($configurations as $configuration) {
    $logic = $container->get(Task\Controller::class);
    $logic->run($configuration);
}