<?php

namespace App\Http\Controllers;

use App\Mail\SendMailList;
use Illuminate\Http\Request;
use App\Models\EmailList;
use Illuminate\Support\Facades\Mail;

class EmailListController extends Controller
{
    public function create()
    {
        return view('site.addemail');

    }

    public function store(Request $request)
    {
        $emailList = new EmailList;

        $emailList->first_name = $request->first_name;
        $emailList->last_name = $request->last_name;
        $emailList->email = $request->email;

        $emailList->save();

        return redirect('/')->with('msg', 'Email Cadastrado com sucesso');

    }

    public function sendemail()
    {
        return view('site.sendemail');
    }

    public function enviar(Request $request)
    {

       $users = EmailList::all();


       $subject = $request->subject;
       $elvismail = $request->elvismail;

       foreach($users as $user){
        //return new SendMailList($user, $subject, $elvismail);
        //Mail::send(new SendMailList($user, $subject, $elvismail));
        \App\Jobs\SendMailList::dispatch($user, $subject, $elvismail)->delay(now()->addSeconds('15'));
       }

       return redirect('/')->with('msg', 'Emails enviados com sucesso');

    }
}
