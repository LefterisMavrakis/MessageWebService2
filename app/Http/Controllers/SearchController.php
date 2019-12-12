<?php


namespace App\Http\Controllers;

use App\Message;
use App\Http\Resources\Message as MessageResource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $data = request()->validate([
            'searchTerm' => 'required',
        ]);

        //collecting contacts using laravel query chain
        $message = Message::where('email',  $data['searchTerm'])
            ->latest()
            ->limit(1)
            ->get();

        return MessageResource::collection($message);
    }
}

