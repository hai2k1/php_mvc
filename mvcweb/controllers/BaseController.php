
<?php
class Basecontroller{
    const VIEW_FOLDER_NAME = 'view';
    const MODEL_FOLDER_NAME = 'model';
    protected function view($Viewpath,array $data =[]){
        
        foreach($data as $key =>$value){
            $$key = $value;
        }
        $Viewpath =self::VIEW_FOLDER_NAME.'/'. str_replace('.','/',$Viewpath).'.php';
        require($Viewpath);
    }
    protected function loadModel($modelload){
        $Viewpath =self::MODEL_FOLDER_NAME.'/'. $modelload.'.php';
        require($Viewpath);
    }
}