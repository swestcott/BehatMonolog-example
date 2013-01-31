<?php

use Behat\Behat\Context\BehatContext;

class SubtractionContext extends BehatContext
{
    /**
     * @When /^I subtract "([^"]*)" from "([^"]*)"$/
     */
    public function iSubtractFrom($value1, $value2)
    {
        $this->logger->info('Substracting values', array($value1, $value2));
        $result = $value2 - $value1;
        $this->getMainContext()->calc->result = $result;
    }
}