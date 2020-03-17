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

namespace Yasumi\tests\France\Reunion;

use Yasumi\tests\France\FranceBaseTestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Reunion (France) holiday provider.
 */
abstract class ReunionBaseTestCase extends FranceBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    public const REGION = 'France/Reunion';

    /**
     * Timezone in which this provider has holidays defined
     */
    public const TIMEZONE = 'Indian/Reunion';

    /**
     * Locale that is considered common for this provider
     */
    public const LOCALE = 'fr_FR';
}
