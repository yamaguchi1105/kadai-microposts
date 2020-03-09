@if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorit', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
       {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'method' => 'post']) !!}
            {!! Form::submit('Favorit', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
@endif