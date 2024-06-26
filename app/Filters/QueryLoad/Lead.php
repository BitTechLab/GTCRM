<?php

namespace App\Filters\QueryLoad;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Lead extends BaseQueryLoad
{
    public function handle(Builder $queryBuilder, Closure $next): Builder
    {
        return $this->process($queryBuilder, $next, 'lead');
    }
}
