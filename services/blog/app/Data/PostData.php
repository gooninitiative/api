<?php

namespace App\Data;

use Carbon\CarbonImmutable;
use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $title,
        public string $content,
        public PostStatus $status,
        public ?CarbonImmutable $published_at
    ){
    }
}
