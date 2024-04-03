<?php 

require_once __DIR__ . '/../app/Models/Movie.php';
require_once __DIR__ . '/../app/Models/Genre.php';

$movies = [

    new Movie("Il Signore degli Anelli ", "Il Signore degli Anelli narra della missione di nove personaggi che compongono la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che potrebbe rendere invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.", 726,
    
    [
        "Elijah Wood",
        "Ian McKellen",
        "Ian Holm",
        "Christopher Lee",
        "Liv Tyler",
        "Sean Bean",
        "Cate Blanchett",
        "Sean Astin",
        "Orlando Bloom",
        "Billy Boyd",
        "Dominic Monaghan",
        "Viggo Mortensen",
        "John Rhys-Davies",
        "Andy Serkis",
        "Hugo Weaving",
        "Marton Csokas"
    ],
    [new Genre('Fantasy', 'molto.fantasy')]
), 
    new Movie('Titanic', "Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall'Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.", 194,
    
    [
        "Leonardo DiCaprio",
        "Kate Winslet",
        "Billy Zane",
        "Kathy Bates",
        "Frances Fisher",
        "Bernard Hill",
        "Jonathan Hyde",
        "Danny Nucci",
        "David Warner",
        "Bill Paxton"
    ],
    [new Genre('Molto Drammatico', 'molto.drammatico')]
),
new Movie("Spider-Man  ", "Il morso di un ragno mutante dona degli incredibili, e inaspettati, poteri al giovane Peter Parker, che li usa nella guerra contro un minaccioso nemico.", 121,
    
    [
        "Tobey Maguire",
        "Willem Dafoe",
        "Kirsten Dunst",
        "James Franco",
        "Cliff Robertson",
        "Rosemary Harris"
    ],
    [new Genre('Fantasy', 'molto.fantasy')]
), 
];


?>