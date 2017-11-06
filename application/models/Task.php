<?php

require_once '../application/core/Entity.php';


class Task extends Entity{
    
    public function setTask($task){
        if(preg_match('^[a-z A-Z0-9]+$', $task) && 
            strlen($task) <= 64){
            return true;            
        } else{
            return false;
        }
    }
    
    public function setStatus($status){
        if(preg_match('^[a-z A-Z0-9]+$', $status) &&
            strlen($status) <= 64){
            return true;            
        } else{
            return false;
        }
    }
    
    public function setPriority($priority){
        if(is_numeric($priority) && $priority < 4){
            return true;
        } else{
            return false;
        }
    }
    
    public function setSize($size){
        if(is_numeric($size) && $size < 4){
            return true;
        } else{
            return false;
        }
    }
    
    public function setGroup($group){
        if(is_numeric($group) && $group < 5){
            return true;
        } else{
            return false;
        }
    }
}

?>