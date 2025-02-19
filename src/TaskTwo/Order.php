<?php

namespace DevTask\TaskTwo;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @return BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo('App\Manager');
    }

    // Accessor для вывода полного имени менеджера
    /**
     * @return string|null
     */
    public function getManagerFullNameAttribute()
    {
        return $this->manager
            ? $this->manager->firstName . ' ' . $this->manager->lastName
            : '';
    }
}
