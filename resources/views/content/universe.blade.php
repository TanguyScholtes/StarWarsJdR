@extends( 'layout' )

@section( 'title' )
    Univers
@stop

@section( 'content' )

<h1 class="page-title">Univers</h1>

<div class="content">
    <p style="text-align: center;">Il y a bien longtemps, dans une galaxie lointaine, très lointaine…</p>
    <div class="image-with-legend">
        <a class="image-link centered" href="https://wrvh.home.xs4all.nl/galaxymap/#download" target="_blank">
            <img style="border-radius: 15px; border: 1px solid black;" src="img/galaxyMap.jpg" alt="Carte de la galaxie" title="Carte de la galaxie par W.R. van Hage">
        </a>
        <p class="image-legend centered">Carte de la galaxie par W.R. van Hage</p>
    </div>
</div>

<div class="content">
    <p style="text-align: center; margin-top: 2em;">Choisissez votre allégeance</p>
    <p class="choose-menu universe-menu">
        <a class="choice galactic-republic" href="#Republic">République Galactique</a> <a class="choice sith-empire"  href="#Empire">Empire Sith</a>
    </p>
</div>

<div id="Empire" class="result sith-empire-choice content">
    <h3>L'Empire Sith</h3>

    <img class="image-centered" src="img/empireLogo.png" alt="Empire Sith" title="Empire Sith">

    <p>Les véritables origines des Sith restent entourées de mystère. La race Sith était insignifiante jusqu’à l’arrivée sur Korriban il y a trois mille ans de Jedi Noirs exilés qui soumirent les Sith à leur domination et leur philosophie.</p>
    <p>Les années passèrent, les Jedi Noirs se marièrent avec ceux sur lesquels ils régnaient, et au fil des générations, le mot "Sith" prit un nouveau sens. Cette nouvelle civilisation puissante se développa rapidement, dirigée par une population croissante d'ambitieux utilisateurs du côté obscur de la Force. Quinze cents ans plus tard, les frontières Sith atteignirent celles de la République, et la Grande Guerre de l'Hyperespace commença.</p>
    <p>Le Seigneur Noir Sith Naga Sadow mena son armée dans une campagne agressive pour détruire la République Galactique. Malgré les premières victoires des Sith, l’Ordre Jedi se rassembla pour vaincre ses homologues obscurs, détruisant la civilisation Sith sur Korriban.</p>
    <p>Toutefois, à l'insu des Jedi, le dernier Empereur Sith réussit à échapper au carnage et prit la fuite dans l'espace intersidéral avec ses plus fidèles Seigneurs Noirs.</p>
    <p>Ces survivants Sith entamèrent la reconstruction de leur société sur une planète lointaine, dans l'espoir de revenir un jour pour se venger.</p>
    <p>Au cours du millénaire suivant, l'Empire Sith retrouva toute sa puissance. L'Empereur développa un vaste empire militaire et une flotte de vaisseaux de guerre perfectionnés, et se lança dans des rituels obscurs pour prolonger sa vie et son règne incontesté.</p>
    <p>Lorsqu’arriva le temps de la vengeance, les Sith commencèrent à infiltrer les systèmes stellaires de la Bordure Extérieure, faisant naître la discorde et concluant des accords secrets avec les gangsters et les barons du crime locaux. Une fois toutes les pièces en place, les Sith lancèrent une offensive massive qui prit les Jedi par surprise. La première vague suffit aux Sith pour prendre le contrôle de plusieurs systèmes stellaires de la Bordure Extérieure, détruisant les chantiers de la République dans le secteur Sluis, et coupant l’importante route commerciale de Rimma.</p>
    <p>Après le premier assaut, les brillantes stratégies de l’Empereur et la puissance dévastatrice des forces armées impériales continuèrent de frapper la République, des profonds gouffres d’Utapau aux forêts immenses d’Agamar. Mais alors que l’Empire semblait capable de combattre indéfiniment, l’Empereur prit encore une fois la République à revers.</p>
    <p>Tandis que le Conseil Noir de l'Empereur était engagé dans des pourparlers de paix avec les dirigeants de la République, plusieurs Seigneurs Sith et une armée impériale d’élite mirent à sac la capitale de la République.</p>
    <p>Détruisant le Temple Jedi et tenant la planète en otage, les Sith ne laissèrent d'autre choix à la République que de renoncer à plusieurs systèmes périphériques en signant le Traité de Coruscant.</p>
    <p>Depuis la signature, l'Empereur s’est retiré pour poursuivre ses objectifs mystérieux, déléguant le contrôle au Conseil Noir, et préparant le terrain pour une terrible lutte de pouvoir. Dans le vide politique, les Sith et les dirigeants impériaux les plus forts et les plus rusés s’avancent pour assumer l'autorité, consolider la domination de l'Empire et écraser ses ennemis...</p>
</div>

<div id="Republic" class="result galactic-republic-choice content">
    <h3>La République Galactique</h3>

    <img class="image-centered" src="img/republicLogo.png" alt="République Galactique" title="République Galactique">

    <p>Pendant plus de vingt mille ans, la République Galactique fut la puissance la plus civilisée et avancée de la galaxie connue. Gouvernée par le Sénat Galactique constitué des représentants de centaines de systèmes stellaires et de planètes, la République était le centre de la paix et du progrès, un modèle dans l’obscurité de l'espace.</p>
    <p>Le vénéré Ordre Jedi lui-même jura de défendre la République, de combattre l’obscurité, et de maintenir la paix et l'équilibre dans la galaxie. Les Jedi suivirent ces principes pendant des millénaires, s'attirant l'admiration de leurs alliés et la haine de leurs ennemis.</p>
    <p>Pourtant, il y a moins d’un siècle, le plus grand de ces ennemis fit son retour...</p>
    <p>L'assaut de l’Empire Sith prit la République et les Jedi par surprise, et au terme d'une guerre longue et difficile, la République fut anéantie. Après le pillage de la capitale Coruscant par les forces impériales Sith, le Chancelier Suprême et le Sénat furent obligés de signer le douloureux Traité de Coruscant, exigeant de la République le retrait de son soutien à plusieurs alliés de longue date, y compris aux fidèles Bothans.</p>
    <p>Luttant contre une vague de systèmes stellaires se retirant, une crise d'approvisionnement insurmontable, et le chaos dans les rues de Coruscant, le Sénat est paralysé depuis la signature du traité.</p>
    <p>La noblesse amère et divisée des Mondes du Noyau discute chaque décision, faisant baisser le moral de citoyens déjà découragés. Rejetant la responsabilité de la domination impériale sur le dos des Jedi, le Sénat a pris ses distances avec les légendaires protecteurs de la République.</p>
    <p>Les Jedi restent dévoués à la protection de la République, mais le Conseil Jedi a quitté Coruscant, pour s’installer sur Tython, le monde d'origine des Jedi.</p>
    <p>La République a formé de nouvelles escouades des Forces Spéciales, des équipes disciplinées capables de travailler ensemble avec une efficacité quasi-parfaite. Ces troupes d'élite collaborent encore beaucoup avec les Jedi, mais en de nombreuses occasions, les soldats prennent le premier rôle dans la défense de la République.</p>
    <p>Malgré la dépression économique d’après-guerre et l'expansion continue de ses ennemis, l'esprit de la République reste indépendant, courageux et fort. De nouveaux dirigeants émergent pour lutter contre l’obscur Empire Sith, libérer la galaxie et rendre à la République sa gloire passée.</p>
</div>

<script type="text/javascript" src="js/choose.js"></script>

@stop
