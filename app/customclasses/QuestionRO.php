<?php

/**
 * Class to format model into a user understandable response.
 *
 * @author user
 */
class QuestionRO {
    
    public $ID;
    public $TITLE;
    public $AUTHOR;
    public $DESCRIPTION;
    public $STARTDATE;
    public $ENDDATE;
    public $STATUS;
    public $QUESTIONID;

    
    //getters and setters
    function getID() {
        return $this->ID;
    }

    function getTITLE() {
        return $this->TITLE;
    }

    function getAUTHOR() {
        return $this->AUTHOR;
    }

    function getDESCRIPTION() {
        return $this->DESCRIPTION;
    }

    function getSTARTDATE() {
        return $this->STARTDATE;
    }

    function getENDDATE() {
        return $this->ENDDATE;
    }

    function getSTATUS() {
        return $this->STATUS;
    }

    function getQUESTIONID() {
        return $this->QUESTIONID;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setTITLE($TITLE) {
        $this->TITLE = $TITLE;
    }

    function setAUTHOR($AUTHOR) {
        $this->AUTHOR = $AUTHOR;
    }

    function setDESCRIPTION($DESCRIPTION) {
        $this->DESCRIPTION = $DESCRIPTION;
    }

    function setSTARTDATE($STARTDATE) {
        $this->STARTDATE = $STARTDATE;
    }

    function setENDDATE($ENDDATE) {
        $this->ENDDATE = $ENDDATE;
    }

    function setSTATUS($STATUS) {
        $this->STATUS = $STATUS;
    }

    function setQUESTIONID($QUESTIONID) {
        $this->QUESTIONID = $QUESTIONID;
    }
    
    public function fillFromModel(Question $question){
        
        $this->AUTHOR = $question->AUTHOR;
        $this->DESCRIPTION = $question->DESCRIPTION;
        $this->ENDDATE = $question->ENDDATE;
        foreach ($question->_id as $value) {
            $this->ID = $value;
            break;
        }
        $this->QUESTIONID = $question->QUESTIONID;
        $this->STARTDATE = $question->STARTDATE;
        $this->TITLE = $question->TITLE;
        $this->STATUS = $question->STATUS;
    }



}
