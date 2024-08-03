<?php

namespace App\Http\Controllers;

use App\Repositories\DayRepository;

class AdminController extends Controller
{
    public function __construct(protected DayRepository $dayRepository)
    {
    }

    public function admin()
    {
        $days = $this->dayRepository->getAdvents();

        return view('admin.dayslist', ['Days' => $days]);
    }

    public function edit($id)
    {
        $day = $this->dayRepository->getAdvent($id);
        return view('admin.editform', ['Day' => $day]);
    }
}
