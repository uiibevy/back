<?php

namespace App\Http\Controllers;

use App\Http\Requests\identityRequest;
use App\Http\Resources\identityResource;
use App\Models\identity;

class identityController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', identity::class);

        return identityResource::collection(identity::all());
    }

    public function store(identityRequest $request)
    {
        $this->authorize('create', identity::class);

        return new identityResource(identity::create($request->validated()));
    }

    public function show(identity $identity)
    {
        $this->authorize('view', $identity);

        return new identityResource($identity);
    }

    public function update(identityRequest $request, identity $identity)
    {
        $this->authorize('update', $identity);

        $identity->update($request->validated());

        return new identityResource($identity);
    }

    public function destroy(identity $identity)
    {
        $this->authorize('delete', $identity);

        $identity->delete();

        return response()->json();
    }
}
