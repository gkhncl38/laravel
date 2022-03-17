<?php
namespace App\Models\Traits;


use Illuminate\Database\Eloquent\Model;

use Ramsey\Uuid\Uuid;


trait HasUniqueIdentifier{

public static function boot()

{
    parent::boot();

    static::creating(function (Model $model) {


        $model->setKeyType('string');

        $model->setIncrementing(false);

        $model->setAttribute($model->getKeyName(), Uuid::uuid4());

    });
}

}
