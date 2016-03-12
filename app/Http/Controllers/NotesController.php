<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {

        //Validation!!!
        $this->validate($request, [
          'body' => 'required|min:10'
        ]);


        // alt 1
        // $note = new Note;
        // $note->body = $request->body;
        // $card->notes()->save($note);

        // alt 2
        // $note = new Note(['body' => $request->body]);
        // $card->notes()->save($note);

        //alt 3
        // $card->notes()->create([
        //     'body' => $request->body
        // ]);

        //alt 4
        //$card->notes()->create($request->all());

        //alt5
        $note = new Note($request->all());
        //$note->user_id = 1;

        $card->addNote($note, 1);

        return back();
    }

    public function edit(Note $note)
    {
      return view('notes/edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
      //dd('hit');
      $note->update($request->all());

      return back();
    }
}
