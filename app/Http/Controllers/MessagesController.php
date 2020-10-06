<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function index() {
        $title = 'Dashboard - Message';
        $message = Message::find(1);

        return view('pages.message.index', [
            'title' => $title,
            'message' => $message
        ]);
    }


    public function update(Request $request, $id) {
        $request->validate([
            'birthday_message' => 'required'
        ]);

        Message::find($id)->update([
            'birthday_message' => $request->birthday_message
        ]);
        toast('Birthday Message Updated!', 'success');

        return redirect()->route('messages.index');
    }

}
