<?php

namespace Task\Output;

class EchoOutput implements OutputInterface
{
    protected const DELIMITER = '';

    /**
     * @param string $string
     * @param array|null $options
     */
    public function write(string $string, array $options = null): void
    {
        $this->useDelimiter($options);
        $this->actionWrite($string);
    }

    /**
     * @param array|null $options
     */
    private function useDelimiter(?array $options): void
    {
        if ($this->isShow($options)) {
            $this->actionWrite(static::DELIMITER);
        }
    }

    /**
     * @param array|null $options
     * @return bool
     */
    private function isShow(?array $options): bool
    {
        if (\is_null($options)) {
            $result = true;
        } else {
            $result = \array_key_exists('firstOne', $options)
                && \is_bool($options['firstOne'])
                && false === $options['firstOne'];
        }

        return $result;
    }

    /**
     * @param string $string
     */
    private function actionWrite(string $string): void
    {
        echo $string;
    }
}
