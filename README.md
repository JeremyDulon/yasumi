[![Latest Stable Version](https://poser.pugx.org/azuyalabs/yasumi/v/stable.svg)](https://packagist.org/packages/azuyalabs/yasumi) [![Total Downloads](https://poser.pugx.org/azuyalabs/yasumi/downloads.svg)](https://packagist.org/packages/azuyalabs/yasumi) [![Latest Unstable Version](https://poser.pugx.org/azuyalabs/yasumi/v/unstable.svg)](https://packagist.org/packages/azuyalabs/yasumi) [![License](https://poser.pugx.org/azuyalabs/yasumi/license.svg)](https://packagist.org/packages/azuyalabs/yasumi) [![Build Status](https://travis-ci.org/azuyalabs/yasumi.svg?branch=master)](https://travis-ci.org/azuyalabs/yasumi)
Yasumi
==========

Yasumi (Japanese for 'Holiday') is an easy PHP library to help you calculate the dates and names of holidays and other
special celebrations from various countries/states. Many services exist on the internet that provide holidays, however
are either not free or offer only limited information. In addition, no complete PHP library seems to exist today
that covers a wide range of holidays and countries, except maybe PEAR's Date_Holidays which unfortunately hasn't been
updated for a while.

The goal of Yasumi is to be powerful while remaining lightweight, by utilizing PHP native classes wherever possible.
Yasumi's calculation is provider-based (i.e. by country/state) so it is easy to add new holiday providers that calculate
holidays. The methods of Yasumi can be used to get a holiday's date and name in various languages.


Highlights
-------

* Simple API
* Use of Providers to easily extend and expand new Holidays
* Common Holiday Providers
* Global Translations
* Implements ArrayIterator to easily process a provider's holidays
* Filters enabling to easily select certain holiday types (Official, Observed, Bank, Seasonal or Other) 
* Fully documented
* Fully Unit tested
* Framework-agnostic
* Composer ready, [PSR-2] compliant

Currently the following holiday providers are implemented:

* Japan
* Netherlands
* Belgium
* USA
* Italy
* France
* Spain (including the autonomous communities Andalusia, Aragon, Asturias, Balearic Islands, Basque Country, 
         Canary Islands, Cantabria, Castile and León, Castilla-La Mancha, Ceuta, Community of Madrid, Extremadura, 
         Galicia, La Rioja, Melilla, Navarre, Region of Murcia, Valencian Community)
* Denmark

Yasumi has the following filters to allow you to filter only certain type of holidays:

* Official
* Observed
* Bank
* Seasonal
* Other


System Requirements
-------------------

You need **PHP >= 5.5.0** to use `azuyalabs/yasumi` but the latest stable version of PHP is recommended.


Installation
------------

Install `azuyalabs/yasumi` using Composer.

```
$ composer require azuyalabs/yasumi
```


Testing
-------

Yasumi has a [PHPUnit](https://phpunit.de/) test suite. To run the tests, run the following command from the project 
folder:

``` bash
$ phpunit
```

Yasumi has over 780 unit tests with multiple iterations of assertions. Since Yasumi is using randomized years for asserting
the holidays, multiple iterations of assertions are executed to ensure the holidays are calculated in a large number
of years.

The tests are organized in some test suites to make testing a bit more easier:

* Base       : For testing the base functionality of Yasumi
* Japan      : For separately testing the Japan Holiday Provider
* Netherlands: For separately testing the Netherlands Holiday Provider
* Belgium    : For separately testing the Belgium Holiday Provider
* USA        : For separately testing the USA Holiday Provider
* Italy      : For separately testing the Italy Holiday Provider
* France     : For separately testing the France Holiday Provider
* Spain      : For separately testing the Spain Holiday Provider
* Denmark    : For separately testing the Denmark Holiday Provider


Basic Usage
-------

```php
<?php
// Require the composer auto loader
require 'vendor/autoload.php';

use Yasumi\Yasumi;
use Yasumi\Filters\OfficialHolidaysFilter;

// Use the factory to create a new holiday provider instance
$holidays = Yasumi::create('USA', 2016);

// Get the number of defined holidays
echo $holidays->count() . PHP_EOL;
// 11

// Get a list all of the holiday names (short names)
foreach ($holidays->getHolidayNames() as $name) {
    echo $name . PHP_EOL;
}
// 'newYearsDay'
// 'martinLutherKingDay'
// 'washingtonsBirthday'
// 'memorialDay'
// 'substituteHoliday:independenceDay'
// 'independenceDay'
// 'labourDay'
// 'columbusDay'
// 'veteransDay'
// 'thanksgivingDay'
// 'christmasDay'

// Get a list all of the holiday dates
foreach ($holidays->getHolidayDates() as $date) {
    echo $date . PHP_EOL;
}
// 2016-01-01
// 2016-01-18
// 2016-02-15
// 2016-05-30
// 2016-07-04
// 2016-09-05
// 2016-10-10
// 2016-11-11
// 2016-11-24
// 2016-12-25
// 2016-12-26

// Get a holiday object for Independence Day
$independenceDay = $holidays->getHoliday('independenceDay');

// Get the localized name
echo $independenceDay->getName() . PHP_EOL;
// 'Independence Day'

// Get the date
echo $independenceDay . PHP_EOL;
// '2016-07-04'

// Get the type of holiday
echo $independenceDay->getType() . PHP_EOL;
// 'national'

// Print the holiday as a JSON object
echo json_encode($independenceDay, JSON_PRETTY_PRINT);
// {
//    "shortName": "independenceDay",
//    "translations": {
//    "en_US": "Independence Day"
//    },
//    "date": "2016-07-04 00:00:00.000000",
//    "timezone_type": 3,
//    "timezone": "America\/New_York"
// }

// Retrieve only the official holidays for the Netherlands in 2014
$holidays = Yasumi::create('Netherlands', 2014);
$official = new OfficialHolidaysFilter($holidays->getIterator());
foreach ($official as $day) {
    echo $day->getName() . PHP_EOL;
}
// 'New Year's Day'
// 'Easter Sunday'
// 'Easter Monday'
// 'Kings Day'
// 'Ascension Day'
// 'Whitsunday'
// 'Whitmonday'
// 'Christmas'
// 'Boxing Day'
```

License
-------

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[PSR-2]: http://www.php-fig.org/psr/psr-2/