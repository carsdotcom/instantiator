<?php

namespace mrkrstphr\Instantiator;

class Instantiator
{
    /**
     * Instantiates the given class with the given data.
     *
     * @param string $className
     * @param array $data
     * @return object
     */
    public function instantiate($className, array $data = [])
    {
        $refl = new \ReflectionClass($className);

        $instanceArgs = [];

        if ($data) {
            $instanceArgs = $this->extractArguments($refl->getConstructor()->getParameters(), $data);
        }

        return $refl->newInstanceArgs($instanceArgs);
    }

    /**
     * Builds a list of values matching the provided arguments.
     *
     * @param array $arguments
     * @param array $data
     * @return array
     */
    protected function extractArguments(array $arguments, array $data)
    {
        $instanceArgs = [];

        foreach ($arguments as $arg) {
            if (array_key_exists($arg->getName(), $data)) {
                $instanceArgs[] = $data[$arg->getName()];
            } else {
                $instanceArgs[] = null;
            }
        }

        return $instanceArgs;
    }
}
