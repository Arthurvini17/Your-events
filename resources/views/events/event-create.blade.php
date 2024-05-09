@extends('layouts.layout')
@section('content-event')

    <div class="flex items-center justify-center h-screen">
       
        <form action="{{route('submit.event')}}" method="POST" class="bg-slate-300 p-10 rounded-lg shadow-md grid   grid-cols-2 gap-4">
            @csrf
            <div class="col-span-2 flex items-center justify-center mb-4">
                <h1 class="text-xl">Crie aqui seu evento</h1>
            </div>
            <div class="mb-4">
                <label for="name_event" class="block mb-1">Nome do evento</label>
                <input type="text" name="name_event" placeholder="Nome do evento" class="w-full border rounded-md py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="date_event" class="block mb-1">Data do evento</label>
                <input type="text" name="date_event" placeholder="Data do evento" class="w-full border rounded-md py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="date_event" class="block mb-1">Data do evento</label>
                <input type="text" name="date_event" placeholder="Data do evento" class="w-full border rounded-md py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="date_event" class="block mb-1">Data do evento</label>
                <input type="text" name="date_event" placeholder="Data do evento" class="w-full border rounded-md py-2 px-3">
            </div>

            <div class="mb-4 col-span-2">
                <label for="date_event" class="block mb-1">Data do evento</label>
                <input type="text" name="date_event" placeholder="Data do evento" class="w-full border rounded-md py-2 px-3 ">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2">Enviar</button>
        </form>
    </div>
@endsection
