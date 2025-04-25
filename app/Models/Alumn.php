<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumn extends Model {
    protected $table = 'alumni';
    protected $fillable = [
        "nume",
        "generatie",
        "anul_alumnizarii",
        "activitati",
        "testimonial",
        "acord_publicare"
    ];

    public function scopeFilterByAcord($query, $acord_publicare) {
        return $query->where('acord_publicare', '=', $acord_publicare);
    }

    public function scopeFilterByAnAlumnizare($query, $anul_alumnizarii) {
        return $query->where('anul_alumnizarii', '=', $anul_alumnizarii);
    }
}
