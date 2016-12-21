@extends( 'layout' )

@section( 'title' )
    {{ $feat -> name }}
@stop

@section( 'content' )

    <h1>{{ $feat -> name }}</h1>

    <p>
        <span class="content-subtitle">Conditions :</span> <?php echo( $feat[ "conditions" ] ); ?><br>
        <span class="content-subtitle">Type :</span> <?php echo( $feat[ "type" ] ); ?><br>
        <span class="content-subtitle">Effets :</span> <?php echo( $feat[ "effects" ] ); ?>
    </p>

@stop
