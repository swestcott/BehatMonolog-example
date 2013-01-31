BehatMonolog-example
====================

Example implementation of [MonologExtension](https://github.com/swestcott/MonologExtension) for [Behat](https://github.com/Behat/Behat).

Usage
=====

Clone the repo

```bash
$ git@github.com:swestcott/BehatMonolog-example.git
```

And install dependancies via composer,

```bash
$ cd BehatMonolog-example
$ curl http://getcomposer.org/installer | php
$ php composer.phar install
```

And execute behat,

```bash
$ bin/behat
```

Then /tmp/behat should contain,

```
[2013-01-31 00:00:00] FeatureContext.INFO: Initialised calculator ["stdClass"] []
[2013-01-31 00:00:00] AdditionContext.INFO: Adding values ["2","3"] []
[2013-01-31 00:00:00] FeatureContext.INFO: Asserting expected result "5" equals "5" [] []
[2013-01-31 00:00:00] FeatureContext.INFO: Initialised calculator ["stdClass"] []
[2013-01-31 00:00:00] SubtractionContext.INFO: Substracting values ["2","3"] []
[2013-01-31 00:00:00] FeatureContext.INFO: Asserting expected result "1" equals "1" [] []
[2013-01-31 00:00:00] FeatureContext.INFO: Initialised calculator ["stdClass"] []
[2013-01-31 00:00:00] MultiplicationContext.INFO: Multiplying values ["2","3"] []
[2013-01-31 00:00:00] FeatureContext.INFO: Asserting expected result "6" equals "6" [] []
[2013-01-31 00:00:00] FeatureContext.INFO: Initialised calculator ["stdClass"] []
[2013-01-31 00:00:00] DivisionContext.INFO: Dividing values ["3","2"] []
[2013-01-31 00:00:00] FeatureContext.INFO: Asserting expected result "1.5" equals "1.5" [] []
```
