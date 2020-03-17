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
 * Provider for all holidays in Guadeloupe (France).
 *
 * Guadeloupe is an insular region of France in the Caribbean Sea whose nearest neighbors are
 * Montserrat, Antigua and Barbuda, Dominica, Saint Kitts and Nevis, and Martinique.
 * The official language is French.
 *
 * @link https://en.wikipedia.org/wiki/Guadeloupe
 */
class Guadeloupe extends Overseas
{

    /**
     * Code to identify this Holiday Provider. Typically this is the ISO3166 code corresponding to the respective
     * country or sub-region.
     */
    public const ID = 'FR-GP';

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

        $this->timezone = 'America/Guadeloupe';
        $this->slaveryAbolitionDay(5, 27);
    }
}
