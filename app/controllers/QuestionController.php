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
            $string = "Éric Cantona";
            $strict = strtolower($string);

            $a = "After Lower: ".$strict;

            $patterns[0] = '/[á|â|à|å|ä]/';
            $patterns[1] = '/[ð|é|ê|è|ë]/';
            $patterns[2] = '/[í|î|ì|ï]/';
            $patterns[3] = '/[ó|ô|ò|ø|õ|ö]/';
            $patterns[4] = '/[ú|û|ù|ü]/';
            $patterns[5] = '/æ/';
            $patterns[6] = '/ç/';
            $patterns[7] = '/ß/';
            $replacements[0] = 'a';
            $replacements[1] = 'e';
            $replacements[2] = 'i';
            $replacements[3] = 'o';
            $replacements[4] = 'u';
            $replacements[5] = 'ae';
            $replacements[6] = 'c';
            $replacements[7] = 'ss';

            $strict = preg_replace($patterns, $replacements, $strict);
            $b = "Final: ".$strict;
            
            $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
            $str = strtr( $string, $unwanted_array );
            
//            return $a .'<br />'.$b;
            return $str;
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
