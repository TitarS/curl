<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;
    public $translationModel = 'App\ProductTranslation'; //??Працює й без нього??
    protected $fillable = ['menu_id', 'image_main', 'video', 'link_360'];
    public $translatedAttributes = [
        'title',
        'slug',
        'content',
        'content_top',
        'description'
    ];

    public function attributes() {
        return $this->hasMany(Attribute::class);
    }

    public function getAttributes() {
        if($this->attributes()->get()->isNotEmpty()) {
            return $this->attributes()->get();
        }
        return false;
    }

}
