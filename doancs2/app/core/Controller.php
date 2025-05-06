<?php
class Controller{
    
    public function Model($model){
        if(file_exists(_DIR_ROOT.'/app/models/'.$model.'.php')){
            require_once _DIR_ROOT.'/app/models/'.$model.'.php';
            if(class_exists($model)){
                $model = new $model();
                return $model;
            }
        } 
        echo"<br> 8. không tồn tại class $model";
        return false;
        
       
    }
    public function render($view, $data=[]){
        extract($data);

        if(file_exists(_DIR_ROOT.'/app/views/'.$view.'.php')){
            require_once _DIR_ROOT.'/app/views/'.$view.'.php';
        } else {
            echo "ko ton tai " ;
            echo _DIR_ROOT.'/app/views/'.$view.'.php';
        }
    }
}
?>