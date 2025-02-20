<?php
declare(strict_types=1);

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
    public function getManagerFullNameAttribute(): ?string
    {
        return $this->manager
            ? $this->manager->firstName . ' ' . $this->manager->lastName
            : '';
    }
}
