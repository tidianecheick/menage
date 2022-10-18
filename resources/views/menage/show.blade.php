@extends('layouts.app')


@section('content')

    <h1>Gestion des femme de Menage</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom Complet:</th>
            <td>{{ $menage->nomComplet }}</td>
        </tr>

        <tr>

            <th>Telephone:</th>
            <td>{{ $menage->telephone }}</td>

        </tr>

        <tr>

            <th>Email:</th>
            <td>{{ $menage->email }}</td>

        </tr>

        <tr>

            <th>Quartier:</th>
            <td>{{ $menage->quartier }}</td>

        </tr>

    </table>

@endsection
