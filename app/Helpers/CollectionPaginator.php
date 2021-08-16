<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CollectionPaginator
{
    public function paginate($enumerable, $perPage = 10)
    {
        $offsetPage = request()->query('page', 1) - 1;

        if ($enumerable instanceof Collection) {

            $collectionPagination = $enumerable->skip($offsetPage * $perPage)->take($perPage);

            $total = count($enumerable);

            return new LengthAwarePaginator($collectionPagination, $total, $perPage);
        }
    }
}
