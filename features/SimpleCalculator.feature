Feature: Simple Calculator

Scenario: Addition
    Given I have a calculator
    When I add together "2" and "3"
    Then the result should be "5"

Scenario: Substraction
    Given I have a calculator
    When I subtract "2" from "3"
    Then the result should be "1"

Scenario: Multiplication
    Given I have a calculator
    When I multiply together "2" and "3"
    Then the result should be "6"

Scenario: Division
    Given I have a calculator
    When I divide "3" by "2"
    Then the result should be "1.5"