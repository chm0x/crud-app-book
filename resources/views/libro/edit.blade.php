@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Editar</div>
            <div class="card-body">
                <form 
                    method="POST" 
                    action="{{ route('libro.update', $libro) }}" 
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method('PATCH')
                    @include('libro.form', $libro)
                </form>
            </div>
            <div class="card-footer text-muted"></div>
        </div>
    </div>
@endsection