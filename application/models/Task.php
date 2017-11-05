<?php

class Task extends Entity{
    
    public function setTask($task){
        if(preg_match('^[a-z A-Z0-9]+$', $task) && 
            strlen($label) < 64){
            return true;            
        } else{
            return false;
        }
    }
    
    public function setStatus($status){
        if(preg_match('^[a-z A-Z0-9]+$', $task) && 
            strlen($label) < 64){
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
        if(is_numeric($priority) && $priority < 4){
            return true;
        } else{
            return false;
        }
    }
    
    public function setGroup($group){
        if(is_numeric($priority) && $priority < 5){
            return true;
        } else{
            return false;
        }
    }
}

?>