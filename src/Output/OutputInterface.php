<?php

namespace Task\Output;

interface OutputInterface
{
    /**
     * @param string $string
     * @param array|null $options
     */
    public function write(string $string, array $options = null): void;
}
