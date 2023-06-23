<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;    //追記
use App\Notifications\SlackNotification;    //追記
use Illuminate\Notifications\Messages\SlackMessage;    //追記
use App\Http\Controllers\SlackController;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;


class SlackController extends Controller
{
    use Notifiable;    //追記

    public function index()
    {
        return view('slack');
    }

    public function send(Request $request)
    {
        $name = $request->input('name');
        $message = $request->input('message');

        $slack = $this->notify(new SlackNotification($message));

        session()->flash('success', '送信しました！');
        return back();
    }

    public function routeNotificationForSlack($notification)
    {
        return config('app.slack_url');
    }
}

