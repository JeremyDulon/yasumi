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

namespace Yasumi\Provider\France;

use DateTime;
use DateTimeZone;
use Yasumi\Exception\InvalidDateException;
use Yasumi\Exception\UnknownLocaleException;
use Yasumi\Holiday;
use Yasumi\Provider\France;

/**
 * Provider for all holidays Overseas (France).
 *
 * Overseas France (French: France d'outre-mer) consists of all the French-administered territories outside Europe,
 * mostly relics of the French colonial empire.
 *
 * @link https://en.wikipedia.org/wiki/Overseas_France
 */
class Overseas extends France
{
    /**
     * Initialize holidays for Guadeloupe (France).
     *
     * @throws InvalidDateException
     * @throws \InvalidArgumentException
     * @throws UnknownLocaleException
     * @throws \Exception
     */
    public function initialize(): void
    {
        parent::initialize();
    }

    /**
     * Guadeloupe's slavery abolition Day
     *
     * @param int $month the month for which the slavery Abolition Day is celebrated
     * @param int $day the day for which the slavery Abolition Day is celebrated
     *
     * @throws InvalidDateException
     * @throws \InvalidArgumentException
     * @throws UnknownLocaleException
     * @throws \Exception
     */
    protected function slaveryAbolitionDay($month, $day)
    {
        $this->addHoliday(new Holiday('slaveryAbolitionDay', [
             'en' => 'Slavery Abolition Day',
             'fr' => 'Jour d′abolition de l′esclavage',
         ], new DateTime("$this->year-$month-$day", new DateTimeZone($this->timezone)), $this->locale));
    }
}
