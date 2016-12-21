@extends( 'layout' )

@section( 'title' )
    Compétences
@stop

@section( 'content' )

    <h1>Compétences</h1>

    <div class="content">
        <p>Une valeur est associée à chacune des compétences de votre personnage. Il s'agit du degré de maîtrise qu'il a atteint dans cette compétence, et c'est cela qui détermine son efficacité.</p>
        <p>Chaque fois que l'on utilise une compétence pour accomplir une tâche, le degré de maîtrise du personnage est comparé au degré de difficulté (ou DD) de la tâche en question.<br>
        Par exemple, pour ouvrir une serrure assortie d'un DD de 15, on jette 1d20 + degré de maîtrise en Sécurité + modificateur de Sagesse du personnage. Si le total est supérieur ou égal à 15, le personnage réussit à ouvrir la serrure.</p>

        <h2>Coût</h2>
        <p>1 point par degré de maîtrise d'une compétence de classe, 2 points pour les autres compétences.</p>

        <h2>Limite</h2>
        <p>Un personnage peut avoir dans chacune de ses compétences de classe un maximum de 3 + <a class="content-link" href="/rules#Exp">son niveau</a> points. Cette limite est de ( 3 + <a class="content-link" href="/rules#Exp">son niveau</a> ) / 2 points (arrondi à l'unité supérieure) pour toutes les compétences qui ne sont pas des compétences de classe.</p>

        <h2>Départ</h2>
        <p>Toutes les compétences commencent à 0. Le nombre de points de compétences dont dispose le personnage dépend de sa classe ainsi que de ses caractéristiques.</p>
    </div>

    <nav class="sub-navigation">
        <h2 class="sub-navigation--title hidden">Navigation des compétences</h2>
        @foreach( $skills as $skill )
            <a class="sub-navigation--link" href="#<?php echo( $skill[ "slug" ] ); ?>"><?php echo( $skill[ "name" ] ); ?></a>
        @endforeach
    </nav>

    @if( $skills )
        <ul class="content-list">
            @foreach( $skills as $skill )
            <li id="<?php echo( $skill[ "slug" ] ); ?>" class="content-list-item">
                <h2 class="content-titles"><?php echo( $skill[ "name" ] ); ?> ( <a class="content-link" href="/abilities#<?php echo( $skill[ "abbrAbility" ] ); ?>"><?php echo( $skill[ "abbrAbility" ] ); ?></a> )</h2>
                <p><?php echo( $skill[ "description" ] ); ?></p>
            </li>
            @endforeach
        </ul>
    @else
        <p>Il n'y a aucune compétence pour l'instant.</p>
    @endif

@stop
