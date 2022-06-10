<?php


class Program
{
    // le stock sous forme d'une collection d'articles
    public array $stock = [];
    // 2. Ajouter un article au stock en vérifiant l'unicité de la référence
    public function adArticle($article)
    {
        if ($this->searchArticle($article->ref) === false) {
            array_push($this->stock, $article);
            echo 'Article ajouté avec succès';
        } else {
            echo 'La référence de l\'article ' .  $article->ref . ' existe déjà';
        }
    }



    //1. Rechercher un article par référence 
    public function searchArticle($ref)
    {
        foreach ($this->stock as $article) {

            // recuperer propriété d'un objet
            //var_dump($article->ref);
            if ($article->ref === $ref) {

                return $article;
            }
        }
        // si la boucle ne return rien (null) la ref n'exciste pas, on retourne false
        return false;
    }

    //3. Supprimer un article par référence
    public function deleteArticle($ref)
    {
        $article = $this->searchArticle($ref);
        // si l'article a une ref donc different de false 
        if ($article !== false) {
            // on cherche sa clef pour la supprimer 
            $key = array_search($ref, array_column($this->stock, 'ref'));
            unset($this->stock[$key]);
        }
    }
    // 4. Modifier un article par référence 
    public function editArticle($ref, $name, $price, $quantity)
    {
        $article = $this->searchArticle($ref);
        if ($article !== false) {

            $article->name = $name;
            $article->price = $price;
            $article->quantity = $quantity;
        }

        // afficher les données de l'article 
        var_dump($article);
    }

    // 5. Rechercher un article par nom 
    public function searchArticleByName($name)
    {
        foreach ($this->stock as $article) {

            // recuperer propriété d'un objet
            if ($article->name === $name) {

                return $article;
            }
        }
        // si la boucle ne return rien (null) la ref n'exciste pas, on retourne false
        return false;
    }
    // 6. Rechercher un article par intervalle de prix de vente 


    public function searchByPriceInterval($min_price, $max_price)
    {
        $interval = [];
        // afficher tout les articles entre $min_price et $max_price
        // je parcours mon stock
        foreach ($this->stock as $article) {

            // si $article supérieur égale à $min_price je les affiches
            if (($article->price >= $min_price) && ($article->price <= $max_price)) {
                array_push($interval, $article);
            }
        }
        var_dump($interval);
        return $interval;
    }

    //7. Afficher tous les articles 
    public function tousLesArticles()
    {
        echo  " Voici les articles en stock:</br>";
        foreach ($this->stock as $article) {
            echo " $article->quantity  $article->name de $article->price €. </br>";
        }
    }
}
