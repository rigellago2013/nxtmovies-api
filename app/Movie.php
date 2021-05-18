<?php

namespace App;

use Impulse\Pulsifier\Helpers\Seek;
use Impulse\Pulsifier\Model\BaseModel;

class Movie extends BaseModel
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        /*
            Search is optional, if set this will add search function to your controller
        */
        $this->searchable = [];
    }


    /*Regular fillable attribute inhereted from Eloquent*/
    protected $fillable = [
        'code',
        'name',
        'product_category_id',
        'unit_id'
    ];
}
