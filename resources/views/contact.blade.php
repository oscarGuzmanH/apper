@extends('layout')

@section('titulo', 'Contacto')

@section('content1')
    <div class="container bg-light" >
    <form method="POST" action="#">
        @csrf
        <h1 class="w-100 text-center pt-2">{{ __('Contact') }}</h1>
        <div class="form-group">
          <label for="input1" class="mb-0 mt-2">Nombre</label>
          <input type="text" class="form-control" name="name" id="input1" placeholder="nombre" aria-describedby="helpId" value="{{old('name')}}">
          {!! $errors->first('name', '<small id="helpId" class="text-danger form-text px-2">:message</small>') !!}
          
          <label for="input2" class="mb-0 mt-2">Correo</label>
          <input type="email" class="form-control" name="email" id="input2" placeholder="correo electrónico" aria-describedby="helpId2" value="{{old('email')}}">
          {!! $errors->first('email', '<small id="helpId2" class="text-danger form-text px-2">:message</small>') !!}
          
          <label for="input3" class="mb-0 mt-2">Asunto</label>
          <input type="text" class="form-control mb-1" name="subject" id="input3" placeholder="asunto..." aria-describedby="helpId3" value="{{old('subject')}}">
          {!! $errors->first('subject', '<small id="helpId3" class="text-danger form-text px-2">:message</small>') !!}

          <textarea type="text" class="form-control pb-5" name="content" id="input4" aria-describedby="helpId4" placeholder="Mensaje...">{{old('content')}}</textarea>
          {!! $errors->first('content', '<small id="helpId4" class="text-danger form-text px-2">:message</small>') !!}

          <button type="submit" class="btn btn-outline-primary mt-3">@lang('Send')</button>
        </div>
    </form>
    </div>
@endsection