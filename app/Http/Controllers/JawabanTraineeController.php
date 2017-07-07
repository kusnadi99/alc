<?php

namespace App\Http\Controllers;

use App\JawabanTrainee;
use App\Test;
use App\Question;
use App\OpsiJawaban;
use App\UserTest;
use App\SectionTraining;
use Illuminate\Http\Request;

class JawabanTraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this -> validate($request, [
            'id_user' => 'required',
            'id_test' => 'required',
        ]);

        $question = Question::where('id_test', $request->id_test)->get();
        $test = Test::find($request->id_test);
        $section = SectionTraining::find($test->id_section_training);
        $benar = 0;
        foreach ($question as $key => $value) {
            $jawaban = new JawabanTrainee;
            $jawaban->id_user = $request->id_user;
            $jawaban->id_question = $value->id;
            $jawaban->isi_jawaban = $request->$value['id'];
            $opsi = OpsiJawaban::find($jawaban->isi_jawaban);
            if ($opsi->is_true == 1) {
                $jawaban->skor = 1;
                $benar += 1;
            }else{
                $jawaban->skor = 0;
            }
            $jawaban->save();
        }
        $skor = ($benar/$test->jumlah_soal)*100;
        if ($section->id_type == 1) {
            $user_test = new UserTest;
            $user_test->id_user = $request->id_user;
            $user_test->id_training = $section->id_training;
            $user_test->id_pre_test = $request->id_test;
            $user_test->pre_test_score = $skor;
            $user_test->save();
        }elseif ($section->id_type ==3) {
            # code...
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function show(JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function edit(JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JawabanTrainee $jawabanTrainee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JawabanTrainee  $jawabanTrainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(JawabanTrainee $jawabanTrainee)
    {
        //
    }
}
