<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'title' => 'Avatar 2',
            'image' => 'img/films/avatar-2.png',
            'realisateur' => 'James Cameron',
            'acteurs' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
            'prix' => '15.99',
            'categorie' => 'Action',
            'date' => '2022-12-14',
            'description' => 'Jake Sully et Ney\'tiri ont formé une famille et font tout pour rester aussi soudés que possible. Ils sont cependant contraints de quitter leur foyer et d\'explorer les différentes régions encore mystérieuses de Pandora. Lorsqu\'une ancienne menace refait surface, Jake va devoir mener une guerre difficile contre les humains.'
        ]);

        DB::table('films')->insert([
            'title' => 'Uncharted',
            'image' => 'img/films/uncharted.png',
            'realisateur' => 'Ruben Fleischer',
            'acteurs' => 'Tom Holland, Sophia Taylor Ali, Mark Wahlberg,Tati Gabrielle, Rudy Pankow',
            'prix' => '7.99',
            'categorie' => 'Action',
            'date' => '2022-02-08',
            'description' => 'Le chasseur de trésors Victor Sully Sullivan recrute Nathan Drake pour l\'aider à récupérer une fortune vieille de 500 ans amassée par l\'explorateur Ferdinand Magellan.'
        ]);

        DB::table('films')->insert([
            'title' => 'Divergente',
            'image' => 'img/films/divergente.png',
            'realisateur' => 'Neil Burger',
            'acteurs' => 'Shailene Woodley, Theo James, Kate Winslet, Zoë Kravitz, Ansel Elgort',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '2014-04-09',
            'description' => 'Tris vit dans un monde post-apocalyptique où la société est divisée en cinq clans. À 16 ans, elle doit choisir son appartenance pour le reste de sa vie. Cas rarissime, son test d\'aptitude n\'est pas concluant: elle est Divergente.'
        ]);

        DB::table('films')->insert([
            'title' => 'A Star Is Born',
            'image' => 'img/films/a-star-is-born.png',
            'realisateur' => 'Bradley Cooper',
            'acteurs' => 'Lady Gaga, Bradley Cooper',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '2018-10-03',
            'description' => 'Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l\'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l\'armée de droïdes de l\'insatiable Fédération du Commerce a envahi Naboo dans le cadre d\'un plan secret des Sith visant à accroître leur pouvoir.',
        ]);

        DB::table('films')->insert([
            'title' => 'Star Wars, épisode I : La Menace fantôme',
            'image' => 'img/films/star-wars-episode-1.png',
            'realisateur' => 'George Lucas',
            'acteurs' => 'Liam Neeson, Ewan McGregor, Natalie Portman, Jake Lloyd, Ian McDiarmid',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '1999-10-13',
            'description' => 'Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l\'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l\'armée de droïdes de l\'insatiable Fédération du Commerce a envahi Naboo dans le cadre d\'un plan secret des Sith visant à accroître leur pouvoir.',
        ]);

        DB::table('films')->insert([
            'title' => 'Star Wars, épisode II : L\'Attaque des clones',
            'image' => 'img/films/star-wars-attaque-des-clones.png',
            'realisateur' => 'George Lucas',
            'acteurs' => 'Ewan McGregor, Natalie Portman, Jake Lloyd, Ian McDiarmid',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '2002-05-17',
            'description' => 'Depuis le blocus de la planète Naboo, la République, gouvernée par le Chancelier Palpatine, connaît une crise. Un groupe de dissidents, mené par le sombre Jedi comte Dooku, manifeste son mécontentement. Le Sénat et la population intergalactique se montrent pour leur part inquiets. Certains sénateurs demandent à ce que la République soit dotée d\'une armée pour empêcher que la situation ne se détériore. Padmé Amidala, devenue sénatrice, est menacée par les séparatistes et échappe à un attentat.',
        ]);

        DB::table('films')->insert([
            'title' => 'Star Wars, épisode III : La Revanche des Sith',
            'image' => 'img/films/star-wars-episode-3.png',
            'realisateur' => 'George Lucas',
            'acteurs' => 'Ewan McGregor, Natalie Portman, Jake Lloyd, Ian McDiarmid',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '2005-05-18',
            'description' => 'La Guerre des Clones fait rage. Une franche hostilité oppose désormais le Chancelier Palpatine au Conseil Jedi. Anakin Skywalker, jeune Chevalier Jedi pris entre deux feux, hésite sur la conduite à tenir. Séduit par la promesse d\'un pouvoir sans précédent, tenté par le côté obscur de la Force, il prête allégeance au maléfique Darth Sidious et devient Dark Vador.Les Seigneurs Sith s\'unissent alors pour préparer leur revanche, qui commence par l\'extermination des Jedi.',
        ]);

        DB::table('films')->insert([
            'title' => 'Midnight Sun',
            'image' => 'img/films/midnight-sun.png',
            'realisateur' => 'Scott Speer',
            'acteurs' => 'Bella Thorne, Rob Riggle, Patrick Schwarzenegger, Quinn Shephard',
            'prix' => '5.99',
            'categorie' => 'Drame',
            'date' => '2018-03-22',
            'description' => 'Katie Price, 17 ans, est une adolescente comme les autres, ou presque. Elle ne peut en aucun cas être exposée à la lumière du jour, sous peine d’en mourir. La journée, elle compose et joue de la guitare, et observe le monde depuis sa chambre, notamment Charlie Reed, son voisin.\r\nÀ la nuit tombée, ses rêves prennent vie ! Elle sort chanter dans la gare près de chez elle. Un soir, elle se retrouve face à Charlie. Lui est instantanément sous le charme et se met en tête de la revoir... Pourront-ils s’aimer au grand jour ?',
        ]);

        DB::table('films')->insert([
            'title' => 'Hatchi',
            'image' => 'img/films/hachiko.png',
            'realisateur' => 'Lasse Hallström',
            'acteurs' => 'Richard Gere, Joan Allen, Sarah Roemer, Erick Avari, Jason Alexander',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '2010-06-09',
            'description' => 'Pour Parker, professeur de musique à l\'université, l\'arrivée du chien Hatchi dans la famille fut un heureux événement. L\'animal prit sa place auprès de chacun, mais c\'est avec Parker qu\'il passait le plus de temps. Chaque matin, le chien accompagnait son maître à la gare où il prenait son train, et chaque soir, l\'animal venait l\'y attendre. Cet attendrissant rituel rythmait la vie de tous ceux qui en étaient témoins.',
        ]);

        DB::table('films')->insert([
            'title' => 'Roméo + Juliette',
            'image' => 'img/films/romeo-juliette.png',
            'realisateur' => 'Baz Luhrmann',
            'acteurs' => 'Leonardo DiCaprio, Claire Danes, John Leguizamo, Harold Perrineau',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '1997-04-09',
            'description' => 'Verona Beach, un quartier de Los Angeles, est le théâtre de la haine entre deux familles ennemies: les Montaigue et les Capulet. A l\'occasion d\'un bal donné chez ces derniers, Romeo et son cousin Mercutio s\'introduisent chez leurs rivaux où le premier tombe amoureux de la belle Juliette qui ne tarde pas non plus à succomber à ses charmes.',
        ]);

        DB::table('films')->insert([
            'title' => 'Titanic',
            'image' => 'img/films/titanic.png',
            'realisateur' => 'James Cameron',
            'acteurs' => 'Leonardo DiCaprio, Kate Winslet',
            'prix' => '5.99',
            'categorie' => 'Drame',
            'date' => '1998-01-07',
            'description' => 'En 1997, l\'épave du Titanic est l\'objet d\'une exploration fiévreuse, menée par des chercheurs de trésor en quête d\'un diamant bleu qui se trouvait à bord. Frappée par un reportage télévisé, l\'une des rescapées du naufrage, âgée de 102 ans, Rose DeWitt, se rend sur place et évoque ses souvenirs. 1912.',
        ]);

        DB::table('films')->insert([
            'title' => 'LA LA LAND',
            'image' => 'img/films/lalaland.png',
            'realisateur' => 'Damien Chazelle',
            'acteurs' => 'Emma Stone, Ryan Gosling',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '2017-01-25',
            'description' => 'Au coeur de Los Angeles, une actrice en devenir prénommée Mia sert des cafés entre des auditions. De son côté, Sebastian, passionné de jazz, joue du piano dans des clubs miteux pour assurer sa subsistance. Tous deux sont bien loin de la vie rêvée à laquelle ils aspirent, mais ils développent des sentiments amoureux l\'un pour l\'autre.',
        ]);


        DB::table('films')->insert([
            'title' => 'LE ROI LION',
            'image' => 'img/films/roi-lion.png',
            'realisateur' => 'Rob Minkoff',
            'acteurs' => 'Donald Glover, Beyoncé Knowles Carter, James Earl Jones, Chiwetel Ejiofor',
            'prix' => '6.99',
            'categorie' => 'Drame',
            'date' => '2018-11-09',
            'description' => 'Un lionceau nommé Simba est exilé de son royaume après avoir été accusé d\'être responsable de la mort de son père, Mufasa. Avec l\'aide d\'un étrange duo composé d\'un suricate et d\'un phacochère, il décide de reprendre ce qui lui revient de droit lorsqu\'il apprend qu\'il est destiné à être roi.',
        ]);

        DB::table('films')->insert([
            'title' => 'Intouchables',
            'image' => 'img/films/intouchable.png',
            'realisateur' => 'Olivier Nakache',
            'acteurs' => 'Omar Sy, François Cluzet, Anne Le Ny, Audrey Fleurot, Clotilde Mollet',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '2011-11-02',
            'description' => 'Tout les oppose et il était peu probable qu\'ils se rencontrent un jour, et pourtant. Philippe, un riche aristocrate devenu tétraplégique après un accident de parapente va engager Driss, un jeune homme d\'origine sénégalaise tout droit sorti de prison, comme auxiliaire de vie à domicile. Pourquoi lui ? Tout simplement parce qu\'il ne regarde pas Philippe avec le même regard de pitié que les autres candidats.',
        ]);

        DB::table('films')->insert([
            'title' => 'Time Out',
            'image' => 'img/films/time-out.png',
            'realisateur' => 'Andrew Niccol',
            'acteurs' => 'Justin Timberlake, Amanda Seyfried, Olivia Wilde, Cillian Murphy, Matthew Bomer',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '2011-11-23',
            'description' => 'Bienvenue dans un monde où le temps a remplacé l\'argent. Génétiquement modifiés, les hommes ne vieillissent plus après 25 ans. A partir de cet âge, il faut gagner du temps pour rester en vie. Alors que les riches, jeunes et beaux pour l\'éternité, accumulent le temps par dizaines d\'années, les autres mendient, volent et empruntent les quelques heures qui leur permettront d\'échapper à la mort. Un homme, accusé à tort de meurtre, prend la fuite avec une otage qui deviendra son alliée.',
        ]);

        DB::table('films')->insert([
            'title' => 'Advengers: Endgame',
            'image' => 'img/films/avengers-endgame.png',
            'realisateur' => 'Anthony Russo',
            'acteurs' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth',
            'prix' => '7.99',
            'categorie' => 'Action',
            'date' => '2019-04-24',
            'description' => 'Le Titan Thanos, ayant réussi à s\'approprier les six Pierres d\'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif de pulvériser la moitié de la population de l\'Univers. Cinq ans plus tard, Scott Lang, alias Ant-Man, parvient à s\'échapper de la dimension subatomique où il était coincé. Il propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs alliés et coéquipiers : récupérer les Pierres d\'Infinité dans le passé.',
        ]);

        DB::table('films')->insert([
            'title' => 'Captain America : Civil War',
            'image' => 'img/films/captain-america-civil-war.png',
            'realisateur' => 'Anthony Russo',
            'acteurs' => 'Chris Evans, Robert Downey Jr., Scarlett Johansson',
            'prix' => '5.99',
            'categorie' => 'Action',
            'date' => '2016-04-27',
            'description' => 'Steve Rogers est désormais à la tête des Avengers, dont la mission est de protéger l\'humanité. À la suite d\'une de leurs interventions qui a causé d\'importants dégâts collatéraux, le gouvernement décide de mettre en place un organisme de commandement et de supervision.\r\nCette nouvelle donne provoque une scission au sein de l\'équipe : Steve Rogers reste attaché à sa liberté de s\'engager sans ingérence gouvernementale, tandis que d\'autres se rangent derrière Tony Stark, qui contre toute attente, décide de se soumettre au gouvernement...',
        ]);

        DB::table('films')->insert([
            'title' => 'Fast & Furious 9',
            'image' => 'img/films/fast-and-furious-9.png',
            'realisateur' => 'Justin Lin',
            'acteurs' => 'Vin Diesel, Michelle Rodriguez, Jordana Brewster',
            'prix' => '7.99',
            'categorie' => 'Action',
            'date' => '2021-07-14',
            'description' => 'Si Dom Toretto mène une vie tranquille, loin du bitume, auprès de Letty et de leur fils, le petit Brian, ils savent bien tous les deux que derrière les horizons les plus radieux se cachent toujours les dangers les plus sournois. Cette fois, pour sauver ceux à qui il tient le plus, Dom va devoir affronter les démons de son passé. Son équipe se rassemble pour démanteler un complot à échelle mondiale mené par le tueur le plus implacable qu’ils aient jamais affronté, aussi redoutable avec une arme que derrière un volant : Un homme qui n’est autre que le frère désavoué de Dom, Jakob.',
        ]);

        DB::table('films')->insert([
            'title' => 'Tick, Tick... Boom!',
            'image' => 'img/films/tick-tick-boom.png',
            'realisateur' => 'Lin-Manuel Miranda',
            'acteurs' => 'Andrew Garfield, Alexandra Shipp, Vanessa Hudgens, Bradley Whitford',
            'prix' => '4.99',
            'categorie' => 'Drame',
            'date' => '2021-11-10',
            'description' => 'En 1990, Jon, un jeune compositeur dans le domaine théâtral, est serveur dans un restaurant de New York pendant qu\'il compose, il espère, ce qui deviendra le prochain musical américain. Quelques jours avant qu\'il ait à performer son chef-d\'oeuvre, ce dernier ressent la pression venant de partout.',
        ]);

        DB::table('films')->insert([
            'title' => 'INTERSTELLAR',
            'image' => 'img/films/interstellar.png',
            'realisateur' => 'Christopher Nolan',
            'acteurs' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
            'prix' => '5.99',
            'categorie' => 'Drame',
            'date' => '2014-11-05',
            'description' => 'Dans un proche futur, la Terre est devenue hostile pour l\'homme. Les tempêtes de sable sont fréquentes et il n\'y a plus que le maïs qui peut être cultivé, en raison d\'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale.',
        ]);
    }
}
