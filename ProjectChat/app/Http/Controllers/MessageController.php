<?php

namespace Chat\Http\Controllers;

use Chat\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $message = Message::all()->sortByDesc('id');

        return view('message.index', ['messages' => $message]);
    }


    public function create()
    {
        return view('message.create');
    }


    public function store(Request $request)
    {

        $message = new \Chat\Message($request->all());

        $message->user_id = \Auth::user()->id;

        $message->save();

        return redirect()->route('message.index');
    }

    public function show(Message $message)
    {
        //
    }

    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy(Message $message)
    {
        //
    }
}
