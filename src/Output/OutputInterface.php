<?php

namespace Task\Output;

interface OutputInterface
{
    /**
     * @param string $string
     * @param array $options
     */
    public function write(string $string, array $options): void;
}
