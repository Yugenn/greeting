<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function result($greeting)
    {
        $result = '';

        
        if ($greeting == 'random') {
            $hash = array('おはよう', 'こんにちは', 'こんばんは','おやすみ');
            $key = array_rand($hash);
            $result = 'ランダムなメッセージ';
            $comment = $hash[$key];
        } elseif($greeting == 'morning') {
            $result = '朝のあいさつ';
            $comment ='おはようございます';
        } elseif ($greeting == 'afternoon') {
            $result = '昼のあいさつ';
            $comment ='こんにちは';
        } elseif ($greeting == 'evening') {
            $result = '夕方のあいさつ';
            $comment ='こんばんは';
        } elseif ($greeting == 'night') {
            $result = '夜のあいさつ';
            $comment ='おやすみ';
        } else {
            $result ='入力名を確認してください';
            $comment ='';
        } 
        
        return view('message.simple', [
            'result' => $result,
            'comment' => $comment
        ]);
    }




}
