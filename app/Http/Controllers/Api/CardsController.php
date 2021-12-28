<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardRequest;
use App\Http\Resources\CardsResource;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CardsController extends Controller
{
    public function index()
    {
        return CardsResource::collection(Card::get());
    }

    public function store(CardRequest $request)
    {
        $new_card = Card::create($request->validated());

        return new CardsResource($new_card);
    }

    public function show(Card $card)
    {
        return new CardsResource($card);
    }

    public function update(CardRequest $request, Card $card)
    {
        $card->update($request->validated());

        return new CardsResource($card);
    }

    public function destroy(Card $card)
    {
        $card->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
