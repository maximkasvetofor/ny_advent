<?php

namespace App\Repositories;

use App\Models\Day;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DayRepository
{
    public function getAdvents(): Collection
    {
        return Day::query()->get();
    }

    public function getAdvent($id): Model
    {
        return Day::query()->findOrFail($id);
    }

    public function update(int $id, array $data): bool
    {
        return Day::query()->where('id', '=', $id)->update($data);
    }
}
