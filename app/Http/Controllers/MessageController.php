<?php

namespace App\Http\Controllers;

use App\Http\Resources\Message as MessageResource;
use App\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $message = new Message();
        $this->validateData();
        $message->email = $request->email;
        $message->name = $request->name;
        $message->subject = $request->subject;
        $message->body = $request->body;

        $messageResource=new MessageResource($message);
        $messageResource->save();


        return ($messageResource)
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);


    }

    private function validateData(){
        $customMessages=[
          'unique' => 'You have already send a message with this body'
        ];
        return request()->validate([
            'email'=>'required|email',
            'name'=>'required',
            'subject'=>'required',
            'body'=>'required|unique:messages'
        ],$customMessages);
    }
}
