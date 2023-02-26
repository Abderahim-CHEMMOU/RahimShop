<?php

namespace App\Repositories;

use App\Models\Product;

class CartRepository
{
    // pour ajouter un produit en panier
    public function add(Product $product)
    {
        
        \Cart::session(auth()->user()->id)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return $this->count();
    }

    // pour afficher le contenu de panier
    public function content()
    {
        // Récupérer le contenu de panier
        return \Cart::session(auth()->user()->id)
            ->getContent();
    }

    // renvoie la quantité de produits dans notre panier
    public function count()
    {
        return $this->content()->sum('quantity');
    }
}   