<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function form(Request $request)
    {
        
        return view('form');

    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
        
        return view('confirm', compact('contact'));
        
    }

    public function create(Request $request)
    {
        $action = $request->get('action', 'back');
        
        $content = $request->except('action');

        if($action === '送信') {
            $content =$request->all();
            Contact::create($content);
            return redirect('complete');
        } elseif($action === '修正する') {
            return redirect('contact')->withInput($content);
        }
    }

    public function complete()
    {
        return view('complete');
    }

    

    public function index()
    {
        $contents=Contact::all();

        $contents=Contact::Paginate(10);

        return view('index',['contents'=>$contents]);
    }

    public function search(Request $request)
    {
        $name = $request->input('fullname');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $from = $request->input('from');

        $query=Contact::query();

        if(!empty($name)) {
            $query->where('fullname','LIKE',"%{$name}%");
        }

        if(!empty($gender)) {
            $query->where('gender','=',$gender);
        }

        if(!empty($from)) {
            $query->whereDate('created_at','=',"$from");
        }

        if(!empty($email)) {
            $query->where('email','LIKE',"%{$email}%");
        }

        $posts=$query->get();
        
        return view('search',compact('posts','email','gender'));
        
    }

    public function delete(Request $request)
    {
        $item=Contact::find($request->id);
        $item->delete();
        return redirect('/');
    }

}