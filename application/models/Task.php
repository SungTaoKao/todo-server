<?php

require_once '../application/core/Entity.php';


class Task extends Entity{
    
    protected $task;
    protected $status;
	protected $priority;
	protected $size;
	protected $group;
    
    public function setTask($value){
        if((preg_match('/^[a-z A-Z0-9]+$/', $value) === 1) &&
            (strlen($value) < 65)){
            $this->task = $value;
            return true;
        } else{
            return false;
        }
    }
    
    public function setStatus($value){
        if((preg_match('/^[a-z A-Z0-9]+$/', $value) === 1) &&
            (strlen($value) < 65)){
            $this->status = $value;
            return true;            
        } else{
            return false;
        }
    }
    
    public function setPriority($value){
        if(is_numeric($value) && $value < 4){
            $this->priority = $priority;
            return true;
        } else{
            return false;
        }
    }
    
    public function setSize($value){
        if(is_numeric($value) && $value < 4){
            $this->size = $value;
            return true;
        } else{
            return false;
        }
    }
    
    public function setGroup($value){
        if(is_numeric($value) && $value < 5){
            $this->group = $value;
            return true;
        } else{
            return false;
        }
    }
}

?>