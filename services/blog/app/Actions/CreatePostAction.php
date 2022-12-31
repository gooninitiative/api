<?php

namespace App\Actions;

use App\Data\PostData;
use App\Data\PostStatus;
use App\Models\Post;
use Carbon\CarbonImmutable;

class CreatePostAction
{
    public function execute(
        string $title,
        string $content,
        PostStatus $status,
        ?CarbonImmutable $published_at
    ): Post
    {
        return new PostData($title, $content, $status, $published_at);
    }
}
