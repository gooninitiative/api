<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Enum;

/**
 * @method static self draft()
 * @method static self published()
 * @method static self archived()
 */
class PostStatus extends Enum
{
}
