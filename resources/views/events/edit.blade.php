@extends('layouts.main')

@section('title', 'Editando: '. $event->title);

        @section('content')
         <div id="event-create-container" class="col-md-6 offset-md-3">
           <h1>Editando {{$event->title}}!</h1>
           <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <div class="form-group">
               <label for="image">Imagem do Evento:</label>
               <input type="file" id="image" name="image" class="form-control-file">
               <img src="/img/events/{{$event->image}}" alt="imagem do {{$event->title}}" class="img-preview">
             </div>
             <div class="form-group">
               <label for="title">Evento:</label>
               <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento"value="{{$event->title}}" >
             </div>
             <div class="form-group">
               <label for="date">Data do evento:</label>
               <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}"/>
             </div>
             <div class="form-group">
               <label for="title">Cidade:</label>
               <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade do evento" value="{{$event->city}}" >
             </div>
             <div class="form-group">
               <label for="title">O evento é privado?</label>
               <select name="private" id="private" class="form-control">
                 <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>SIM</option>
                 <option value="0">NÃO</option>
               </select>
             </div>
             <div class="form-group">
               <label for="title">Descrição:</label>
               <textarea name="description" id="description" class="form-control"placeholder="O que será debatido no curso?">{{$event->description}}</textarea>
             </div>
             <div class="form-group">
               <label for="title">Adicione itens de infraestrutura:</label>
               <div class="form-group">
                  <input type="checkbox" name="items[]" value="cadeiras">Cadeiras
               </div>
               <div class="form-group">
                  <input type="checkbox" name="items[]" value="palco">Palco
               </div>
               <div class="form-group">
                  <input type="checkbox" name="items[]" value="cerveja">Cerveja
                  
               </div>
               <div class="form-group">
                  <input type="checkbox" name="items[]" value="open-food">Open Food
                  
               </div>
               <div class="form-group">
                  <input type="checkbox" name="items[]" value="refrigerante">Refrigerante
                
               
              
             </div>
             <input type="submit" class="btn btn-primary" value="Confirmar">
           </form>
         </div>

        @endsection