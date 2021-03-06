<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mcq;
use App\McqAnswer;

class mcqController extends Controller
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
    public function create($id)
    {
        return view('admin.mcq.add',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $mcq = new Mcq();
        $mcq->paper_id = $request->paper_id;
        $mcq->description = $request->description;
        $mcq->marks = $request->marks;
        $mcq->save();
        $count=1;
        foreach($request->answers as $answer){
            $mcq_answer = new McqAnswer();
            $mcq_answer->answer = $answer;
            $mcq_answer->mcq_id = $mcq->id;
            ($count==$request->answer)? $mcq_answer->status = 1:$mcq_answer->status=0;
            $mcq_answer->save();
            $count+=1;
        }
        $redirect = "/admin/institute/papers/".$request->paper_id;
        return redirect($redirect);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mcq $mcq)
    {
        return view('admin.mcq.show',compact('mcq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcq $mcq)
    {
        $answers = $mcq->answers;
        $answer1 = $answers[0];
        $answer2 = $answers[1];
        $answer3 = $answers[2];
        $answer4 = $answers[3];

        return view('admin.mcq.edit',compact('mcq','answer1','answer2','answer3','answer4'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Mcq $mcq)
    {
        $answers = $mcq->answers;
        $mcq->description = $request->description;
        $mcq->marks = $request->marks;
        $mcq->save();
//        dd($request->answers[0]);
        $answers[0]->answer = $request->answers[0];
        $answers[0]->status = 0;
        $answers[1]->answer = $request->answers[1];
        $answers[1]->status = 0;
        $answers[2]->answer = $request->answers[2];
        $answers[2]->status = 0;
        $answers[3]->answer = $request->answers[3];
        $answers[3]->status = 0;
        $answers[$request->answer-1]->status=1;
        $answers[0]->save();
        $answers[1]->save();
        $answers[2]->save();
        $answers[3]->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
