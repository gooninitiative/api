<?php

namespace App\Http\Controllers\Post;

use App\Data\PostData;
use App\Data\PostStatus;
use App\Http\Controllers\Controller;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request): PostData
    {
      $post = PostData::from($request);
        return $post;
    }
}
