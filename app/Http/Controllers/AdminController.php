<?php

namespace App\Http\Controllers;

use App\Repositories\DayRepository;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use App\Models\Day;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        return [$day->day, $day->name, $day->description, $day->longread, $day->button];
    }

    public function editconfirm(Request $request, Day $day)
    {
        $day = Day::find($request->input('day'));
        $day->name = $request->input('name');
        $day->description = $request->input('description');
        $day->longread = $request->input('longread');
        $day->button = $request->input('button');
        if($request->hasFile('image')){
            $day->media()->delete();
            $day->addMediaFromRequest('image')->toMediaCollection('day');
        }
        $result = $day->save();
        return ($result);
    }



    public function test(Day $day)
    {
//        $day = new Day();
        $day->day = "32";
        $day->name = '666';
        $day->save();
        return redirect()->back()->withSuccess('Запись была успешно добавлена');
    }
}
