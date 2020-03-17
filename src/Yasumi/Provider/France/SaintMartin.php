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

use Yasumi\Exception\InvalidDateException;
use Yasumi\Exception\UnknownLocaleException;

/**
 * Provider for all holidays in SaintMartin (France).
 *
 * The Collectivity of Saint Martin is an overseas collectivity of France in the West Indies in the Caribbean.
 * The official language is French.
 *
 * @link https://en.wikipedia.org/wiki/Collectivity_of_Saint_Martin
 */
class SaintMartin extends Overseas
{

    /**
     * Code to identify this Holiday Provider. Typically this is the ISO3166 code corresponding to the respective
     * country or sub-region.
     */
    public const ID = 'FR-MF';

    /**
     * Initialize holidays for SaintMartin (France).
     *
     * @throws InvalidDateException
     * @throws \InvalidArgumentException
     * @throws UnknownLocaleException
     * @throws \Exception
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->timezone = 'America/Marigot';
        $this->slaveryAbolitionDay(5, 27);
    }
}
