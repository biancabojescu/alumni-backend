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

    public function scopeFilterByAnAlumnizare($query, $anul_alumizarii) {
        return $query->where('anul_alumizarii', '=', $anul_alumizarii);
    }
}
