<?php
namespace App\Modules\Setting\Models;

use App\Models\AdminModel;
class Language extends AdminModel
{   
    protected $table;
    protected $folderUpload;
    protected $fieldSearchAccepted;
    //End 
    public function __construct()
    {
        $this->table = 'language';
        $this->folderUpload ='lang';
        $this->fieldSearchAccepted = ['id','name'];
    }
    public function listItems($params, $options){
         $result = null;
       
       
        if($options['task']=="admin-list-items"){
            $query =  $this  ->select('id', 'name', 'code', 'thumb', 'created', 'status');
            $result = $query ->orderBy("id",'desc')->get();
            if($result) $result = $result->toArray();
        }
       
        return $result;
    }
    public function countItems($params, $options){
        $result = null;
        
       if($options['task']==""){
       }
    }
    public function saveItem($params, $options){
        $result = null;
       
        if($options['task']==""){
           
        }
        
        return  $result;
    }
    public function getItem($params = null, $options = null){
        $result = null;
        
        if($options['task']==""){
        }
        
        return  $result;
    }
    public function deleteItem($params, $options){
        $result = null;
        
        if($options['task']==""){
          
        }
        return  $result;
    }
    
}
