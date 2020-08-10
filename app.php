<?php
require __DIR__ . '/vendor/autoload.php';

$containerBuilder = new DI\ContainerBuilder();
$container = $containerBuilder
    ->build();

function rangeGenerator(int $start, int $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

$configurations = [
    [
        'name' => 'Task v1:',
        'range' => rangeGenerator(1, 20),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask1Conditions(),
        'output' => 'echo-space',
    ],
    [
        'name' => 'Task v2:',
        'range' => rangeGenerator(1, 15),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask2Conditions(),
        'output' => 'echo-dash',
    ],
    [
        'name' => 'Task v3:',
        'range' => rangeGenerator(1, 10),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask3Conditions(),
        'output' => 'echo-dash',
    ],
];

foreach ($configurations as $configuration) {
    $controller = $container->get(Task\Controller::class);
    $controller->run($configuration);
}