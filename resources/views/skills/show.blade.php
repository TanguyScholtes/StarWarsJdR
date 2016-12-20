@extends( 'layout' )

@section( 'title' )
    {{ $skill -> name }}
@stop

@section( 'content' )

    <h1>{{ $skill -> name }}  ( <a class="content-link" href="/abilities#<?php echo( $skill[ "abbrAbility" ] ); ?>"><?php echo( $skill[ "abbrAbility" ] ); ?></a> )</h1>

    <p><?php echo( $skill[ "description" ] ); ?></p>

@stop
