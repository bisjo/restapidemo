<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Question extends Eloquent  {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
        protected $collection = 'questions';
        protected $connection = 'mongodb';

	public function getIdAttribute($value)
        {
            return ($value);
        }
        public function setIdAttribute($value)
        {
            $this->attributes['_id'] = ($value);
        }
	public function getTITLEAttribute($value)
        {
            return ($value);
        }
        public function setTITLEAttribute($value)
        {
            $this->attributes['TITLE'] = ($value);
        }
	public function getAUTHORAttribute($value)
        {
            return ($value);
        }
        public function setAUTHORAttribute($value)
        {
            $this->attributes['AUTHOR'] = ($value);
        }
	public function getDESCRIPTIONAttribute($value)
        {
            return ($value);
        }
        public function setDESCRIPTIONAttribute($value)
        {
            $this->attributes['DESCRIPTION'] = ($value);
        }
	public function getSTARTDATEAttribute($value)
        {
            return ($value);
        }
        public function setSTARTDATEAttribute($value)
        {
            $this->attributes['STARTDATE'] = ($value);
        }
	public function getENDDATEAttribute($value)
        {
            return ($value);
        }
        public function setENDDATEAttribute($value)
        {
            $this->attributes['ENDDATE'] = ($value);
        }
	public function getSTATUSAttribute($value)
        {
            return ($value);
        }
        public function setSTATUSAttribute($value)
        {
            $this->attributes['STATUS'] = ($value);
        }
	public function getQUESTIONIDAttribute($value)
        {
            return ($value);
        }
        public function setQUESTIONIDAttribute($value)
        {
            $this->attributes['QUESTIONID'] = ($value);
        }
}
