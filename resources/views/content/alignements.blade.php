@extends( 'layout' )

@section( 'title' )
    Alignements
@stop

@section( 'content' )

<h1 class="page-title">Alignements</h1>

<p>Quand un joueur décide de créer un personnage de la classe Utilisateur de la Force, il doit choisir parmis 3 alignements possibles pour son personnage : le Coté Lumineux, Neutre (Gris) ou le Coté Obscur. Cet alignement symbolise le coté de la Force que représente votre personnage ainsi que son allégeance.</p>

<p>Ainsi, si le personnage créé est d'alignement Lumineux, il sera un fier représentant de l'Ordre Jedi, qui fait preuve d'empathie envers ses semblables, privilégie la diplomatie à la violence et combat pour faire régner la paix et la justice à travers la galaxie.<br>
Au contraire, si il est d'alignement Obscur, il sera alors soit un Jedi Noir, apprenti déchu qui a succombé au Coté Obscur de la Force et ne cherche plus qu'à assouvir sa soif de puissance et de gloire personnelle, soit un membre du sombre Ordre Sith, de brutaux combattants que l'on pensait éteints et qui rêvent de soumettre la galaxie entière à leur autorité despotique. Les représentants du Coté Obscur n'ont ni pitié ni compassion et méprisent les faibles plus que tout.<br>
En revanche, si le personnage créé est d'alignement Neutre, il sera alors un de ces mystérieux Jedi Gris, des Jedi qui se sont éloignés du Conseil pour ne rendre de comptes qu'à la Force, et qui sont capables d'utiliser certains pouvoirs du Coté Obscur sans y sombrer.</p>

<p>Suivant l'alignement choisi, le personnage commence avec un certain nombre de points d'alignement.<br>
Par défaut, un personnage sera considéré comme d'alignement Neutre et commencera avec 55 points d'alignement. Si il commence du Coté Lumineux, le personnage commence avec 100 points d'alignement. Et si il commence du Coté Obscur, le personnage commence avec 0 point d'alignement.</p>

<p>Un personnage est considéré d'alignement Neutre tant qu'il est entre 40 et 69 points d'alignement.<br>
Un personnage est considéré du Coté Obscur tant qu'il est en dessous de 40 points d'alignement.<br>
Un personnage est considéré du Coté Lumineux tant qu'il est au dessus de 69 points d'alignement.</p>

<p>Lorsqu'un personnage effectue une action particulièrement altruiste ou jugée positive par le Maître de Jeu, il peut gagner des points d'alignement. En revanche, effectuer une action particulièrement égoïste, inutilement brutale ou sadique vous fera perdre des points d'alignement, d'un montant laissé à la discrétion du Maître de Jeu.<br>
Lorsqu'un Utilisateur de la Force utilise un pouvoir d'alignement Lumineux ou Obscur, il gagne (ou perd dans le cas d'un pouvoir du Coté Obscur) un nombre de points d'alignement égal à la moitié du coût final du pouvoir de la Force, arrondi à l'unité inférieure.<br>
Un personnage peut ainsi se retrouver à changer d'alignement au cours de la partie.</p>

<p>Même si l'alignement ne bloque pas l'accès aux pouvoirs utilisables par le personnage, il influe en revanche sur le coût en points de Force nécessaire pour les utiliser.<br>
Ainsi, les pouvoirs du Coté Lumineux d'un Jedi lui coûteront moins cher que ce que coûterait ce même pouvoir à un Jedi Gris ou à un Sith. En revanche, les pouvoirs du Coté Obscur lui coûteront également plus cher qu'à un Sith ou un personnage d'alignement Neutre.</p>

<p>Les modifications de coûts des pouvoirs en fonction de l'alignement se font comme suit (arrondis au supérieur) :</p>

<table class="content-table">
    <thead>
        <tr> <th>Points d'alignement</th> <th>Coût des pouvoirs Lumineux</th> <th>Coût des pouvoirs Obscur</th> </tr>
    </thead>
    <tbody>
        <tr> <td>0 - 9</td> <td>+75%</td> <td>-50%</td> </tr>
        <tr> <td>10 - 19</td> <td>+50%</td> <td>-30%</td> </tr>
        <tr> <td>20 - 29</td> <td>+50%</td> <td>-20%</td> </tr>
        <tr> <td>30 - 39</td> <td>+25%</td> <td>-15%</td> </tr>
        <tr> <td>40 - 49</td> <td>+25%</td> <td>-10%</td> </tr>
        <tr> <td>50 - 59</td> <td>100%</td> <td>100%</td> </tr>
        <tr> <td>60 - 69</td> <td>-10%</td> <td>+25%</td> </tr>
        <tr> <td>70 - 79</td> <td>-15%</td> <td>+25%</td> </tr>
        <tr> <td>80 - 89</td> <td>-20%</td> <td>+50%</td> </tr>
        <tr> <td>90 - 99</td> <td>-30%</td> <td>+50%</td> </tr>
        <tr> <td>100</td> <td>-50%</td> <td>+75%</td> </tr>
    </tbody>
</table>

@stop
