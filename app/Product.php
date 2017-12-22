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

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function hasAttributes() {
        return $this->attributes()->first() != null ? true : false;
    }

    public function getAttributes() {
        return $this->attributes()->get();
    }

    public function hasImages() {
        return $this->images()->first() != null ? true : false;
    }

    public function getImages() {
        return $this->images()->get();
    }

}
