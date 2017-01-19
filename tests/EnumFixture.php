<?php

namespace PSCS\Tests\Enum;

use PSCS\Enum\Enum;

/**
 * Class EnumFixture
 *
 * @method static EnumFixture FOO()
 * @method static EnumFixture BAR()
 * @method static EnumFixture NUMBER()
 *
 * @method static EnumFixture PROBLEMATIC_NUMBER()
 * @method static EnumFixture PROBLEMATIC_NULL()
 * @method static EnumFixture PROBLEMATIC_EMPTY_STRING()
 * @method static EnumFixture PROBLEMATIC_BOOLEAN_FALSE()
 *
 */
class EnumFixture extends Enum
{
    const FOO = "foo";
    const BAR = "bar";
    const NUMBER = 42;

    /**
     * Values that are known to cause problems when used with soft typing
     */
    const PROBLEMATIC_NUMBER = 0;
    const PROBLEMATIC_NULL = null;
    const PROBLEMATIC_EMPTY_STRING = '';
    const PROBLEMATIC_BOOLEAN_FALSE = false;
}
