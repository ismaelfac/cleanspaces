@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($users as $user )
                            <li class="list-group-item">{{ $user->name}}</li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Roles de Usuario') }}</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($roles as $rol )
                            <li class="list-group-item">{{ $rol->name}}</li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Permisos del Rol') }}</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($permissions as $permission )
                            <li class="list-group-item">{{ $permission->name}}</li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
