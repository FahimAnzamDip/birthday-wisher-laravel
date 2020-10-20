<?php

namespace App\Console\Commands;

use App\Mail\BirthdayMail;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends Birthday Wish';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $employees =  Employee::whereMonth('birth_date', date('m'))
                                ->whereDay('birth_date', date('d'))
                                ->get();

        foreach ($employees as $employee) {
            Mail::to($employee->email)->send(new BirthdayMail($employee));
        }

        return 0;
    }
}
