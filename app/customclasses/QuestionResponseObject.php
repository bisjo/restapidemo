<?php

/**
 * Class for setting response of a single value.
 *
 * @author user
 */
class QuestionResponseObject {
    
    public $status;
    public $question;
    
    //getters and setters
    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getQuestion() {
        return $this->question;
    }

    function setQuestion($question) {
        $this->question = $question;
    }


    

}
