<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NannyBookingResource extends JsonResource
{
    /**
     * Transform the NannyBooking resource into an array for JSON output.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'start_date_time' => $this->formatDateTime($this->start_date_time),
            'end_date_time' => $this->formatDateTime($this->end_date_time),
            'user' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
        ];
    }

    /**
     * Format date and time.
     *
     * @param  string  $dateTime
     * @return string|null
     */
    private function formatDateTime($dateTime)
    {
        return $dateTime ? now()->parse($dateTime)->format('Y-m-d H:i:s') : null;
    }
}
