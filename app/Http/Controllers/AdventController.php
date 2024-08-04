<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DayRepository;

class AdventController extends Controller
{
    public function __construct(protected DayRepository $dayRepository)
    {
    }

    public function advent()
    {
        $Days = $this->dayRepository->getAdvents();

        return view('index', ['Days' => $Days]);
    }
    public function show()
    {
         return view('modalWindow.subs');
    }
    public function gift($id)
    {
        $day = $this->dayRepository->getAdvent($id);
        return [$day->day, $day->name, $day->description, $day->longread];
    }
}
