@extends( 'layout' )

@section( 'title' )
    {{ $race -> name }}
@stop

@section( 'content' )

    <h1>{{ $race -> name }}</h1>

    <img class="content-image race-image" src="{{ URL::asset( '/img/races/' . $race[ "slug" ] . '.jpg' ) }}" alt="<?php echo( $race[ "name" ] ); ?>" title="<?php echo( $race[ "name" ] ); ?>">
    <div class="race-text">
        <p><span class="content-subtitle">Disponibilité :</span> <?php echo( $race[ "disponibility" ] ); ?></p>
        <p><span class="content-subtitle">Caractéristiques :</span> <?php echo( $race[ "abilities" ] ); ?></p>
        <p><span class="content-subtitle">Description :</span> <?php echo( $race[ "description" ] ); ?></p>
        <?php if( $race[ "holonet" ] != "" ): ?>
            <p>
                <a class="content-link" href="<?php echo( $race[ "holonet" ] ); ?>" target="_blank">
                    Les <?php echo( $race[ "name" ] ); ?><?php if( $race[ "name" ] != "Kaleesh" && $race[ "name" ] != "Chiss" && $race[ "name" ] != "Ayrou" && $race[ "name" ] != "Fosh" ): ?>s<?php endif; ?> sur Star Wars Holonet
                </a>
            </p>
        <?php endif; ?>
        <?php if( $race[ "wookieepedia" ] != "" ): ?>
            <p>
                <a class="content-link" href="<?php echo( $race[ "wookieepedia" ] ); ?>" target="_blank">
                    Les <?php echo( $race[ "name" ] ); ?><?php if( $race[ "name" ] != "Kaleesh" && $race[ "name" ] != "Chiss" && $race[ "name" ] != "Ayrou" && $race[ "name" ] != "Fosh" ): ?>s<?php endif; ?> sur Wookieepedia
                </a>
            </p>
        <?php endif; ?>
    </div>

@stop
