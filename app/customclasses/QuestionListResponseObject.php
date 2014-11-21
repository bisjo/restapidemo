<?php


/**
 * Class for setting response of a list of values
 *
 * @author user
 */
class QuestionListResponseObject {
    
    public $status;
    public $questions;
    
    //getters and setters
    function getStatus() {
        return $this->status;
    }

    function getQuestions() {
        return $this->questions;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setQuestions($questions) {
        $this->questions = $questions;
    }


    

}
