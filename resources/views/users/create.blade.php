@extends('layouts.admin2')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-12 pt-2">
            <h5 class="m-0 font-weight-bold text-primary">Nuevo Usuario</h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="{{ url('usuarios') }}">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <label for="">Nombre</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="">Contraseña</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="">Rol</label>
              <select name="role" class="form-control" id="grid-state">
                @foreach($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-3 offset-sm-3">
              <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </div>
            <div class="col-sm-3 ">
              <a href="{{ url('usuarios') }}" class="btn btn-secondary btn-block">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@stop