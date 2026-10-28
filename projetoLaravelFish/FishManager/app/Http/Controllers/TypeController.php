<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\StoreUpdateTypeRequest;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::withCount('fish')->paginate(10);
        return view('types.index', compact('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(StoreUpdateTypeRequest $request)
    {
        Type::create($request->validated());
        return redirect()->route('types.index')->with('success', 'Tipo criado com sucesso!');
    }

    public function show(Type $type)
    {
        $type->load('fish');
        return view('types.show', compact('type'));
    }

    public function edit(Type $type)
    {
        return view('types.edit', compact('type'));
    }

    public function update(StoreUpdateTypeRequest $request, Type $type)
    {
        $type->update($request->validated());
        return redirect()->route('types.index')->with('success', 'Tipo atualizado com sucesso!');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('types.index')->with('success', 'Tipo excluído com sucesso!');
    }
}