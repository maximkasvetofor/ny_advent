<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Models\Day;
use App\Repositories\DayRepository;

class AdventController extends Controller
{
    public function __construct(protected DayRepository $dayRepository)
    {
    }

    public function advent()
    {
        $Days = $this->dayRepository->getAdvents();
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();

        return view('index', ['Days' => $Days, 'Count' => $Visit->Count]);
    }
    public function show()
    {
         return view('modalWindow.subs');
    }
    public function gift($id)
    {
        $day = $this->dayRepository->getAdvent($id);
//        $imageData = $day->Day::getDayImage();
//        $encodedImageData = base64_encode($imageData);
        $image = $day->getDayImage();
        if($image == null)
        {
            $image="";
        }
        else
        {
            $image = $image->getUrl();
        }
        return [$day->day, $day->name, $day->description, $day->longread, $image, $day->button];
    }
    public function longread($id)
    {
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();
        $day = $this->dayRepository->getAdvent($id);
        return response()->view('longread', ['day' => $day->day, 'name' => $day->name, 'longread' => $day->longread, 'Count' => $Visit->Count]);
    }
}
