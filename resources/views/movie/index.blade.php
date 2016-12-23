@extends('layout')

@section('js')
    @parent
    <script>
        console.log('coucou les films :)');
    </script>
@endsection


@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/movies.css') }}" />
@endsection

@section('title')
     @parent - Page lister les films
@endsection

@section('content')
    <section id="content">

    <div class="tray tray-center">
    <div class="row">
    <a href="{{ route('movies.create') }}" class="pull-right btn btn-sm btn-success">
        <i class="fa fa-plus"></i> Ajouter un film</a>
    </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <table class="table table-bordered table-striped">
        <thead>
        <tr class="primary">
            <th>#</th>
            <th>Titre</th>
            <th>Synopsis</th>
            <th>Photos</th>
            <th>Date de sortie</th>
            <th>En couverture</th>
            <th>Visibilite</th>
            <th>Note de presse</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                    <tr>
                        <td>

                            @if(!in_array($movie->id, session('likes', [])))

                                <a href="{{ route('movie.like', [
                                            'id' => $movie->id,
                                            'action' => 'like'
                                        ]) }}">
                                    <span class="fa fa-heart-o"></span>
                                </a>
                            @else
                            <a href="{{ route('movie.like', [
                                'id' => $movie->id,
                                'action' => 'dislike'
                            ]) }}">
                                <span class="fa fa-heart"></span>
                            </a>
                            @endif

                            {{ $movie['id'] }}</td>
                        <td><h4>
                                <a href="{{ route('movie.voir', ['id' => $movie['id']]) }}">
                                    {{ $movie['title'] }}</a></h4></td>
                        <td>{{  str_limit(strip_tags($movie['synopsis']), 200) }}</td>
                        <td>
                            <img class="col-md-6 img-responsive"
                                 src="{{  $movie['image'] }}" />
                        </td>
                        <td>{{
                        Carbon\Carbon::parse($movie['date_release'])->format('d/m/Y') }}</td>
                        <td>
                            @if($movie['cover'] == 1)
                                <i class="fa fa-check"></i>
                            @else
                                <i class="fa fa-times"></i>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('movie.visible', ['id' => $movie->id]) }}">
                            @if($movie->visible == 1)
                                <i class="fa fa-check"></i>
                            @else
                                <i class="fa fa-times"></i>
                            @endif
                            </a>
                        </td>

                        <td>
                            {!!  str_repeat("<i class='fa fa-star'></i>",
                            $movie['note_presse']) !!}
                        </td>

                        <td>
                            <a href="{{ route('movie.voir', ['id' => $movie['id']]) }}" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Voir</a>
                            <a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editer</a>
                            <a href="{{ route('movie.remove', ['id' => $movie['id']] ) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </section>

@endsection

