<?php

namespace App\Http\Controllers;

use App\Models\SkillTest;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！
use Auth; //これが新規追加

class SkillTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('skill_test.index');
        
                 //自分のuser_idが付与されている投稿だけ取得する
        $skill_tests = SkillTest::where('user_id',Auth::id())->get();
        return view('skill_test.index', [
            'skill_tests' => $skill_tests
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        
        //バリデーション
        $validator = Validator::make($request->all(), [
             'question1' => 'required',
            //  'question2' => 'required',
            //  'question3' => 'required',
            //  'question4' => 'required',
            //  'question5' => 'required',
        
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/skill_test')
                ->withInput()
                ->withErrors($validator);
        }
    
        //以下に登録処理を記述（Eloquentモデル）
    	  // Eloquentモデル
    	  $skill_test = new SkillTest;
    	  $skill_test->question  = $request->question1;
    	  $skill_test->answer  = $request->answer1;
    	  $skill_test->user_id = Auth::id();//ここを追加
    	  $skill_test->save(); 
    	  
    	  $skill_test = new SkillTest;
    	  $skill_test->question  = $request->question2;
    	  $skill_test->answer  = $request->answer2;
    	  $skill_test->user_id = Auth::id();//ここを追加
    	  $skill_test->save(); 
    	  
    	  $skill_test = new SkillTest;
    	  $skill_test->question  = $request->question3;
    	  $skill_test->answer  = $request->answer3;
    	  $skill_test->user_id = Auth::id();//ここを追加
    	  $skill_test->save(); 
    	  
    	  $skill_test = new SkillTest;
    	  $skill_test->question  = $request->question4;
    	  $skill_test->answer  = $request->answer4;
    	  $skill_test->user_id = Auth::id();//ここを追加
    	  $skill_test->save(); 
    	  
    	  $skill_test = new SkillTest;
    	  $skill_test->question  = $request->question5;
    	  $skill_test->answer  = $request->answer5;
    	  $skill_test->user_id = Auth::id();//ここを追加
    	  $skill_test->save(); 

    // 	  $skill_test->question2  = $request->question2;
    // 	  $skill_test->question3  = $request->question3;
    // 	  $skill_test->question4  = $request->question4;
    // 	  $skill_test->question5  = $request->question5;
    // 	  $books->item_number = $request->item_number;
    // 	  $books->item_amount = $request->item_amount;
    // 	  $books->published   = $request->published;
    // 		$books->user_id = Auth::id();//ここを追加
    	  return redirect('/skill_test'); // /skill_testここで回答画面に飛ばすorプロフィールに飛ばす
    // 	  return redirect('/skill_test'); // /skill_testここで回答画面に飛ばすorプロフィールに飛ばす

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function show(SkillTest $skillTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SkillTest $skillTest)
    {
        $skill_tests = SkillTest::where('user_id',Auth::id())->get();
        return view('profile.edit', [
            'user' => $request->user(),
            'skill_tests' => $skill_tests
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillTest $skillTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillTest $skillTest)
    {
        //
    }
}
