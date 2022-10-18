@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des femmes de Menage</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('menage/create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nom Complet</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Quartier</th>
            <th>Actions</th>

        </tr>

        @foreach ($menages as $index => $menage)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $menage->nomComplet }}</td>
                <td>{{ $menage->email }}</td>
                <td>{{ $menage->telephone }}</td>
                <td>{{ $menage->quartier }}</td>
                <td>

                    <form action="{{ url('menage/'. $menage->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('menage/'. $menage->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('menage/'. $menage->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection
