<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailList;

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
}
