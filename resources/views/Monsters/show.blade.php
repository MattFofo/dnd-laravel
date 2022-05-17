@extends('templates.base')

@section('pageTitle', 'Details - {{ $monster->name }}')

@section('content')
    <main>
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Alignment</th>
                    <th scope="col">Size</th>
                    <th scope="col">Hit dice</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Armorclass</th>
                    <th scope="col">Hit points</th>
                    <th scope="col">Strength</th>
                    <th scope="col">Dexterity</th>
                    <th scope="col">Constitution</th>
                    <th scope="col">Intelligence</th>
                    <th scope="col">Wisdom</th>
                    <th scope="col">Charisma</th>
                    <th scope="col">Xp</th>
                    <th scope="col">Challenge_rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="col">{{ $monster->index }}</td>
                    <td scope="col">{{ $monster->name }}</td>
                    <td scope="col">{{ $monster->type }}</td>
                    <td scope="col">{{ $monster->alignment }}</td>
                    <td scope="col">{{ $monster->size }}</td>
                    <td scope="col">{{ $monster->hit_dice }}</td>
                    <td scope="col">{{ $monster->languages }}</td>
                    <td scope="col">{{ $monster->armor_class }}</td>
                    <td scope="col">{{ $monster->hit_points }}</td>
                    <td scope="col">{{ $monster->strength }}</td>
                    <td scope="col">{{ $monster->dexterity }}</td>
                    <td scope="col">{{ $monster->constitution }}</td>
                    <td scope="col">{{ $monster->intelligence }}</td>
                    <td scope="col">{{ $monster->wisdom }}</td>
                    <td scope="col">{{ $monster->charisma }}</td>
                    <td scope="col">{{ $monster->xp }}</td>
                    <td scope="col">{{ $monster->challenge_rating }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </main>
@endsection


