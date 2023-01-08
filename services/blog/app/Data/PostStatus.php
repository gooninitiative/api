<?php

namespace App\Data;

use Spatie\Enum\Enum;

/**
 * @method static self draft()
 * @method static self published()
 * @method static self archived()
 */
class PostStatus extends Enum
{}
