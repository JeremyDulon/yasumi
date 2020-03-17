<?php declare(strict_types=1);
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2020 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\France\SaintMartin;

use DateTime;
use Exception;
use ReflectionException;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class containing tests for Slavery Abolition Day in SaintMartin (France).
 */
class SlaveryAbolitionTest extends SaintMartinBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday
     */
    public const HOLIDAY = 'slaveryAbolitionDay';

    /**
     * Tests Slavery Abolition Day.
     *
     * @dataProvider SlaveryAbolitionDayDataProvider
     *
     * @param int $year the year for which Slavery Abolition Day needs to be tested
     * @param DateTime $expected the expected date
     *
     * @throws ReflectionException
     */
    public function testSlaveryAbolitionDay($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year, $expected);
    }

    /**
     * Tests translated name of Slavery Abolition Day.
     * @throws ReflectionException
     */
    public function testTranslation(): void
    {
        $this->assertTranslatedHolidayName(
            self::REGION,
            self::HOLIDAY,
            $this->generateRandomYear(),
            [self::LOCALE => 'Jour d′abolition de l′esclavage']
        );
    }

    /**
     * Tests type of the holiday defined in this test.
     * @throws ReflectionException
     */
    public function testHolidayType(): void
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_OFFICIAL);
    }

    /**
     * Returns a list of random test dates used for assertion of Slavery Abolition Day.
     *
     * @return array list of test dates for Slavery Abolition Day
     * @throws Exception
     */
    public function SlaveryAbolitionDayDataProvider(): array
    {
        return $this->generateRandomDates(5, 27, self::TIMEZONE);
    }
}
