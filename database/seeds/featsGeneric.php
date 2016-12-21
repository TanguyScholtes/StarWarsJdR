<?php

return [
    [
        "name" => "Combat à deux armes",
        "slug" => "two-weapons-fighting",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Ce don réduit les malus encourus par un personnage se battant avec deux armes (une dans chaque main) ou avec une arme double (une épée ou un sabre laser à double lame). Les malus normaux de -6 (main directrice) / -10 (main non-directrice) sont réduits de 0/4, ce qui les faits tomber à -6/-6.<br>
        Si le personnage utilise une arme parfaitement équilibrée dans sa main non-directrice, il bénéficie d'une réduction supplémentaire de 2/0, pour un total de -4/-6.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du combat à deux armes",
        "slug" => "advanced-two-weapons-fighting",
        "category" => "generic",
        "conditions" => "Niveau 4, Combat à deux armes",
        "type" => "Passif",
        "effects" => "Ce don réduit plus encore les malus à l'attaque encourus par un personnage se battant avec deux armes (une dans chaque main) ou avec une arme double (une épée ou un sabre laser à double lame). Il les diminue encore de 2/2, ce qui les fait tomber à -4 (main directrice) / -4 (main non-directrice).<br>
		Si le personnage utilise une arme parfaitement équilibrée dans sa main non-directrice, il bénéficie d'une réduction supplémentaire de 2/0, pour un total de -2/-4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du combat à deux armes",
        "slug" => "master-two-weapons-fighting",
        "category" => "generic",
        "conditions" => "Niveau 8, Science du combat à deux armes",
        "type" => "Passif",
        "effects" => "Ce don réduit encore les malus à l'attaque encourus par un personnage se battant avec deux armes (une dans chaque main) ou avec une arme double (une épée ou un sabre laser à double lame) de 2/2, ce qui les fait tomber à -2 (main directrice) / -2 (main non-directrice).<br>
		Si le personnage utilise une arme parfaitement équilibrée dans sa main non-directrice, il bénéficie d'une réduction supplémentaire de 2/0, pour un total de 0/-2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Port de l'armure légère",
        "slug" => "light-armor",
        "category" => "generic",
        "conditions" => "Classe autre que Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "Ce don permet de porter une armure légère. Les personnages qui ne l'ont pas ne peuvent pas porter d'armure légère, intermédiaire ou lourde. Les Wookies et les droïdes n'ont pas droit aux armures.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Port de l'armure intermédiaire",
        "slug" => "medium-armor",
        "category" => "generic",
        "conditions" => "Classe autre que Utilisateur de la Force, Port de l'armure légère",
        "type" => "Passif",
        "effects" => "Ce don permet de porter une armure intermédiaire. Les personnages qui ne l'ont pas ne peuvent pas porter d'armure intermédiaire ou lourde. Les Wookies et les droïdes n'ont pas droit aux armures.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Port de l'armure lourde",
        "slug" => "heavy-armor",
        "category" => "generic",
        "conditions" => "Classe autre que Utilisateur de la Force, Port de l'armure intermédiaire",
        "type" => "Passif",
        "effects" => "Sans ce don, il est impossible de porter une armure lourde. Wookies et droïdes n'ont pas droit aux armures.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Prudence",
        "slug" => "awareness",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets de Démolition et de Discrétion.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de la prudence",
        "slug" => "advanced-awareness",
        "category" => "generic",
        "conditions" => "Niveau 4, Prudence",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux jets de Démolition et de Discrétion. Remplace le bonus de Prudence.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de la prudence",
        "slug" => "master-awareness",
        "category" => "generic",
        "conditions" => "Niveau 4, Science de la prudence",
        "type" => "Passif",
        "effects" => "Confère un bonus de +3 aux jets de Démolition et de Discrétion. Remplace le bonus de Science de la prudence.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Coup critique",
        "slug" => "critical-strike",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Permet de réaliser une attaque au corps à corps aux chances de coup critique doublées (par exemple, si une arme a normalement besoin d'un 20 pour obtenir un coup critique, celui-ci devient possible avec 19 ou 20).<br>
		Si cette attaque touche, la cible est également étourdie pendant 1 tour, à moins de réussir un jet de Vigueur dont le DD est égal au niveau de l'attaquant + son modificateur de Force.<br>
		Utiliser cette attaque réduit la CA de l'utilisateur de 5 jusqu'à son prochain tour.<br>
		Ne fonctionne qu'avec les armes de corps à corps.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du coup critique",
        "slug" => "advanced-critical-strike",
        "category" => "generic",
        "conditions" => "Niveau 4, Coup critique",
        "type" => "Action",
        "effects" => "Les chances de coup critique de Coup critique sont maintenant triplées au lieu d'être doublées.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du coup critique",
        "slug" => "master-critical-strike",
        "category" => "generic",
        "conditions" => "Niveau 8, Science du coup critique",
        "type" => "Action",
        "effects" => "Les chances de coup critique de Coup critique sont quadruplées au lieu de triplées.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Empathie",
        "slug" => "empathy",
        "category" => "generic",
        "conditions" => "Race autre que droïde",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets des compétences de Persuasion, Vigilance et Premiers secours.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de l'empathie",
        "slug" => "advanced-empathy",
        "category" => "generic",
        "conditions" => "Niveau 4, Race autre que droïde, Empathie",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux jets des compétences de Persuasion, Vigilance et Premiers secours. Remplace le bonus d'Empathie.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de l'empathie",
        "slug" => "master-empathy",
        "category" => "generic",
        "conditions" => "Niveau 8, Race autre que droïde, Science de l'empathie",
        "type" => "Passif",
        "effects" => "Confère un bonus de +3 aux jets des compétences de Persuasion, Vigilance et Premiers secours. Remplace le bonus de Science de l'empathie.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Déluge de coups",
        "slug" => "multi-hits",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Confère une attaque de corps à corps supplémentaire au cours du round. Lorsqu'il utilise ce don, le personnage subit un malus de -4 à toutes les attaques qu'il porte jusqu'à la fin du round ainsi qu'un malus de -4 à la défense jusqu'au début de son prochain tour.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du déluge de coups",
        "slug" => "advanced-multi-hits",
        "category" => "generic",
        "conditions" => "Niveau 4, Déluge de coups",
        "type" => "Action",
        "effects" => "Diminue les malus d'attaque et de défense de Déluge de coups à -2 chacun.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du déluge de coups",
        "slug" => "master-multi-hits",
        "category" => "generic",
        "conditions" => "Niveau 8, Science du déluge de coups",
        "type" => "Action",
        "effects" => "Diminue les malus d'attaque et de défense de Déluge de coups à -1 chacun.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Technicien",
        "slug" => "technician",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets de Réparation, Sécurité et Informatique.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Technicien supérieur",
        "slug" => "advanced-technician",
        "category" => "generic",
        "conditions" => "Niveau 4, Technicien",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux jets de Réparation, Sécurité et Informatique. Remplace le bonus de Technicien.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maître technicien",
        "slug" => "master-technician",
        "category" => "generic",
        "conditions" => "Niveau 8, Technicien supérieur",
        "type" => "Passif",
        "effects" => "Confère un bonus de +3 aux jets de Réparation, Sécurité et Informatique. Remplace le bonus de Technicien supérieur.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Condition physique",
        "slug" => "physical-condition",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 à tous les jets de sauvegarde.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de la condition physique",
        "slug" => "advanced-physical-condition",
        "category" => "generic",
        "conditions" => "Niveau 4, Condition physique",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 à tous les jets de sauvegarde. Remplace le bonus de Condition physique.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de la condition physique",
        "slug" => "master-physical-condition",
        "category" => "generic",
        "conditions" => "Niveau 8, Science de la condition physique",
        "type" => "Passif",
        "effects" => "Confère un bonus de +3 à tous les jets de sauvegarde. Remplace le bonus de Science de la condition physique.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Implant de niveau 1",
        "slug" => "implant-one",
        "category" => "generic",
        "conditions" => "Race autre que droïde",
        "type" => "Passif",
        "effects" => "Permet d'utiliser des implants cybernétiques de niveau 1. On ne peut utiliser qu'un seul implant en même temps. Un droïde ne peut pas utiliser d'implant.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Implant de niveau 2",
        "slug" => "implant-two",
        "category" => "generic",
        "conditions" => "Niveau 4, Race autre que droïde, Implant de niveau 1",
        "type" => "Passif",
        "effects" => "Permet d'utiliser des implants cybernétiques de niveau 2. On ne peut utiliser qu'un seul implant en même temps. Un droïde ne peut pas utiliser d'implant.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Implant de niveau 3",
        "slug" => "implant-three",
        "category" => "generic",
        "conditions" => "Niveau 8, Race autre que droïde, Implant de niveau 2",
        "type" => "Passif",
        "effects" => "Permet d'utiliser des implants cybernétiques de niveau 3. On ne peut utiliser qu'un seul implant en même temps. Un droïde ne peut pas utiliser d'implant.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Attaque en puissance",
        "slug" => "power-strike",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Quand un personnage utilise Attaque en puissance, il bénéficie d'un bonus de +3 aux dégâts de sa prochaine attaque de corps à corps, mais cette dernière s'accompagne d'un malus de -1 aux jets d'attaque.<br>
		Ne fonctionne qu'avec des armes de corps à corps.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de l'attaque en puissance",
        "slug" => "advanced-power-strike",
        "category" => "generic",
        "conditions" => "Niveau 4, Attaque en puissance",
        "type" => "Action",
        "effects" => "Porte le bonus aux dégâts d'Attaque en puissance à +6 mais passe également le malus d'attaque à -2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de l'attaque en puissance",
        "slug" => "master-power-strike",
        "category" => "generic",
        "conditions" => "Niveau 8, Science de l'attaque en puissance",
        "type" => "Action",
        "effects" => "Porte le bonus aux dégâts d'Attaque en puissance à +9 mais passe également le malus d'attaque à -3.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Décharge d'énergie",
        "slug" => "power-shot",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Quand un personnage utilise Décharge d'énergie, il bénéficie d'un bonus de +2 aux dégâts de sa prochaine attaque à distance, mais cette dernière s'accompagne d'un malus de -1 au jet d'attaque.<br>
		Ne fonctionne qu'avec des armes à distance.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de la décharge d'énergie",
        "slug" => "advanced-power-shot",
        "category" => "generic",
        "conditions" => "Niveau 4, Décharge d'énergie",
        "type" => "Action",
        "effects" => "Porte le bonus aux dégâts de Décharge d'énergie à +4 mais passe le malus d'attaque à -2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de la décharge d'énergie",
        "slug" => "master-power-shot",
        "category" => "generic",
        "conditions" => "Niveau 8, Science de la décharge d'énergie",
        "type" => "Action",
        "effects" => "Porte le bonus aux dégâts de Décharge d'énergie à +6 mais passe le malus d'attaque à -3.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Tir rapide",
        "slug" => "multi-shot",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Confère une attaque à distance supplémentaire au cours du round. Lorsqu'il utilise ce don, le personnage subit un malus de -4 à toutes les attaques qu'il porte jusqu'à la fin du round ainsi qu'un malus de -4 à la défense jusqu'au début de son prochain tour. Ne fonctionne qu'avec les armes à distance.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du tir rapide",
        "slug" => "advanced-multi-shot",
        "category" => "generic",
        "conditions" => "Niveau 4, Tir rapide",
        "type" => "Action",
        "effects" => "Diminue les malus d'attaque et de défense de Tir rapide à -2 chacun.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du tir rapide",
        "slug" => "master-multi-shot",
        "category" => "generic",
        "conditions" => "Niveau 8, Science du tir rapide",
        "type" => "Action",
        "effects" => "Diminue les malus d'attaque et de défense de Tir rapide à -1 chacun.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Tir précis",
        "slug" => "critical-shot",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Action",
        "effects" => "Permet de réaliser une attaque à distance aux chances de coup critique doublées (par exemple, si une arme a normalement besoin d'un 20 pour obtenir un coup critique, celui-ci devient possible avec 19 ou 20). Si cette attaque touche, la cible est également étourdie pendant 1 tour, à moins de réussir un jet de Vigueur dont le DD est égal au niveau de l'attaquant + son modificateur d'Intelligence.<br>
		Utiliser cette attaque réduit la CA de l'utilisateur de 5 jusqu'à son prochain tour.<br>
		Ne fonctionne qu'avec les armes à distance.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du tir précis",
        "slug" => "advanced-critical-shot",
        "category" => "generic",
        "conditions" => "Niveau 4, Tir précis",
        "type" => "Action",
        "effects" => "Les chances de coup critique de Précision de sniper sont maintenant triplées au lieu de doublées.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du tir précis",
        "slug" => "master-critical-shot",
        "category" => "generic",
        "conditions" => "Niveau 8, Science du tir précis",
        "type" => "Action",
        "effects" => "Les chances de coup critique de Précision de sniper sont quadruplées au lieu de triplées.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Tir à bout portant",
        "slug" => "point-blank-shot",
        "category" => "generic",
        "conditions" => "Niveau 4",
        "type" => "Passif",
        "effects" => "Le personnage a appris à tirer efficacement à portée réduite. Quand sa cible se trouve au contact, il bénéficie d'un bonus à l'attaque de +1. De plus, les ennemis qui l'engagent au contact lorsque le personnage est équipé d'une arme à distance ont un bonus à l'attaque de +4 au lieu du +6 habituel.<br>
        Ne fonctionne qu'avec des Pistolets blasters ou des Fusils blaster dont la portée maximale ne dépasse pas 12 mètres (8 cases).",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du tir à bout portant",
        "slug" => "advanced-point-blank-shot",
        "category" => "generic",
        "conditions" => "Niveau 8, Tir à bout portant",
        "type" => "Passif",
        "effects" => "Porte le bonus à l'attaque du personnage à +2 quand sa cible est au contact avec lui. Réduit le bonus d'attaque des ennemis qui engagent le personnage au contact lorsqu'il est équipé d'une arme à distance à +2.<br>
        Ne fonctionne qu'avec des Pistolets blasters ou des Fusils blaster dont la portée maximale ne dépasse pas 12 mètres (8 cases).",
        "menuDisplay" => 0
    ],
    [
        "name" => "Tir fantôme",
        "slug" => "ghost-shot",
        "category" => "generic",
        "conditions" => "Niveau 4",
        "type" => "Action",
        "effects" => "Le personnage sait comment et quand tirer pour que sa cible ne voit pas venir ses tirs. Le personnage ajoute à son attaque à distance un bonus de dégâts de +1. Si sa cible possède un moyen de dévier les tirs de blasters, elle reçoit un malus de -2 à sa tentative pour dévier cette attaque.<br>
        À partir du niveau 8, porte le bonus de dégâts à +2 et le malus à la tentative de déviation de la cible à -4.<br>
        À partir du niveau 12, porte le bonus de dégâts à +3 et le malus à la tentative de déviation de la cible à -6.<br>
        À partir du niveau 16, porte le bonus de dégâts à +4 et le malus à la tentative de déviation de la cible à -8.<br>
        À partir du niveau 20, porte le bonus de dégâts à +5 et le malus à la tentative de déviation de la cible à -10.<br>
        Ne fonctionne qu'avec des armes à distance.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Maniement des armes : Pistolet blaster",
        "slug" => "weapon-proficiency-blaster-pistol",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Permet de manier les armes de type Pistolet blaster.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Arme de prédilection : Pistolet blaster",
        "slug" => "weapon-focus-blaster-pistol",
        "category" => "generic",
        "conditions" => "Maniement des armes : Pistolet blaster",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets d'attaque avec les pistolets blaster.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Spécialisation martiale : Pistolet blaster",
        "slug" => "weapon-specialization-blaster-pistol",
        "category" => "generic",
        "conditions" => "Niveau 4, Classe de Soldat, Arme de prédilection : Pistolet blaster",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux dégâts des pistolets blaster.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maniement des armes : Fusil blaster",
        "slug" => "weapon-proficiency-blaster-riffle",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Permet de manier les armes de type Fusil blaster.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Arme de prédilection : Fusil blaster",
        "slug" => "weapon-proficiency-focus-riffle",
        "category" => "generic",
        "conditions" => "Maniement des armes : Fusil blaster",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets d'attaque avec les fusils blaster.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Spécialisation martiale : Fusil blaster",
        "slug" => "weapon-specialization-blaster-riffle",
        "category" => "generic",
        "conditions" => "Niveau 4, Classe de Soldat, Arme de prédilection : Fusil blaster",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux dégâts des fusils blaster.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maniement des armes : Armes lourdes",
        "slug" => "weapon-proficiency-heavy-weapon",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Permet de manier les armes lourdes, comme le fusil blaster à répétition.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Arme de prédilection : Armes lourdes",
        "slug" => "weapon-focus-heavy-weapon",
        "category" => "generic",
        "conditions" => "Maniement des armes : Armes lourdes",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets d'attaque avec les armes lourdes.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Spécialisation martiale : Armes lourdes",
        "slug" => "weapon-specialization-heavy-weapon",
        "category" => "generic",
        "conditions" => "Niveau 4, Classe de Soldat, Arme de prédilection : Armes lourdes",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux dégâts des armes lourdes.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maniement des armes : Armes de corps à corps",
        "slug" => "weapon-proficiency-melee-weapon",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Permet de manier les armes de corps à corps, telles les vibro-lames et autres armes à énergie ou non (à l'exception des sabres lasers).",
        "menuDisplay" => 1
    ],
    [
        "name" => "Arme de prédilection : Armes de corps à corps",
        "slug" => "weapon-focus-melee-weapon",
        "category" => "generic",
        "conditions" => "Maniement des armes : Armes de corps à corps",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets d'attaque avec les armes de corps à corps (à l'exception des sabres lasers).",
        "menuDisplay" => 0
    ],
    [
        "name" => "Spécialisation martiale : Armes de corps à corps",
        "slug" => "weapon-specialization-melee-weapon",
        "category" => "generic",
        "conditions" => "Niveau 4, Classe de Soldat, Arme de prédilection : Armes de corps à corps",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux dégâts des armes de corps à corps (à l'exception des sabres lasers).",
        "menuDisplay" => 0
    ],
    [
        "name" => "Attaque en finesse",
        "slug" => "weapon-finesse",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Permet d'utiliser le modificateur le plus haut entre le modificateur de Force et le modificateur de Dextérité pour déterminer le jet d'attaque du personnage lorsqu'il réalise une attaque de corps à corps avec une arme de corps à corps ou un sabre laser.<br>
        Pour que ce don soit effectif avec un sabre laser, le personnage doit être formé à son maniement et posséder le don \"Maniement des armes : Sabres lasers\".",
        "menuDisplay" => 1
    ],
    [
        "name" => "Précision mortelle",
        "slug" => "deadly-finesse",
        "category" => "generic",
        "conditions" => "Niveau 4, Attaque en finesse",
        "type" => "Passif",
        "effects" => "Permet d'utiliser le modificateur le plus haut entre le modificateur de Force et le modificateur de Dextérité pour déterminer le jet de dégâts d'une attaque de corps à corps réalisée avec une arme de corps à corps ou un sabre laser.<br>
        Pour que ce don soit effectif avec un sabre laser, le personnage doit être formé à son maniement et posséder le don \"Maniement des armes : Sabres lasers\".",
        "menuDisplay" => 0
    ],
    [
        "name" => "Robustesse",
        "slug" => "toughness",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "Confère +1 PV supplémentaire par niveau. Fonctionne rétroactivement pour les niveaux gagnés avant son obtention.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science de la robustesse",
        "slug" => "advanced-toughness",
        "category" => "generic",
        "conditions" => "Niveau 4, Robustesse",
        "type" => "Passif",
        "effects" => "Réduit de 2 les dégâts subit à chaque attaque. Le bonus de Robustesse reste actif.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise de la robustesse",
        "slug" => "master-toughness",
        "category" => "generic",
        "conditions" => "Niveau 8, Science de la Robustesse",
        "type" => "Passif",
        "effects" => "Porte les PV bonus octroyés par Robustesse à +2 PV par niveau. Fonctionne de manière rétroactive. Le bonus de résistance aux dégâts de Science de la robustesse est conservé.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Régénération",
        "slug" => "regenerate",
        "category" => "generic",
        "conditions" => "Niveau 4",
        "type" => "Passif",
        "effects" => "À force de subir des blessures, le métabolisme du personnage le fait récupérer de manière stupéfiante.<br>
        Le personnage récupère 1 point de vie par tour lorsqu'il est en combat. Hors combat, il possède désormais une régénération de points de vie proportionnelle au temps qu'il passe à récupérer, un repos de 8h lui permettant de récupérer l'intégralité de ses points de vie.<br>
        Cette régénération ne suffit pas à stabiliser le personnage.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Duel",
        "slug" => "duel",
        "category" => "generic",
        "conditions" => "Aucune",
        "type" => "Passif",
        "effects" => "En se concentrant sur l'utilisation d'une arme à une main bien spécifique, le personnage bénéficie d'un bonus de +1 à l'attaque et à la défense lorsqu'il utilise cette arme.<br>
		Ce don s'applique autant aux armes de corps à corps qu'aux armes à distance.<br>
		Ne fonctionne que si le personnage n'utilise aucune arme dans son autre main. Ne fonctionne que pour les armes à une main.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Science du duel",
        "slug" => "advanced-duel",
        "category" => "generic",
        "type" => "Passif",
        "conditions" => "Niveau 4, Duel",
        "effects" => "Porte les bonus d'attaque et de défense de Duel à +2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Maîtrise du duel",
        "slug" => "master-duel",
        "category" => "generic",
        "type" => "Passif",
        "conditions" => "Niveau 8, Science du duel",
        "effects" => "Porte les bonus d'attaque et de défense de Duel à +3.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Esquive réflexe",
        "slug" => "dodge",
        "category" => "generic",
        "conditions" => "Niveau 4, Classe d'Eclaireur",
        "type" => "Passif",
        "effects" => "Le personne conserve le bonus à la CA offert par son modificateur de Dextérité même quand il est pris au dépourvu. Il gagne également un bonus de +2 aux jets de sauvegarde contre les explosions provoquées par les grenades.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Esquive réflexe supérieure",
        "slug" => "advanced-dodge",
        "category" => "generic",
        "conditions" => "Niveau 7, Classe d'Eclaireur, Esquive réflexe",
        "type" => "Passif",
        "effects" => "Porte le bonus aux jets de sauvegarde contre les grenades d'Esquive réflexe à +4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Attaque sournoise",
        "slug" => "backstab",
        "category" => "generic",
        "conditions" => "Classe de Voyou",
        "type" => "Passif",
        "effects" => "Permet d'infliger 1d6 points de dégâts supplémentaires lors d'une attaque au corps à corps sur une cible dans l'incapacité de se défendre.<br>
		Une créature est considérée comme dans l'incapacité de se défendre quand elle est attaquée par derrière, étourdie, immobilisée ou lorsque l'attaque est portée par un personnage en mode Discrétion qu'elle n'a pas détecté (le mode Discrétion disparaît dès le début du combat mais il est tout de même pris en compte pour la première attaque).<br>
		Les dégâts supplémentaires de l'Attaque sournoise ne sont pas multipliés en cas de coup critique.<br>
        Au niveau 3, le bonus de dégâts d'Attaque sournoise passe à 2d6. Puis à 3d6 au niveau 5, 4d6 au niveau 7, 5d6 au niveau 9, 6d6 au niveau 11, 7d6 au niveau 13, 8d6 au niveau 15 et 9d6 au niveau 17.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Chance de gredin",
        "slug" => "scoundrel-luck",
        "category" => "generic",
        "conditions" => "Classe de Voyou",
        "type" => "Passif",
        "effects" => "Confère un bonus permanent de +2 en défense.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Chance de gredin supérieure",
        "slug" => "advanced-scoundrel-luck",
        "category" => "generic",
        "conditions" => "Niveau 6, Classe de Voyou, Chance de gredin",
        "type" => "Passif",
        "effects" => "Porte le bonus de défense de Chance de gredin à +4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Chance de gredin magistrale",
        "slug" => "master-scoundrel-luck",
        "category" => "generic",
        "conditions" => "Niveau 12, Classe de Voyou, Chance de gredin supérieure",
        "type" => "Passif",
        "effects" => "Porte le bonus de défense de Chance de gredin à +6.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Être inorganique",
        "slug" => "inorganic-being",
        "category" => "generic",
        "conditions" => "Race de droïde",
        "type" => "Passif",
        "effects" => "Le personnage ne peut pas ressentir ni utiliser la Force de quelque manière que ce soit. Il est également insensible aux effets mentaux, aux effets de poisons ainsi qu'aux pouvoirs Soin, Régénération, Etourdissement, Stase, Champ de stase, Influence d'esprit, Domination d'esprit, Drain de vie, Champ de mort, Ralentissement, Affliction, Peste, Blessure, Etranglement et Mort.<br>
		Sa présence ne peut pas être détectée à travers la Force.<br>
		Ce don est automatiquement possédé par les droïdes.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Droïde",
        "slug" => "droid",
        "category" => "generic",
        "conditions" => "Race de droïde",
        "type" => "Passif",
        "effects" => "Permet au droïde de s'équiper d'améliorations et de blindages de classe 1. Au niveau 7, ils peuvent s'équiper d'améliorations et de blindages de classe 2. Au niveau 13, ils peuvent équiper des améliorations et de blindages de classe 3. Ce don est automatiquement possédé par les droïdes.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Logique de combat",
        "slug" => "combat-logic",
        "category" => "generic",
        "conditions" => "Race de droïde",
        "type" => "Passif",
        "effects" => "Confère un droïde un bonus à la CA de +2. Ce bonus est actif en permanence. Au niveau 6, ce bonus passe à +4. Au niveau 12, il passe à +6.<br>
		Ce don est automatiquement possédé par les droïdes.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Robustesse de Wookie",
        "slug" => "wookiee-toughness",
        "category" => "generic",
        "conditions" => "Race de Wookie",
        "type" => "Passif",
        "effects" => "Confère une résistance à tous les dégâts de +2. Le personnage gagne +2 PV à chacune de ses montées de niveau, en plus des autres bonus dont il pourrait bénéficier.<br>
		Ce don est automatiquement possédé par les Wookies.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Maniement des armes : sabres lasers",
        "slug" => "weapon-proficiency-lightsaber",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "Permet de manier les sabres lasers, arme propre aux Utilisateurs de la Force.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Arme de prédilection : sabres lasers",
        "slug" => "weapon-focus-lightsaber",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force, Maniement des armes : sabres lasers",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux jets d'attaque avec les sabres lasers.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Spécialisation martiale : sabres lasers",
        "slug" => "weapon-specialization-lightsaber",
        "category" => "force",
        "conditions" => "Niveau 4, Classe d'Utilisateur de la Force d'archétype Combattant, Arme de prédilection : sabres lasers",
        "type" => "Passif",
        "effects" => "Confère un bonus de +2 aux dégâts des sabres lasers.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Sens de Jedi",
        "slug" => "jedi-senses",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "Confère un bonus à la CA de +2. Ce bonus est actif en permanence.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Sens de Chevalier",
        "slug" => "advanced-jedi-senses",
        "category" => "force",
        "conditions" => "Niveau 6, Classe d'Utilisateur de la Force, Sens de Jedi",
        "type" => "Passif",
        "effects" => "Porte le bonus à la CA de Sens de Jedi à +4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Sens de Maître",
        "slug" => "master-jedi-senses",
        "category" => "force",
        "conditions" => "Niveau 12, Classe d'Utilisateur de la Force, Sens de Chevalier",
        "type" => "Passif",
        "effects" => "Porte le bonus à la CA de Sens de Jedi à +6.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Saut de Force",
        "slug" => "force-jump",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force d'archétype Combattant",
        "type" => "Action",
        "effects" => "Quand un adversaire est à une distance de 9 mètres ou moins (avec un minimum de 3 mètres entre lui et l'Utilisateur de la Force) et que l'Utilisateur de la Force a une ligne de vue dégagée sur lui, l'Utilisateur de la Force peut choisir d'exécuter un grand bond avec l'aide de la Force pour arriver presque instantanément au contact de cet ennemi. Il peut ensuite effectuer son nombre normal d'attaques sur cet ennemi. Le personnage bénéficie alors d'un bonus aux jets d'attaques et aux dégâts de +1 aux attaques effectuées dans le même tour que le Saut de Force.<br>
		Après un Saut de Force, l'Utilisateur de la Force ne peut pas utiliser d'autre don d'Action (comme Attaque en puissance ou Déluge de coups, par exemple) jusqu'à la fin de son tour.<br>
		Si l'Utilisateur de la Force était en mode Discrétion et n'avait pas été détecté avant d'exécuter son Saut de Force, il peut appliquer à sa première attaque le bonus d'Attaque sournoise si il possède ce don.<br>
		Ne fonctionne pas si le personnage n'est pas équipé d'un sabre laser.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Saut de Force supérieur",
        "slug" => "advanced-force-jump",
        "category" => "force",
        "conditions" => "Niveau 6, Classe d'Utilisateur de la Force d'archétype Combattant, Saut de Force",
        "type" => "Action",
        "effects" => "Porte le bonus aux jets d'attaques et de dégâts pour les attaques effectuées dans le même tour qu'un Saut de Force à +2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Saut de Force maîtrisé",
        "slug" => "master-force-jump",
        "category" => "force",
        "conditions" => "Niveau 12, Classe d'Utilisateur de la Force d'archétype Combattant, Saut de Force supérieur",
        "type" => "Action",
        "effects" => "Porte le bonus aux jets d'attaques et de dégâts pour les attaques effectuées dans le même tour qu'un Saut de Force à +4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Forme de combat : Soresu",
        "slug" => "soresu",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "Permet à un Utilisateur de la Force équipé d'un sabre laser de dévier les tirs de blaster avec son arme.<br>
		Quand le personnage se fait tirer dessus et qu'il n'est pas pris par surprise, il peut opposer un jet d'attaque au jet du tireur. Si le jet d'attaque de l'Utilisateur de la Force est plus élevé que celui du tireur, le tir est dévié et n'inflige aucun dégât. Si le jet est supérieur de 10 ou plus, le tir est renvoyé sur le tireur.<br>
		Si le jet du tireur est plus élevé, l'Utilisateur de la Force subit les dégâts du tir sans avoir la possibilité d'esquiver avec sa CA.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Forme de combat : Soresu supérieur",
        "slug" => "advanced-soresu",
        "category" => "force",
        "conditions" => "Niveau 4, Classe d'Utilisateur de la Force, Forme de combat : Soresu",
        "type" => "Passif",
        "effects" => "Confère un bonus de +3 au jet d'attaque réalisé par l'Utilisateur de la Force lorsqu'il tente de dévier un tir avec Forme de combat : Soresu.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Forme de combat : Soresu maîtrisé",
        "slug" => "master-soresu",
        "category" => "force",
        "conditions" => "Niveau 8, Classe d'Utilisateur de la Force, Forme de combat : Soresu supérieur",
        "type" => "Passif",
        "effects" => "Porte à +6 le bonus de Forme de combat : Soresu supérieur.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Immunité de Force : Peur",
        "slug" => "force-immunity-fear",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force d'archétype Equilibré",
        "type" => "Passif",
        "effects" => "Immunise le personnage à tous les effets de peur. Les pouvoirs de Force qui infligent de la peur sont Peur, Horreur et Folie.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Immunité de Force : Etourdissement",
        "slug" => "force-immunity-stun",
        "category" => "force",
        "conditions" => "Niveau 6, Classe d'Utilisateur de la Force d'archétype Equilibré, Immunité de Force : Peur",
        "type" => "Passif",
        "effects" => "Immunise le personnage à tous les effets d'étourdissement. Les effets d'étourdissement sont infligés par la Poussée de Force, la Vague de Force, Etourdissement, Coup critique, Précision de sniper, les grenades soniques et étourdissantes, les mines flash et les rayons paralysants.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Immunité de Force : Paralysie",
        "slug" => "force-immunity-paralysis",
        "category" => "force",
        "conditions" => "Niveau 12, Classe d'Utilisateur de la Force d'archétype Equilibré, Immunité de Force : Etourdissement",
        "type" => "Passif",
        "effects" => "Immunise le personnage à tous les effets de paralysie. Les effets de paralysie sont infligés par Stase, Champ de stase, les grenades à CryoBan et les lanceurs de carbonite.<br>
		Les seules sources d'effets de contrôle qui peuvent encore affecter le personnage sont la Bourrasque de Force, Blessure, Etranglement et Mort.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Force concentrée",
        "slug" => "force-focus",
        "category" => "force",
        "conditions" => "Classe d'Utilisateur de la Force d'archétype Sorcier",
        "type" => "Passif",
        "effects" => "Confère un bonus de +1 aux DD de tous les pouvoirs de la Force utilisés par le personnage. Cet effet est actif en permanence.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Force concentrée supérieure",
        "slug" => "advanced-force-focus",
        "category" => "force",
        "conditions" => "Niveau 6, Classe d'Utilisateur de la Force d'archétype Sorcier, Concentration de Force",
        "type" => "Passif",
        "effects" => "Porte le bonus au DD de Force concentrée à +2.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Force concentrée maîtrisée",
        "slug" => "master-force-focus",
        "category" => "force",
        "conditions" => "Niveau 12, Classe d'Utilisateur de la Force d'archétype Sorcier, Force concentrée supérieure",
        "type" => "Passif",
        "effects" => "Porte le bonus au DD de Force concentrée à +4.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Sensibilité à la Force",
        "slug" => "force-awareness",
        "category" => "force",
        "conditions" => "Niveau 2, Classe d'Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "La formation de Jedi ou de Sith affecte chaque apprenti de façon unique, leur permettant de progresser en abileté tout en comblant leurs défauts. En de rares occasions, cette formation peut débloquer un potentiel insoupçonné chez certaines personnes d'exception, renforçant grandement leur connexion à la Force.<br>
        Le personnage possède 40 points de Force maximaux supplémentaires.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Régénération de Force",
        "slug" => "force-regeneration",
        "category" => "force",
        "conditions" => "Niveau 4, Classe d'Utilisateur de la Force, Sensibilité à la Force",
        "type" => "Passif",
        "effects" => "Grâce à l'entraînement et à la méditation, le personnage a appris à mieux canaliser la Force, augmentant son taux de récupération de points de Force.<br>
        Le personnage récupère 1 point de Force par tour lorsqu'il est en combat. Hors combat, sa régénération habituelle de points de Force est doublée, lui permettant de récupérer l'intégralité de ses points de Force en 4h de repos au lieu de 8.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Force intérieure",
        "slug" => "inner-force",
        "category" => "force",
        "conditions" => "Niveau 3, Classe d'Utilisateur de la Force",
        "type" => "Passif",
        "effects" => "Que ce soit en utilisant le Coté Lumineux de la Force pour se protéger de la douleur ou en s'étant habitué à elle à force de canaliser les énergies du Coté Obscur, les Utilisateurs de la Force ressentent moins la douleur que le commun des mortels.<br>
        Le personnage réduit les dégâts qu'il subit de toutes les sources de 5%, réduction arrondie à l'unité inférieure.",
        "menuDisplay" => 1
    ],
    [
        "name" => "Force intérieure supérieure",
        "slug" => "advanced-inner-force",
        "category" => "force",
        "conditions" => "Niveau 7, Classe d'Utilisateur de la Force, Force intérieure",
        "type" => "Passif",
        "effects" => "Porte la réduction de dégâts de toutes les sources de Force intérieure à 10%, réduction arrondie à l'unité inférieure.",
        "menuDisplay" => 0
    ],
    [
        "name" => "Force intérieure magistrale",
        "slug" => "master-inner-force",
        "category" => "force",
        "conditions" => "Niveau 11, Classe d'Utilisateur de la Force, Force intérieure supérieure",
        "type" => "Passif",
        "effects" => "Porte la réduction de dégâts de toutes les sources de Force intérieure à 15%, réduction arrondie à l'unité inférieure.",
        "menuDisplay" => 0
    ]
];
