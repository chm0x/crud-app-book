@extends('layouts.app')

@section('content')
    <div class="container">
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