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
}
