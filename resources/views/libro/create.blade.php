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
            <div class="card-header">Crear libro</div>
            <div class="card-body">
                <form 
                    method="POST" 
                    action="{{ route('libro.store') }}" 
                    enctype="multipart/form-data"
                >
                    @csrf
                    @include('libro.form')
                </form>
                {{-- <a href="{{ url()->previous() }}">Regresar</a> --}}
            </div>
            <div class="card-footer text-muted"></div>
        </div>
    </div>
@endsection