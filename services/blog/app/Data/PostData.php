<?php

namespace App\Data;

use Carbon\CarbonImmutable;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $title,
        public ?string $content,
        #[WithCast(PostStatusCast::class)]
        public PostStatus $status,
        public ?CarbonImmutable $published_at
    ) {}
}
