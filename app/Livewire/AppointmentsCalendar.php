<?php

namespace App\Livewire;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use App\Models\Events;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events(): \Illuminate\Support\Collection
    {
        return Events::query()
        ->whereDate('date', '>=', $this->gridStartsAt)
        ->whereDate('date', '<=', $this->gridEndsAt)
        ->get()
        ->map(function (Events $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => $model->description,
                'date' => $model->date,
            ];
        });
    }

}

