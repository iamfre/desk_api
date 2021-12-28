<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskListStoreRequest;
use App\Http\Resources\DeskListResource;
use App\Models\DeskList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeskListController extends Controller
{

    public function index()
    {
        return DeskListResource::collection(DeskList::get());
    }

    public function store(DeskListStoreRequest $request)
    {
        $new_deskList = DeskList::create($request->validated());

        return new DeskListResource($new_deskList);
    }

    public function show(DeskList $deskList)
    {
        return new DeskListResource($deskList);
    }

    public function update(DeskListStoreRequest $request, DeskList $deskList)
    {
        $deskList->update($request->validated());

        return new DeskListResource($deskList);
    }

    public function destroy(DeskList $deskList)
    {
        $deskList->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
