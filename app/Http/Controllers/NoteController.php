<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function addnote(Request $request)
    {
        // dd($request->request);
        $action = $request->input('action');
        $customErrorMessages = [
            'note_title.required' => 'Please add a Note Title.',
            'category.required' => 'Please select a category.',
            'note_image.required' => 'Please add an image.',
            'note.required' => 'Please add a Note Text.',
        ];
        // dd($request->request);
        $request->validate([
            'note_title' => 'required',
            'category' => 'required',
            'note_image' => 'required',
            'note' => 'required',
        ], $customErrorMessages);

        if($action == 'publish'){
            $note_status = 1; // 1 for published
            $newNote = DB::table('note')->insert([
                'note_title' => $request->note_title,
                'note' => $request->note,
                'note_image' => "https://res.cloudinary.com/dx1pvvqg7/image/upload/v1662534270/cld-sample.jpg",
                'note_status' => $note_status,
                'category_id' => $request->category,
            ]);

            if ($newNote) {
                //send response after 5 seconds
                sleep(1);
                return back()->with('success',"Note added successfully..!");
            } else {
                sleep(1);
                return back()->with('error',"Something went wrong..!")->withInput();
            }

        }else if ($action == 'draft'){
            $note_status = 2; // 2 for draft
            $newNote = DB::table('note')->insert([
                'note_title' => $request->note_title,
                'note' => $request->note,
                'note_image' => "https://res.cloudinary.com/dx1pvvqg7/image/upload/v1662534270/cld-sample.jpg",
                'note_status' => $note_status,
                'category_id' => $request->category,
            ]);

            if ($newNote) {
                sleep(1);
                return back()->with('success',"Note successfully as draft..!");
            } else {
                sleep(1);
                return back()->with('error',"Something went wrong..!")->withInput();
            }
        }



    }
}