<?php

namespace App\Http\Resources;

use App\Models\Pet;
use App\Models\User;
use App\Models\Vet;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $vet = Vet::findOrFail($this->vet_id);
        $vetUser = User::findOrFail($vet->user_id);

        $pet = Pet::findOrFail($this->pet_id);

        return [
            'id' => $this->id,
            'pet' => $pet,
            'vet' => $vetUser,
            'app_date' => $this->app_date,
            'reason' => $this->reason,
            'status' => $this->status,
        ];
    }
}
