<?php

namespace App\Repositories;

use App\Models\Days;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DayRepository
{
    public function getAdvents(): Collection
    {
        return Days::query()->get();
    }

    public function getAdvent($id): Model
    {
        return Days::query()->findOrFail($id);
    }
}
