<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    public function products()
    { 
        // on récupere les produits de notre commande avec la quantité et le prix total
        return $this->belongsToMany(Product::class)->withPivot('total_quantity', 'total_price');
    }

}
