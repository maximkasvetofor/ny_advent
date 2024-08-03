<?php

namespace App\Repositories;

use App\Models\Days;
use Illuminate\Database\Eloquent\Collection;

class DayRepository
{
    public function getAdvent(): Collection
    {
        return Days::query()->get();
    }
}
