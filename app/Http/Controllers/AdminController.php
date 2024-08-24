<?php

namespace App\Http\Controllers;

use App\Models\OpenGift;
use App\Models\Title;
use App\Repositories\DayRepository;
use App\Repositories\TitleRepository;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use App\Models\Day;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct(protected DayRepository $dayRepository, protected TitleRepository $titleRepository)
    {
    }

    public function admin()
    {
        $days = $this->dayRepository->getAdvents();

        $head_title = $this->titleRepository->getTitle('head_title');
        $head_moto = $this->titleRepository->getTitle('head_moto');
        $head_description = $this->titleRepository->getTitle('head_description');
        $head_name = $this->titleRepository->getTitle('head_name');

        return view('admin.dayslist', ['Days' => $days, 'head_title' => $head_title, 'head_moto' => $head_moto, 'head_description' => $head_description, 'head_name' => $head_name]);
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

    public function titleedit(Request $request)
    {
        Title::query()->where('name', 'head_title')->update(['value' => $request->input('head_title')]);
        Title::query()->where('name', 'head_moto')->update(['value' => $request->input('head_moto')]);
        Title::query()->where('name', 'head_description')->update(['value' => $request->input('head_description')]);
        Title::query()->where('name', 'head_name')->update(['value' => $request->input('head_name')]);
        return redirect()->route('index');
    }

    public function cleanhistory(Request $request)
    {
        OpenGift::truncate();
        return redirect()->route('index');
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
