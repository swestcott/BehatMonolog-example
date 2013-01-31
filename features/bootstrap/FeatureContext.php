<?php

use Behat\Behat\Context\BehatContext;

//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    public $calc;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
        $this->useContext('addition', new AdditionContext);
        $this->useContext('subtraction', new SubtractionContext);
        $this->useContext('multiplication', new MultiplicationContext);
        $this->useContext('division', new DivisionContext);
    }

    /**
     * @Given /^I have a calculator$/
     */
    public function iHaveACalculator()
    {
        $this->calc = new stdClass();
        $this->calc->result = null;
        $this->logger->info('Initialised calculator', array(get_class($this->calc)));
    }

    /**
     * @Then /^the result should be "([^"]*)"$/
     */
    public function theResultShouldBe($expected)
    {
        $this->logger->info('Asserting expected result "' . $expected . '" equals "' . $this->calc->result . '"');
        assertEquals($expected, $this->calc->result);
    }
}
