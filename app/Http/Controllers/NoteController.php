<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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
                return back()->with('success',"Note added successfully..!");
            } else {
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
                return back()->with('success',"Note successfully as draft..!");
            } else {
                return back()->with('error',"Something went wrong..!")->withInput();
            }
        }

    }

    public function deletenote($id)
    {

        // $deleteNote = DB::table('note')->where('id', '=', $id)->delete();
        //update status to 0
        $deleteNote = DB::table('note')
            ->where('id', '=', $id)
            ->update(['note_status' => 0]);

        if ($deleteNote) {
            return back()->with('success', "Note deleted successfully..!");
        } else {
            return back()->with('error', "Something went wrong..!")->withInput();
        }
    }

        public function restorepublish($id)
    {
        //update status to 1
        $restoredNote = DB::table('note')
            ->where('id', '=', $id)
            ->update(['note_status' => 1]);

        if ($restoredNote) {
            return back()->with('success', "Note restored successfully..!");
        } else {
            return back()->with('error', "Something went wrong..!")->withInput();
        }
    }

    public function restoredraft($id){
   //update status to 1
   $restoredNote = DB::table('note')
   ->where('id', '=', $id)
   ->update(['note_status' => 2]);

        if ($restoredNote) {
        return back()->with('success', "Note restored successfully..!");
        } else {
        return back()->with('error', "Something went wrong..!")->withInput();
        }
    }

    public function addfavorite($id) {
        // dd($id);
        //update status to 1
        $restoredNote = DB::table('note')
        ->where('id', '=', $id)
        ->update(['is_favorite' => 1]);

             if ($restoredNote) {
             return back()->with('success', "Note added to favorites..!");
             } else {
             return back()->with('error', "Something went wrong..!")->withInput();
             }
    }

    public function addUnfavorite($id){
        //update status to 1
        $restoredNote = DB::table('note')
        ->where('id', '=', $id)
        ->update(['is_favorite' => 0]);

             if ($restoredNote) {
             return back()->with('success', "Note removed from favorites..!");
             } else {
             return back()->with('error', "Something went wrong..!")->withInput();
             }
    }


    public function updatenote(Request $request ,$id){
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

        $updateNote = DB::table('note')
        ->where('id', '=', $id)
        ->update([
            'note_title' => $request->note_title,
            'note' => $request->note,
            'note_image' => "https://res.cloudinary.com/dx1pvvqg7/image/upload/v1662534270/cld-sample.jpg",
            'category_id' => $request->category,
        ]);

             if ($updateNote) {

                // if($request->previous_route == 'drafts'){
                //     return redirect("/drafts")->with('success', "Note updated successfully..!");
                // }else if($request->previous_route == 'favourites') {
                //     return redirect("/favourites")->with('success', "Note updated successfully..!");
                // }else {
                //     return redirect("/previous_route")->with('success', "Note updated successfully..!");
                // }

                return redirect($request->previous_route)->with('success', "Note updated successfully..!");


             } else {
             return back()->with('error', "Something went wrong..!")->withInput();
             }

    }

    public function getSpecificNote($id){
        $noteDetails = DB::table('note')
        ->where('id', '=', $id)
        ->first();

        return response()->json($noteDetails);
    }
}