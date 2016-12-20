@extends( 'layout' )

@section( 'title' )
    Races
@stop

@section( 'content' )

    <h1>Races</h1>

    <div class="content">
        <p>Cette liste des races jouables est non-exhaustive. Si vous désirez jouer une race qui ne figure pas sur cette liste, demandez à votre Maître de Jeu.</p>
        <p>Attention toutefois, toutes les races ne sont pas disponibles pour toutes les factions. Et si il est possible pour une race de la République Galactique d'engendrer un adepte du Coté Obscur, il est presque impossible qu'une race de l'Empire Sith voit naître des gens d'alignement Lumineux.</p>
        <p>Il est à noter que chaque race dispose de bonus et malus qui leur sont propres. Ces bonus et malus sont mentionnés à titre indicatif mais le Maître de Jeu est laissé libre de les ignorer et d'instaurer les siens, voir de les supprimer si il préfère que le choix de la race soit purement esthétique. Dans tous les cas, il doit vous prévenir de ces modifications et vous les fournir le cas échéant avant que vous choisissiez votre race.</p>
    </div>

    <nav class="sub-navigation">
        <h2 class="sub-navigation--title hidden">Navigation des races</h2>
        <?php foreach ($races as $race): ?>
            <a class="sub-navigation--link" href="#<?php echo( $race[ "name" ] ); ?>"><?php echo( $race[ "name" ] ); ?></a>
        <?php endforeach; ?>
    </nav>

    @if( $races )
        <ul class="content-list">
            @foreach( $races as $race )
                <li id="<?php echo( $race[ "slug" ] ); ?>" class="content-list-item">
                    <h3 class="content-titles"><?php echo( $race[ "name" ] ); ?></h3>
                    <img class="content-image race-image" src="{{ URL::asset( '<?php echo( $race[ "slug" ] ); ?>.jpg' ) }}" alt="<?php echo( $race[ "name" ] ); ?>" title="<?php echo( $race[ "name" ] ); ?>">
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
                </li>
            @endforeach
        </ul>
    @else
        <p>Il n'y a aucune race pour l'instant.</p>
    @endif

@stop
