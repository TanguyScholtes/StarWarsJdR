@extends( 'layout' )

@section( 'title' )
    Caractéristiques
@stop

@section( 'content' )

    <h1>Caractéristiques</h1>

    <div class="content">
        <p>Les caractéristiques déterminent les différents aspects de votre personnage et auront un impact direct sur ses forces et ses faiblesses ainsi que sur la réussite de ses actions.</p>

        <h3>Modificateur</h3>
        <p>Le Modificateur est un nombre attribué à chaque caractéristique. C'est ce nombre qui est pris en compte pour calculer les bonus et les malus dont le personnage dispose.</p>
        <p>Le modificateur d'une caractéristique équivaut à la valeur de cette caractéristque divisée par deux moins cinq ( Modificateur = Caractéristique / 2 - 5 ).</p>
        <p>Il suit donc cette évolution :</p>
        <table class="content-table">
            <thead>
                <tr> <th>Caractéristique</th> <th>Modificateur</th> </tr>
            </thead>
            <tbody>
                <tr> <td>8-9</td> <td>-1</td> </tr>
                <tr> <td>10-11</td> <td>0</td> </tr>
                <tr> <td>12-13</td> <td>+1</td> </tr>
                <tr> <td>14-15</td> <td>+2</td> </tr>
                <tr> <td>16-17</td> <td>+3</td> </tr>
                <tr> <td>18-19</td> <td>+4</td> </tr>
                <tr> <td>20-21</td> <td>+5</td> </tr>
                <tr> <td>22-23</td> <td>+6</td> </tr>
                <tr> <td>24-25</td> <td>+7</td> </tr>
                <tr> <td>26-27</td> <td>+8</td> </tr>
                <tr> <td>28-29</td> <td>+9</td> </tr>
                <tr> <td>30</td> <td>+10</td> </tr>
            </tbody>
        </table>

        <h3>Départ</h3>
        <p>Le personnage commence au niveau 1 avec toutes ses caractéristiques à 8.</p>
        <p>Il dispose de 30 points à répartir comme il l'entend dans ses différentes caractéristiques. Une caractéristique coûtera 1 point pour toute augmentation entre 8 et 14 inclus, 2 points pour toute augmentation entre 15 et 16 inclus, et 3 points pour toute augmentation entre 17 et 18 inclus.<br>
        Aucune caractéristique ne pourra dépasser 18 lors de cette répartition. Aucune caractéristique ne pourra se trouver endessous de 8 lors de cette répartition.</p>
        <p>Afin de vous aider lors de cette répartition, voici une petite calculatrice qui vous permettra de déterminer rapidement et facilement le nombre de points qu'il vous reste ainsi que les modificateurs de vos caractéristiques.</p>

        @include( '../partials/calc' )

        <h3>Évolution</h3>
        <p>Un personnage recoit un point de caractéristique supplémentaire aux niveaux 4, 8, 12, 16 et 20.</p>
    </div>

    @if( $abilities )
        <ul class="content-list">
            @foreach( $abilities as $ability )
                <li id="<?php echo( $ability[ "abbr" ] ); ?>" class="content-list-item">
                    <h3 class="content-titles"><?php echo( $ability[ "name" ] ); ?> (<?php echo( $ability[ "abbr" ] ); ?>)</h3>
                    <p><?php echo( $ability[ "desc" ] ); ?></p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Il n'y a pas de caractéristiques pour l'instant.</p>
    @endif

@stop
