@extends( 'layout' )

@section( 'title' )
    Règles
@stop

@section( 'content' )

<h1 class="page-title">Règles</h1>

<div class="content">
    <ol class="ol">
        <li><a class="content-link" href="#attack">Bonus à l'attaque</a></li>
        <li><a class="content-link" href="#BBA">Bonus de Base à l'Attaque (BBA)</a></li>
        <li><a class="content-link" href="#BMO">Bonus de Manoeuvres Offensives (BMO)</a></li>
        <li><a class="content-link" href="#CA">Classe d'Armure (CA)</a></li>
        <li><a class="content-link" href="#DMD">Degré de Manoeuvre Défensive (DMD)</a></li>
        <li><a class="content-link" href="#Exp">Expérience</a></li>
        <li><a class="content-link" href="#init">Initiative</a></li>
        <li><a class="content-link" href="#save">Jets de sauvegarde</a></li>
        <li><a class="content-link" href="#death">Blessures et mort</a></li>
    </ol>
</div>

<div id="attack" class="content-list-item">
    <h3>Bonus à l'attaque</h3>
    <p>Il s'agit du bonus que vous ajouterez à votre d20 lorsque vous tenterez d'attaquer un ennemi. Il varie suivant le type d'arme que vous utilisez.</p>
    <p>Ainsi, une arme de corps à corps ou un sabre laser aura un bonus équivalent à sa <a class="content-link" href="#BBA">BBA</a> + <a class="content-link" href="/abilities#FOR">Mod. Force</a> + bonus d'équipement + Bonus/malus éventuel.<br>
    Une arme à distance aura un bonus équivalent à sa <a class="content-link" href="#BBA">BBA</a> + <a class="content-link" href="/abilities#DEXT">Mod. Dextérité</a> + bonus d'équipement + Bonus/malus éventuel.</p>
    <p>Ce bonus à l'attaque sera ajouté à 1d20 et ce total opposé à la <a class="content-link" href="#CA">CA</a> de l'adversaire. Si votre total dépasse la CA adverse, votre attaque atteint son but. Sinon, vous ratez votre attaque.</p>
    <p>En cas de combat avec une arme de corps à corps double (par exemple une épée à double lame), le personnage reçoit un malus à ses jets d'attaques de -6 pour sa première attaque du round et de -10 pour sa deuxième attaque du round.</p>
    <p>En cas de combat à deux armes (une dans chaque main), un personnage reçoit des malus à ses jets d'attaques de -6 (main directrice) / -10 (main non-directrice). En cas d'utilisation d'une arme avec la mention "Parfaitement équilibrée" dans sa main non-directrice, il réduit le malus sur sa main directrice de 2 points, pour un malus total de -4 (main directrice) / -10 (main non-directrice).</p>
    <p>Il est à noter que si un personnage utilise au contact une arme à distance, les adversaires reçoivent un bonus de +6 à tous leurs jets d'attaques à l'encontre du tireur.</p>
</div>

<div id="BBA" class="content-list-item">
    <h3>Bonus de Base à l'Attaque (BBA)</h3>
    <p>Le bonus de base à l'attaque représente, comme son nom l'indique, un bonus dont votre personnage bénéficie lorsqu'il attaque un adversaire. Il est défini par <a class="content-link" href="/classes">la classe</a> de votre personnage.</p>
    <p>Lorsque votre BBA atteint 5, 10, 15 et 20, vous gagnez une attaque supplémentaire par round, avec un malus de -5 à son <a class="content-link" href="#attack">jet d'attaque</a>.</p>
</div>

<div id="BMO" class="content-list-item">
    <h3>Bonus de Manoeuvres Offensives (BMO)</h3>
    <p>Il s'agit d'un bonus dont bénéficie votre personnage lorsqu'il tente une manoeuvre offensive telle qu'un croc-en-jambe. Il est de <a class="content-link" href="#BBA">BBA</a> + <a class="content-link" href="/abilities#FOR">Mod. Force</a>.</p>
    <p>Lorsque vous effectuez une manoeuvre offensive contre un ennemi, vous réalisez donc un jet de 1d20 + votre BMO et vous l'opposez à la <a class="content-link" href="#DMD">DMD</a> de l'ennemi. Si votre jet est supérieur à sa DMD, vous réussissez votre action. Sinon, votre action échoue.</p>
