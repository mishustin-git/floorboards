<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    //
    public function index(){
        return view('record.index')->with('records',Record::all()->sortByDesc("id"));
    }
    public function create(){
        return view('record.create');
    }
    public function store(Request $request){
        $record_english = $request->input('english');
        $record_russian = $request->input('russian');
        $record_description = $request->input('description');
        $new_record = new Record();
        $new_record->english = $record_english;
        $new_record->russian = $record_russian;
        $new_record->description = $record_description;
        $new_record->save();
        // return view('record.index');
        return redirect()->route('record.index');
    }
    // Request $request
    // public function create(Request $request){
    //     // return view('record.create');
    //     return $request;
    // }
}
