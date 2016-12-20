@extends( 'layout' )

@section( 'title' )
    {{ $ability -> name }}
@stop

@section( 'content' )

    <h1>{{ $ability -> name }} (<?php echo( $ability[ "abbr" ] ); ?>)</h1>

    <p><?php echo( $ability[ "desc" ] ); ?></p>

@stop
