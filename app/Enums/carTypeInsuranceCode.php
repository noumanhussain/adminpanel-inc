<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class carTypeInsuranceCode extends Enum
{
    public const Comprehensive = 'Comprehensive';
    public const ThirdPartyOnly = 'Third Party Only';
}
