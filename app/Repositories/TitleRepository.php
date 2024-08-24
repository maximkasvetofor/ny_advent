<?php

namespace App\Repositories;

use App\Models\Title;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TitleRepository
{
    public function getTitles(): Collection
    {
        return Title::query()->get();
    }

    public function getTitle($name): Model
    {
        return Title::query()->where('name', '=', $name)->firstOrFail();
    }
    public function update(int $id, array $data): bool
    {
        return Title::query()->where('id', '=', $id)->update($data);
    }
}
