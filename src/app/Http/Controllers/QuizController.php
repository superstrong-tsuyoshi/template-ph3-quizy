<?php

namespace App\Http\Controllers;

use App\Models\Question;#このファイル内での呼び名
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index(){
        $user = Auth::user();
        // functionの後ろにあるものを@の後ろに書いていく
        return view('list', $user);
        // viewsの中にあるquizから始まるファイル名を引っ張ってくる
    }
    public function indexquiz($id){
        $questions = Question::where('bigquestion_id', $id)->get();#getは忘れないようにしよう
        #idがそのままweb.phpから入ってくるよ. ,はイコールと同義
        $choices = DB::table('choices')->join('questions', 'choices.question_id', '=', 'questions.id')->select('choices.*', 'questions.*')->get();#前半で指定して後半で処理をかく取得するときはget
        #joinはイコールの左に結合の対象のテーブルのカラム名、右にはテーブル名.カラム名
        return view('quiz2', ['questions' => $questions, 'choices' => $choices]);
    }
    
}
