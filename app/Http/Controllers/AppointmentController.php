<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {  
        $validated = $request->validate([
            'frequency' => 'required|string|in:Recurring,One Time',
            'start_date' => 'required|date|after_or_equal:today',
            'days' => 'required|array|min:1',
            'days.*' => 'in:Mon,Tue,Wed,Thu,Fri,Sat,Sun',
            'times' => 'required|array|min:1',
            'times.*' => 'in:Morning,Afternoon,Evening',
            'notes' => 'nullable|string|max:500',
        ]); 

        Appointment::create([
            'frequency' => $validated['frequency'],
            'start_date' => $validated['start_date'],
            'days' => implode(',', $validated['days']),
            'times' => implode(',', $validated['times']),
            'notes' => $validated['notes'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
