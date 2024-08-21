@extends('layouts.app')

@section('content')
    <div class="container">
        @if( count($errors) > 0 )
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            
                <strong>ERRORES!</strong> 
            
                @foreach( $errors->all() as $error )
                    <p> {{ $error }} </p>
                @endforeach
            </div>
        @endif
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