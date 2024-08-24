<?php

namespace App\Http\Controllers;

use App\Models\OpenGift;
use App\Models\Visit;
use App\Repositories\TitleRepository;
use Illuminate\Http\Request;
use App\Models\Day;
use App\Repositories\DayRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AdventController extends Controller
{
    public function __construct(protected DayRepository $dayRepository, protected TitleRepository $titleRepository)
    {
    }

    public function advent()
    {
        $Days = $this->dayRepository->getAdvents();
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();
        $head_title = $this->titleRepository->getTitle('head_title');
        $head_moto = $this->titleRepository->getTitle('head_moto');
        $head_description = $this->titleRepository->getTitle('head_description');
        $head_name = $this->titleRepository->getTitle('head_name');

        return view('index', ['Days' => $Days, 'Count' => $Visit->Count, 'head_title' => $head_title, 'head_moto' => $head_moto, 'head_description' => $head_description, 'head_name' => $head_name]);
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
        if (Auth::check()) {
            $user = Auth::user();
            $openGift = OpenGift::firstOrCreate([
                'name' => $user->email,
                'day' => $day->day,
            ]);
        }

        return [$day->day, $day->name, nl2br($day->description), $day->longread, $image, $day->button];
    }
    public function longread($id)
    {
        $Visit = Visit::firstOrCreate([]);
        $Visit->Count = ($Visit->Count ?? 0) + 1;
        $Visit->save();
        $day = $this->dayRepository->getAdvent($id);
        $image = $day->getDayImage();
        if($image == null)
        {
            $image="";
        }
        else
        {
            $image = $image->getUrl();
        }
        return response()->view('longread', ['day' => $day->day, 'name' => $day->name, 'longread' => $day->longread, 'Count' => $Visit->Count, 'image' => $image]);
    }
}
