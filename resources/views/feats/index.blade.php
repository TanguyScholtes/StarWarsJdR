@extends( 'layout' )

@section( 'title' )
    Caractéristiques
@stop

@section( 'content' )

    <h1>Dons</h2>

    <div class="content">
        <p>Certains dons permettent d'utiliser des objets spéciaux, par exemple les implants ou les armures lourdes. D'autres modifient les jets de sauvegarde ou les jets de compétences, tandis que d'autres encore (tels qu'Attaque en puissance) sont utiles au combat. Reportez-vous à la description de chaque don afin de voir comment il fonctionne.</p>
        <p>Les personnages avec la classe Utilisateur de la Force ont également accès aux Dons de la Force en plus de la liste des Dons génériques.</p>

        <p>Les dons possèdent différents types.<br>
        Les Passifs sont des dons actifs en permanence ou qui s'activent automatiquement dans des conditions données.<br>
        Les dons d'Actions sont - comme leur nom l'indique - des actions qui viennent remplacer une des attaques du personnage sur le tour où il décide de s'en servir. Un personnage ne peut utiliser qu'un seul don d'Action par tour, même si il possède plusieures attaques par tour. Le reste de ses attaques du tour devront être des attaques normales.</p>

        <p class="choose-menu">
            <a class="choice feats-generic" href="#FeatsGeneric">Dons génériques</a> <a class="choice feats-force"  href="#FeatsForce">Dons de la Force</a>
        </p>
    </div>

    <div id="FeatsGeneric" class="result feats-generic-choice content">
        <h2>Dons génériques</h2>

        @if( $featsGeneric )
            <nav class="sub-navigation">
                <h4 class="sub-navigation--title hidden">Navigation des dons génériques</h4>
                @foreach( $featsGeneric as $feat )
                    @if( $feat[ "menuDisplay" ] === 1 )
                        <a class="sub-navigation--link" href="#<?php echo( $feat[ "slug" ] ); ?>"><?php echo( $feat[ "name" ] ); ?></a>
                    @endif
                @endforeach
            </nav>
        @endif
        
        @if( $featsGeneric )
            <ul class="content-list">
                @foreach( $featsGeneric as $feat )
                    <li id="<?php echo( $feat[ "slug" ] ); ?>" class="content-list-item">
                        <h3 class="content-titles"><?php echo( $feat[ "name" ] ); ?></h3>
                        <p>
                            <span class="content-subtitle">Conditions :</span> <?php echo( $feat[ "conditions" ] ); ?><br>
                            <span class="content-subtitle">Type :</span> <?php echo( $feat[ "type" ] ); ?><br>
                            <span class="content-subtitle">Effets :</span> <?php echo( $feat[ "effects" ] ); ?>
                        </p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Il n'y a pas de Don générique à afficher pour l'instant.</p>
        @endif
    </div><!-- #FeatsGeneric -->

    <div id="FeatsForce" class="result feats-force-choice">
        <h2>Dons de la Force</h2>

        @if( $featsForce )
            <nav class="sub-navigation">
                <h4 class="sub-navigation--title hidden">Navigation des dons de la Force</h4>
                @foreach( $featsForce as $feat )
                    @if( $feat[ "menuDisplay" ] === 1 )
                        <a class="sub-navigation--link" href="#<?php echo( $feat[ "slug" ] ); ?>"><?php echo( $feat[ "name" ] ); ?></a>
                    @endif
                @endforeach
            </nav>
        @endif

        @if( $featsForce )
            <ul class="content-list">
                @foreach( $featsForce as $feat )
                    <li id="<?php echo( $feat[ "slug" ] ); ?>" class="content-list-item">
                        <h3 class="content-titles"><?php echo( $feat[ "name" ] ); ?></h3>
                        <p>
                            <span class="content-subtitle">Conditions :</span> <?php echo( $feat[ "conditions" ] ); ?><br>
                            <span class="content-subtitle">Type :</span> <?php echo( $feat[ "type" ] ); ?><br>
                            <span class="content-subtitle">Effets :</span> <?php echo( $feat[ "effects" ] ); ?>
                        </p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Il n'y a pas de Don générique à afficher pour l'instant.</p>
        @endif
    </div>

@stop
