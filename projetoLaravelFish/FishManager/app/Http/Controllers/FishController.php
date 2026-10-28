<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Services\FishService;
use App\Http\Requests\StoreUpdateFishRequest;

class FishController extends Controller
{
    protected $fishService;

    public function __construct(FishService $fishService)
    {
        $this->fishService = $fishService;
    }

    public function index()
    {
        $fishes = $this->fishService->getAllFishes();
        return view('fishes.index', compact('fishes'));
    }

    public function store(StoreUpdateFishRequest $request)
    {
        $this->fishService->storeFish($request->validated());
        return redirect()->route('fishes.index')->with('success', 'Registro atualizado!');
    }

    public function update(StoreUpdateFishRequest $request, Fish $fish)
    {
        $this->fishService->updateFish($fish, $request->validated());
        return redirect()->route('fishes.index')->with('success', 'Registro alterado!');
    }

    public function destroy(Fish $fish)
    {
        $this->fishService->deleteFish($fish);
        return redirect()->route('fishes.index')->with('success', 'Registro removido!');
    }
}