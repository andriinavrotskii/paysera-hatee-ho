<?php

namespace Task;

use Task\Condition\ConditionInterface;
use Task\Output\OutputStrategy;
use Task\Output\OutputTypeEnum;
use Task\Service\Service;

class Controller
{
    /**
     * @var OutputStrategy
     */
    private $outputStrategy;
    /**
     * @var Service
     */
    private $service;

    /**
     * Controller constructor.
     * @param OutputStrategy $outputStrategy
     */
    public function __construct(OutputStrategy $outputStrategy, Service $service)
    {
        $this->outputStrategy = $outputStrategy;
        $this->service = $service;
    }

    /**
     * @param array $configuration
     */
    public function run(array $configuration): void
    {
        $echoOutput = $this->outputStrategy->deduct(OutputTypeEnum::ECHO());
        $echoOutput->write($configuration['name']);
        $echoOutput->write("\n");

        $output = $this->outputStrategy->deduct(
            OutputTypeEnum::fromValue($configuration['output'])
        );

        $firstOne = true;
        foreach ($configuration['range'] as $number) {
            /** @var ConditionInterface $condition */
            foreach ($this->service->execute($configuration['conditions'], $number) as $serviceResult) {
                $output->write($serviceResult, ['firstOne' => $firstOne]);
                break;
            }
            $firstOne = false;
        }

        $echoOutput->write("\n");
    }
}