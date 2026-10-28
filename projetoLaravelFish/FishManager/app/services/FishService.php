<?php

namespace App\Services;

use App\Models\Fish;

class FishService
{
    public function getAllFishes()
    {
        return Fish::with('type')->latest()->get();
    }

    public function storeFish(array $data)
    {
        return Fish::create($data);
    }

    public function updateFish(Fish $fish, array $data)
    {
        $fish->update($data);
        return $fish;
    }

    public function deleteFish(Fish $fish)
    {
        return $fish->delete();
    }
}