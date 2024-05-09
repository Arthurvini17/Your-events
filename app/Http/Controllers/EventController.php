<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('events.event-create');
    }

    public function submit_event(Request $request){
        $request->validate([
            'name_event' => ['required'],
            'date_event' => ['required'],
            'endereco' => ['required'],
            'itens' => ['required'],
            'descricao' => ['required'],
        ], [
            'name_event.required' => 'O nome do evento é obrigatório.',
            'date_event.required' => 'A data do evento é obrigatória.',
            'endereco.required' => 'O endereço do evento é obrigatório.',
            'itens.required' => 'Selecione pelo menos um item para o evento.',
            'descricao.required' => 'A descrição do evento é obrigatória.',
        ]);
    
        
        $itens_json = json_encode($request->itens);
    
        
        Event::create([
            'name_event' => $request->name_event,
            'date_event' => $request->date_event,
            'endereco' => $request->endereco,
            'itens' => $itens_json, 
            'descricao' => $request->descricao
        ]);
    
        return redirect()->route('index')->with('message', 'Evento criado com sucesso!');
    }
    
}
