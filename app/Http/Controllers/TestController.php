<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function chrt()
    {
        return 'Я люблю учится в ЧРТ';
    }

    public function lessonOne()
    {
        return 'Моя первая программа';
    }

    public function lessonTow(Request $request)
    {
        $data = [];
        if ($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }

    public function ivan(Request $request)
    {
        $name = $request->name;
        return 'Меня зовут ' . $name;
    }

    public function ivan1(Request $request)
    {
        $name = $request->name;
        $fruit = $request->fruit;
        return 'Меня зовут ' . $name . ' и я люблю есть ' . $fruit;
    }
    public function chisla()
    {
        $ch1 = 30;
        $ch2 = 40;
        $ch3 = $ch1 + $ch2;
        return $ch3;
    }
    public function chisla1(Request $request)
    {
        $ch1 = $request->ch1;
        $ch2 = $request->ch2;
        $ch3 = $ch1 + $ch2;
        return $ch3;
    }
    public function shifr(Request $request)
    {
        $vzlom = 'Я взломал шифр';
        $shif = $request->cipher;
        if($shif == 'keyOneTest') {
            return $vzlom;
        }
        else
        {
            return 'Нет доступа';
        }
    }
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }
}
