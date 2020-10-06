<?php

namespace App\Http\Controllers;

use App\Mail\BirthdayMail;
use App\Models\Employee;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    public function sendMail() {
        $employees =  Employee::whereMonth('birth_date', '=', date('m'))->whereDay('birth_date', '=', date('d'))->get();
        $message = Message::find(1);

        foreach ($employees as $employee) {
            Mail::to($employee->email)->send(new BirthdayMail($employee));
        }

        return back();
    }
}
