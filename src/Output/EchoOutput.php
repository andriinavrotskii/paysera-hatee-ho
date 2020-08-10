<?php

namespace Task\Output;

class EchoOutput implements OutputInterface
{
    protected const DELIMITER = '';

    /**
     * @param string $string
     * @param array $options
     */
    public function write(string $string, array $options): void
    {
        $this->useDelimiterOption($options);
        echo $string;
    }

    /**
     * @param array $options
     */
    private function useDelimiterOption(array $options): void
    {
        if (!\array_key_exists('firstOne', $options) && !\is_float($options['firstOne'])) {
           return;
        }

        echo self::DELIMITER;
    }
}