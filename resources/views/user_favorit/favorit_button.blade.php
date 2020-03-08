@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favoriting($user->micropost_id))
        {!! Form::open(['route' => ['favorites.unfavorite', $user->micropost_id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorit', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $user->micropost_id]]) !!}
            {!! Form::submit('Favorit', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif