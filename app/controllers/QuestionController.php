<?php

class QuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            //response object initialization
            $responseObject = new QuestionListResponseObject();
            $questionResponseObjectList = array();
            
            //fetches all records from database
            $questions = Question::all();
            if(count($questions)>0){
                
                foreach ($questions as $question) {
                    $questionResponseObject = new QuestionRO();
                    //filling response object with data from model
                    $questionResponseObject->fillFromModel($question);
                    $questionResponseObjectList[] = $questionResponseObject;
                }
                $responseObject->questions = $questionResponseObjectList;
                $responseObject->status = 1;
            }else{
                $responseObject->questions = '';
                $responseObject->status = 0;
            }
            
            //converting output to json object and return
            return json_encode($responseObject);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            //Object initialization.
            $responseObject = new QuestionResponseObject();
            $questionResponseObject = new QuestionRO();
            
            
            
            //fetches data from database using Eloquent.
            $question = Question::find($id);
            if($question != null){
                //filling response object with data from model.
                $questionResponseObject->fillFromModel($question);
                $responseObject->question = $questionResponseObject;
                $responseObject->status = 1;
            }  else {
                //Filling with default error response.
                $responseObject->question = '';
                $responseObject->status = 0;
            }
            
            
            //converting output to json object and return.
            return json_encode($responseObject);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
