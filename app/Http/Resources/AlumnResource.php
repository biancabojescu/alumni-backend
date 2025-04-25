<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnResource extends JsonResource {
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'nume' =>$this->nume,
            'generatie' => $this->generatie,
            'anul_alumnizarii' =>$this->anul_alumnizarii,
            'activitati' => $this->activitati,
            'testimonial' => $this->testimonial,
            'acord_puublicare'=> $this->acord_publicare,
        ];
    }
}