</div>

<div id="CA" class="content-list-item">
    <h3>Classe d'Armure (CA)</h3>
    <p>Représente la défense de votre personnage. Il s'agit de sa capacité à esquiver et encaisser les coups.</p>
    <p>En temps normal, elle est de 10 + Valeur d'armure + Valeur de Bouclier + <a class="content-link" href="/abilities#DEXT">Mod. Dextérité</a> + Armure naturelle + Bonus/malus éventuels.<br>
        Lorsqu'un personnage est pris par surprise, sa CA n'est plus que de 10 + Valeur d'armure + Valeur de Bouclier + Armure naturelle + Bonus/malus éventuels.</p>
    <p>Lorsqu'un personnage vous attaque, il compare donc son jet d'attaque à votre CA. Si son jet est supérieur, il vous touche et tout point de dégat excédant votre armure est retiré de vos points de vies. Si son jet est inférieur ou égal à votre CA, votre personnage esquive l'assaut.</p>
</div>

<div id="DMD" class="content-list-item">
    <h3>Degré de Manoeuvre Défensive (DMD)</h3>
    <p>Il s'agit de la capacité de votre personnage à se défendre contre une manoeuvre offensive réalisée contre lui, telle qu'un croc-en-jambe. Il est de la <a class="content-link" href="#BBA">BBA de votre personnage</a> + <a class="content-link" href="/abilities#FOR">Mod. Force</a> + <a class="content-link" href="/abilities#DEXT">Mod. Dextérité</a> + 10.</p>
    <p>Si le jet de votre attaquant surpasse votre DMD, il réussit son action offensive à votre encontre. Sinon, vous vous en défaites et son action échoue.</p>
</div>

<div id="Exp" class="content-list-item">
    <h3>Expérience</h3>
    <p>Au fur et à mesure de ses combats, votre personnage va accumuler des points d'expériences. Une fois qu'il en aura un certain nombre, il pourra franchir un pallier et ainsi gagner un niveau.</p>
    <p>Les niveaux de votre personnage lui permettent d'obtenir de nouveaux points de compétences, de nouveaux dons, de nouveaux pouvoirs et d'augmenter son maximum de points de vie. Un personnage recoit également un point de caractéristique supplémentaire aux niveaux 4, 8, 12, 16 et 20.</p>
    <table class="content-table">
        <thead>
            <tr> <th>Niveau</th> <th>Total d'expérience</th> </tr>
        </thead>
        <tbody>
            <tr> <td>1</td> <td>0</td> </tr>
            <tr> <td>2</td> <td>1.000</td> </tr>
            <tr> <td>3</td> <td>3.000</td> </tr>
            <tr> <td>4</td> <td>6.000</td> </tr>
            <tr> <td>5</td> <td>10.000</td> </tr>
            <tr> <td>6</td> <td>15.000</td> </tr>
            <tr> <td>7</td> <td>21.000</td> </tr>
            <tr> <td>8</td> <td>28.000</td> </tr>
            <tr> <td>9</td> <td>36.000</td> </tr>
            <tr> <td>10</td> <td>45.000</td> </tr>
            <tr> <td>11</td> <td>55.000</td> </tr>
            <tr> <td>12</td> <td>66.000</td> </tr>
            <tr> <td>13</td> <td>78.000</td> </tr>
            <tr> <td>14</td> <td>91.000</td> </tr>
            <tr> <td>15</td> <td>105.000</td> </tr>
            <tr> <td>16</td> <td>120.000</td> </tr>
            <tr> <td>17</td> <td>136.000</td> </tr>
            <tr> <td>18</td> <td>153.000</td> </tr>
            <tr> <td>19</td> <td>171.000</td> </tr>
            <tr> <td>20</td> <td>190.000</td> </tr>
        </tbody>
    </table>
</div>

