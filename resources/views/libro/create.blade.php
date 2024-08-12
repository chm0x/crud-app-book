<form method="POST" action="{{ route('libro.store') }}" enctype="multipart/form-data">
    @csrf
    @include('libro.form')
</form>