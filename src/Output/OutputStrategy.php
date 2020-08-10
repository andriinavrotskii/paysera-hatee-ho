<?php

namespace Task\Output;

class OutputStrategy
{
    /**
     * @var EchoOutput
     */
    private $echoOutput;

    /**
     * @var EchoOutputDashDelimiter
     */
    private $echoOutputDashDelimiter;

    /**
     * @var EchoOutputSpaceDelimiter
     */
    private $echoOutputSpaceDelimiter;

    /**
     * OutputStrategy constructor.
     * @param EchoOutput $echoOutput
     * @param EchoOutputDashDelimiter $echoOutputDashDelimiter
     * @param EchoOutputSpaceDelimiter $echoOutputSpaceDelimiter
     */
    public function __construct(
        EchoOutput $echoOutput,
        EchoOutputDashDelimiter $echoOutputDashDelimiter,
        EchoOutputSpaceDelimiter $echoOutputSpaceDelimiter
    ) {
        $this->echoOutput = $echoOutput;
        $this->echoOutputDashDelimiter = $echoOutputDashDelimiter;
        $this->echoOutputSpaceDelimiter = $echoOutputSpaceDelimiter;
    }

    /**
     * @param OutputTypeEnum $outputType
     * @return OutputInterface
     */
    public function deduct(OutputTypeEnum $outputType): OutputInterface
    {
        switch ($outputType) {
            case OutputTypeEnum::ECHO:
                $result = $this->echoOutput;
                break;
            case OutputTypeEnum::ECHO_DASH:
                $result = $this->echoOutputDashDelimiter;
                break;
            case OutputTypeEnum::ECHO_SPACE:
                $result = $this->echoOutputSpaceDelimiter;
                break;
            default:
                throw new \LogicException('Unknown output type.');
        }

        return $result;
    }
}
