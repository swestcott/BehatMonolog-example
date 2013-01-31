<?php

use Behat\Behat\Context\BehatContext;

class MultiplicationContext extends BehatContext
{
    /**
     * @When /^I multiply together "([^"]*)" and "([^"]*)"$/
     */
    public function iMultiplyTogetherAnd($value1, $value2)
    {
        $this->logger->info('Multiplying values', array($value1, $value2));
        $result = $value1 * $value2;
        $this->getMainContext()->calc->result = $result;
    }
}