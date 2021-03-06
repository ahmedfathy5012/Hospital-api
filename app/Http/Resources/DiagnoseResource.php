<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DiagnoseResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'diagnose'=>$this->diagnose,
            'drugs'=>$this->drugs,
            'doctor_id'=>$this->doctor_id,
            'patient_case_id'=>$this->patient_case_id,
            'doctor_name'=>$this->doctor->show_name(),
            'patient_name'=>$this->patient_case->patient->show_name(),
        ];
    }
}
