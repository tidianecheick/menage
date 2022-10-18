@extends('layouts.app')


@section('content')


    <h1>Modifier une Menagère</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('menage/'. $menage->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nomComplet">Nom:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrer Nom" name="nomComplet" value="{{ $menage->nomComplet }}">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="Entrer Telephone" name="telephone" value="{{ $menage->telephone }}">

        </div>

        <div class="form-group mb-3">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="{{ $menage->email }}">

        </div>

        <div class="form-group mb-3">

            <label for="quartier">Quartier:</label>
            <input type="text" class="form-control" id="quartier" placeholder="Quartier" name="quartier" value="{{ $menage->quartier }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection