<?php

namespace App\Data;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\DataProperty;

class PostStatusCast implements Cast
{
  public function cast(DataProperty $property, mixed $value, array $context): PostStatus
  {
    return PostStatus::from($value);
  }
}
