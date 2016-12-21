@extends( 'layout' )

@section( 'title' )
    {{ $job -> name }}
@stop

@section( 'content' )

    <div id="{{ $job -> slug }}" class="content-list-item content">
        <h1>{{ $job -> name }}</h1>
        <img class="content-image" src="{{ URL::asset( '/img/classes/' . $job[ "slug" ] . '.jpg' ) }}" alt="{{ $job -> name }}" title="{{ $job -> name }}">
        <p>{{ $job -> desc }}</p>
        <p><span class="content-subtitle">PV de base :</span> {{ $job -> basePV }} + modificateur de <a class="content-link" href="/abilities#CONST">Constitution</a> * <a class="content-link" href="/rules#Exp">Niveau</a>.</p>
        <!-- compétences de classe et dons bonus -->
        <p><span class="content-subtitle">Fréquence des dons :</span> {{ $job -> featsFrequency }}</p>
        <p><span class="content-subtitle">Points de compétences au niveau 1 :</span> ({{ $job -> skillsModifier }} + Mod. <a class="content-link" href="/abilities#INTEL">Intel</a>) * 4 avec un minimum de 4.</p>
        <p><span class="content-subtitle">Points de compétences par niveau :</span> {{ $job -> skillsModifier }} + Mod. <a class="content-link" href="/abilities#INTEL">Intel</a> / 2, arrondi au supérieur.</p>
        <table class="content-table">
            <thead>
                <tr> <th>Niveau</th> <th>BBA</th> <th>Vigueur</th> <th>Réflexes</th> <th>Volonté</th> </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td><!-- lvl -->
                    <td>{{ $job -> baseBBA }}</td><!-- BBA -->
                    <td>{{ $job -> baseToughness }}</td><!-- vigueur -->
                    <td>{{ $job -> baseReflexes }}</td><!-- réflexes -->
                    <td>{{ $job -> baseWill }}</td><!-- volonté -->
                </tr>
                <?php $currentBBA = $job['baseBBA'];
                    $currentToughness = $job['baseToughness'];
                    $currentReflexes = $job['baseReflexes'];
                    $currentWill = $job['baseWill'];
                ?>
                @for( $i = 2; $i <= 20; $i++ )
                    <tr>
                        <td>{{ $i }}</td><!-- lvl -->
                        <td>
                            <?php if( $job['baseBBA'] == 1 ) {
                                    $currentBBA += 1;
                                }
                                if( $job['baseBBA'] == 0 && $job['slug'] != "forceSorcerer" ) {
                                    if( $i == 5 || $i == 9 || $i == 13 || $i == 17 ) {
                                        $currentBBA += 0;
                                    } else {
                                        $currentBBA += 1;
                                    }
                                }
                                if( $job['slug'] == "forceSorcerer" ) {
                                    if( $i % 2 != 0 ) {
                                        $currentBBA += 0;
                                    } else {
                                        $currentBBA += 1;
                                    }
                                }
                                echo( $currentBBA );
                            ?>
                        </td><!-- BBA -->
                        <td>
                            <?php if( $job['baseToughness'] == 2 && $i % 2 == 0) {
                                    $currentToughness += 1;
                                }
                                if( $job['baseToughness'] == 1 ) {
                                    if( $i == 2 || $i == 5 || $i == 7 || $i == 10 || $i == 12 || $i == 15 || $i == 17 || $i == 20 ){
                                        $currentToughness += 1;
                                    }
                                }
                                if( $job['baseToughness'] == 0 && $i % 3 == 0) {
                                    $currentToughness += 1;
                                }
                                echo( $currentToughness );
                            ?>
                        </td><!-- vigueur -->
                        <td>
                            <?php if( $job['baseReflexes'] == 2 && $i % 2 == 0) {
                                    $currentReflexes += 1;
                                }
                                if( $job['baseReflexes'] == 1 ) {
                                    if( $i == 2 || $i == 5 || $i == 7 || $i == 10 || $i == 12 || $i == 15 || $i == 17 || $i == 20 ){
                                        $currentReflexes += 1;
                                    }
                                }
                                if( $job['baseReflexes'] == 0 && $i % 3 == 0) {
                                    $currentReflexes += 1;
                                }
                                echo( $currentReflexes );
                            ?>
                        </td><!-- réflexes -->
                        <td>
                            <?php if( $job['baseWill'] == 2 && $i % 2 == 0) {
                                    $currentWill += 1;
                                }
                                if( $job['baseWill'] == 1 ) {
                                    if( $i == 2 || $i == 5 || $i == 7 || $i == 10 || $i == 12 || $i == 15 || $i == 17 || $i == 20 ){
                                        $currentWill += 1;
                                    }
                                }
                                if( $job['baseWill'] == 0 && $i % 3 == 0) {
                                    $currentWill += 1;
                                }
                                echo( $currentWill );
                            ?>
                        </td><!-- volonté -->
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    @if( $job[ 'type' ] === "forceUser" )
        <div>
            <section>
                <h2>Alignement</h2>
                <p>Un Utilisateur de la Force doit choisir <a class="content-link" href="/alignement">un alignement</a> entre Coté Lumineux, Coté Obscur ou Neutre (Gris). Cet alignement sera ammené à évoluer au cours de la partie.</p>
                <p>Si le personnage est du Coté Lumineux, ajoutez <a class="content-link" href="/skills#knowledge">Connaissances</a>(Coté Lumineux) (<a class="content-link" href="/abilities#INTEL">INTEL</a>) et <a class="content-link" href="/skills#linguistic">Linguistique</a> (<a class="content-link" href="/abilities#INTEL">INTEL</a>) à la liste de ses compétences de classe.<br>
                Si le personnage est du Coté Obscur, ajoutez <a class="content-link" href="/skills#knowledge">Connaissances</a> (Coté Obscur) (<a class="content-link" href="/abilities#INTEL">INTEL</a>), <a class="content-link" href="/skills#bluff">Bluff</a> (<a class="content-link" href="/abilities#CHAR">CHAR</a>) et <a class="content-link" href="/skills#intimidate">Intimidation</a> (<a class="content-link" href="/abilities#FOR">FOR</a>) à la liste de ses compétences de classe.<br>
                Si le personnage n'appartient à aucun des deux ordres, ajoutez <a class="content-link" href="/skills#knowledge">Connaissances</a> (Coté Lumineux) (<a class="content-link" href="/abilities#INTEL">INTEL</a>) et <a class="content-link" href="/skills#knowledge">Connaissances</a> (Coté Obscur) (<a class="content-link" href="/abilities#INTEL">INTEL</a>) à la liste de ses compétences de classe.</p>

                <p>Une fois son alignement choisi, un Utilisateur de la Force génère automatiquement une présence dans la Force du même alignement que lui et d'une puissance proportionnelle à la sienne. Ainsi, plus un Utilisateur de la Force est puissant, plus son aura sera puissante.<br>
                Un Utilisateur de la Force peut tenter de réduire la puissance de son aura ou même de la dissimuler afin d'être indétectable dans la Force. Une telle tentative devra s'accompagner d'un jet de dé. De même, toute personne tentant de perçevoir les auras dans la Force devra lancer un dé afin de déterminer ce qu'il arrive à perçevoir.<br>
                En revanche, il est impossible pour un Utilisateur de la Force de simuler une présence d'alignement différent du sien.</p>
            </section>
            <section>
                <h2>Pouvoirs et Points de Force</h2>
                <p>Contrairement aux autres classes, l'Utilisateur de la Force possède des points de Force et des Pouvoirs qui lui sont conférés par la Force. Chaque utilisation d'un pouvoir coûte des points de Force, qu'il réussise ou qu'il échoue. Ce coût varie suivant le pouvoir utilisé et est également influencé par la différence qu'il peut y avoir entre l'alignement du personnage et celui du pouvoir en question. La liste des pouvoirs accessibles ainsi que leurs coûts et alignements est disponible dans <a class="content-link" href="/powers">la section Pouvoirs</a>.</p>

                <p>Pour récupérer des points de Force, un Utilisateur de la Force doit se reposer (méditer ou dormir). Un repos de 8h permet de regagner l'intégralité de ses points de Force. Un repos plus court ne restaurera qu'une partie de ces points, proportionnellement à la durée du repos.</p>
                <table class="content-table">
                    <thead>
                        <tr> <th>Durée du repos</th> <th>Points de Force récupérés</th> </tr>
                    </thead>
                    <tbody>
                        <tr> <td>1 heure</td> <td>12,5%</td> </tr>
                        <tr> <td>2 heures</td> <td>25%</td> </tr>
                        <tr> <td>3 heures</td> <td>37,5%</td> </tr>
                        <tr> <td>4 heures</td> <td>50%</td> </tr>
                        <tr> <td>5 heures</td> <td>62,5%</td> </tr>
                        <tr> <td>6 heures</td> <td>75%</td> </tr>
                        <tr> <td>7 heures</td> <td>87,5%</td> </tr>
                        <tr> <td>8 heures et plus</td> <td>100%</td> </tr>
                    </tbody>
                </table>
            </section>
        </div>
    @endif

@stop
