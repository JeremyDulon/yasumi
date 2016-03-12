<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\Tests\Denmark;

use PHPUnit_Framework_TestCase;
use Yasumi\Tests\YasumiBase;

/**
 * Base class for test cases of the Denmark holiday provider.
 */
abstract class DenmarkBaseTestCase extends PHPUnit_Framework_TestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    const REGION = 'Denmark';

    /**
     * Timezone in which this provider has holidays defined
     */
    const TIMEZONE = 'Europe/Copenhagen';

    /**
     * List of holidays (shortnames) that are generally expected to be defined
     */
    public static $expectedHolidays = [
        'newYearsDay',
        'maundyThursday',
        'goodFriday',
        'easter',
        'easterMonday',
        'greatPrayerDay',
        'ascensionDay',
        'pentecost',
        'pentecostMonday',
        'christmasDay',
        'secondChristmasDay'
    ];

}
