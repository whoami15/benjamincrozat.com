<?php

namespace App\Repositories\Contracts;

use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface PostRepositoryContract
{
    public function get(string $slug) : ?Post;

    public function latest(bool $paginated = true) : LengthAwarePaginator|Collection;

    public function popular() : Collection;

    public function recommendations(array $ids, int $exclude) : Collection;
}
