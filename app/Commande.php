<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class commande extends Pivot
{
  public function livraison()
  {
    return $this->belongsTo(livraison::class);
  }
}
