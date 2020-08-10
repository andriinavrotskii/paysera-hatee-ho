<?php
require __DIR__ . '/vendor/autoload.php';

$containerBuilder = new DI\ContainerBuilder();
$container = $containerBuilder->build();

$configurations = [
    [
        'name' => 'Task v1:',
        'range' => range(1, 20),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask1Conditions()
    ],
    [
        'name' => 'Task v2:',
        'range' => range(1, 15),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask2Conditions()
    ],
    [
        'name' => 'Task v3:',
        'range' => range(1, 10),
        'conditions' => ($container->get(Task\Condition\ConditionStorage::class))
            ->getTask3Conditions()
    ],
];

foreach ($configurations as $configuration) {
    $logic = $container->get(Task\Logic::class);
    $logic->run($configuration);
}