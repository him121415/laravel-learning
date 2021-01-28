<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;

class WorkController extends Controller
{
    public function index(){
        return view('works.index',[
            'works' => work::latest()->get()
        ]);
    }

    public function create(){
        return view('works.create');
    }

    public function store(){
        Work::create(request()->validate([
            'title' => 'required',
            'url' => 'required',
            'content' => 'required'
        ]));

        return redirect('/works');
    }

    public function edit(Work $work){
        return view('/works.edit', compact('work'));
    }

    public function update(Work $work){

        $work->update(request()->validate([
            'title' => 'required',
            'url' => 'required',
            'content' => 'required'
        ]));

        return redirect('/works');
    }
}
