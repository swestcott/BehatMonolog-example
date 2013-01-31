<?php

use Behat\Behat\Context\BehatContext;

class AdditionContext extends BehatContext
{
    /**
     * @When /^I add together "([^"]*)" and "([^"]*)"$/
     */
    public function iAddTogetherAnd($value1, $value2)
    {
        $this->logger->info('Adding values', array($value1, $value2));
        $result = $value1 + $value2;
        $this->getMainContext()->calc->result = $result;
    }
}