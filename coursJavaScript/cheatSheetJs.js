/* FICHE DE COURS JS

Les objets

ecrit en JSON ( JavaScript Object Notation)
Serie de paires de clés-valeurs séparées par des VIRGULES entre accolades
exemple : */

let myBook = {
    title: 'The Story of Tau',
    author: 'Will Alexander',
    numberOfPages: 250,
    isAvailable: true
};

/* Notation pointée

Nous sert à acceder aux données enregistrées
exemple :*/

let myBook = {
    title: "L'Histoire de Tao",
    author: "Will Alexander",
    numberOfPages: 250,
    isAvailable: true
};
let bookTitle = myBook.title; // "L'Histoire de Tao"
let bookPages = myBook.numberOfPages // 250

/*
!!!! attention ici on utilise le point non PAS pour concaténer
!!!!! On utilise le . pour accéder aux propriétés d'un objet
!!!!! "." en JS et "->" en PHP

Notation bracket " [] "

Nous sert a acceder a un sous élément
let propertyToAccess = "title";
let bookTitle = myBook[propertyToAccess]; // "L'Histoire de Tao"


        Les classes

c'est un modèles pour un objet dans le code
Elle permet de construire plusieurs objets du même type
exemple : */

class Book {
    constructor(title, author, pages) {
        this.title = title;
        this.author = author;
        this.pages = pages;
    }
}

// une fois que la classe est crée, l'on peut créer des instances
// Grace a " new"
let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);
//Cette ligne crée l'objet suivant :
{
    title: "L'Histoire de Tao",
        author: "Will Alexander",
            pages: 250
}

// Travail sur les tableaux : 

//On peut faire appel a une propriété grace au "."
// exemple : 
let guests = ["Will Alexander", "Sarah Kate", "Audrey Simon"];
let howManyGuests = guests.length; // 3
/* Quelques propriétés : 
Pour AJOUTER un element a la FIN du tableau : push
Pour AJOUTER un element au DEBUT : unshift
Pour SUPP le DERNIER element : pop()   sans passer d'argument 
Exemple : */
let episodes = [];
episodes.push(firstEpisode, secondEpisode, thirdEpisode, thirdEpisode);

episodes.pop();

let numberOfEpisodes = episodes.length;

/*
== ou ===  

        Egalite SIMPLE ou STRICTE

SIMPLE : verifie la VALEUR mais pas le type 
STRICTE : verifie la VELEUR et le TYPE 

De même pour  != ou !== 
controle la diff des VALEURS ou la diff des VALEUR et TYPE


        La portée de variables :

Les variables déclarées en var ont une portée au delas des blocs 
--> "function scope" = PORTEE LOCALE

Les constantes const et
Les variables déclarées en let ont une portée restreinte aux blocs 
--> "bloc scope" = PORTEE GLOBALE */


passager.foreach(function (element) {
    console.log("embarquement de" + element.name)
}
)
