<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function index()
    {
        return[
            'id' =>  auth()->id(),
            'read' => auth()->user()->readNotifications,
            'unRead' => auth()->user()->unreadNotifications
        ];
    }

    public function markAsRead(Request $request){

        $item = auth()->user()->notifications
        ->where('id', $request->id)->markAsRead();

        return "markAsRead";
    }
}
