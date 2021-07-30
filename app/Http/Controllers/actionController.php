<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class ActionController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        return 143;
    }
}
