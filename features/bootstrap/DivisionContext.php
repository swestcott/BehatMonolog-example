<?php

use Behat\Behat\Context\BehatContext;

class DivisionContext extends BehatContext
{
    /**
     * @When /^I divide "([^"]*)" by "([^"]*)"$/
     */
    public function iDivideBy($value1, $value2)
    {
        $this->logger->info('Dividing values', array($value1, $value2));
        $result = $value1 / $value2;
        $this->getMainContext()->calc->result = $result;
    }
}