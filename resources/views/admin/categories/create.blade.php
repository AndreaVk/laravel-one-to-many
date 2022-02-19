@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nuova Categoria</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="title"
                                placeholder="Inserisci il nome della categoria" name='name'>
                            @error('name')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection