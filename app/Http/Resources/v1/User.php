<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
             'name' => $this->name,
             'email' => $this->email,
             'age' => $this->age,
             'api_token' =>'sadesfeasf'
         ];
    }
}
