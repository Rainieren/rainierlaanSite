<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanPerk extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
