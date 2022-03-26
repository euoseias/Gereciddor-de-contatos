<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

    public function index() {

        $search = request('search');

        if($search){

            $events = Event::where([
             ['title', 'like', '%'.$search.'%']
         ])->get();

        } else {
            $events = Event::all();
        }



        return view('welcome',['events' => $events, 'search' => $search]);

    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->nome = $request->nome;
        $event->contato = $request->contato;
        $event->email = $request->email;





        $event->save();

        return redirect('/')->with('msg', 'Contato adicionado com sucesso!');

    }


    public function show($id) {

        $event = Event::findOrFail($id);


        return view('events.show', ['event' => $event]);
    }


    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Contato excluído com sucesso!');

    }


    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    }

    public function update(Request $request) {

        $data = $request->all();

        Event::findOrFail($request->id)->update($data);

        return redirect('/')->with('msg', 'Contato editado com sucesso!');

    }

}



