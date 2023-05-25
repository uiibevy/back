<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\identity */
class identityResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'birthday' => $this->birthday,
            'job' => $this->job,
            'company' => $this->company,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