<div id="init" class="content-list-item">
    <h3>Initiative</h3>
    <p>Représente la vitesse de réaction de votre personnage. Détermine l'ordre des tours lors des combats. L'initiative est égale à <a class="content-link" href="/abilities#DEXT">Mod. Dextérité</a> + Bonus/malus éventuels.</p>
</div>

<div id="save" class="content-list-item">
    <h3>Jets de sauvegarde</h3>
    <p>Représentent respectivement les réflexes, la condition physique et la force de caractère de votre personnage.</p>
    <p>Les jets de Réflexes sont égaux au <a class="content-link" href="/classes">bonus fourni par la classe</a> + <a class="content-link" href="/abilities#DEXT">Mod. Dextérité</a> + Bonus/malus éventuels.<br>
    Les jets de Vigueur sont égaux au <a class="content-link" href="/classes">bonus fourni par la classe</a> + <a class="content-link" href="/abilities#CONST">Mod. Constitution</a> + Bonus/malus éventuels.<br>
    Les jets de Volonté sont égaux au <a class="content-link" href="/classes">bonus fourni par la classe</a> + <a class="content-link" href="/abilities#SAG">Mod. Sagesse</a> + Bonus/malus éventuels.</p>
</div>

<div id="death" class="content-list-item">
    <h3>Blessures et mort</h3>
    <p>Lorsqu'un personnage subit une attaque, il perd un certain nombre de points de vie. Ces points de vie représentent son état de santé.</p>
    <p>Tant qu'un personnage est au dessus de 0 points de vie, il est considéré comme "En forme" et ne subit aucun malus particuliers.</p>
    <p>Si il descend à 0 points de vie, il est considéré comme "Hors de combat". Il ne peut alors plus réaliser d'attaque ou utiliser de Pouvoir de la Force. Il peut se déplacer sans aggraver son état mais toute autre action fatiguante lui fera perdre 1 point de vie supplémentaire.</p>
    <p>Si il descend en dessous de 0 points de vie, le personnage est considéré comme "Mourant". Il ne peut plus réaliser aucune action dans cet état et doit à chaque tour faire un jet de <a class="content-link" href="/abilities#CONST">Constitution</a> au degré de difficulté de 10 pour tenter de se stabiliser. Si il échoue, il perd 1 point de vie. Une fois stabilisé, le personnage n'a plus besoin de faire ce jet. Tout effet de dégâts sur la durée actif sur le personnage fait automatiquement échouer ce jet, en plus d'infliger ses dégâts normalement.<br>
    Un personnage mourant peut également être stabilisé si un effet de soin lui rend ne serait-ce qu'1 point de vie ou si un de ses compagnons réussi sur lui un jet de <a class="content-link" href="/skills#Premiers secours">Premiers Secours</a>(<a class="content-link" href="/abilities#SAG">SAG</a>) avec un DD de 15.</p>
    <p>Si un personnage possède des points de vie négatifs égaux ou supérieurs à sa <a class="content-link" href="/abilities#CONST">Constitution</a>, il est considéré comme "Mort". Un personnage meurt également si un effet temporaire ou une diminution permanente de caractéristique réduit sa <a class="content-link" href="/abilities#CONST">Constitution</a> à 0.<br>
    Une fois dans cet état, un personnage ne peut plus réaliser aucune action et même la médecine ne peut plus rien pour lui. Son seul espoir réside dans un Utilisateur de la Force assez puissant pour <a class="content-link" href="/powers#Revitalisation">manipuler les courants de la vie eux-mêmes…</a><br>
    Pour un droïde, la mort revêt une signification différente. En effet, le corps mécanique d'un droïde peut toujours être réparé. Mais si ses pièces peuvent être remplacées, ce qu'elles contiennent ne peut pas toujours être conservé. Ainsi, lorsqu'un droïde meurt, on considère ses circuits internes comme gravement atteints et irrécupérables. Si il est réparé, un droïde ayant été considéré comme "Mort" perd l'intégralité de sa mémoire et de sa personnalité. Il perd également tous les dons qui ne sont pas des modifications directes de sa structure corporelle ainsi que l'intégralité de ses points de compétences. Il conserve les équipements qui n'ont pas été endommagés durant le combat ainsi que les dons qui lui permettent de les porter.
    </p>
</div>

@stop
