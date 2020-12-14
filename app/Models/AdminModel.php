<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class AdminModel extends Model{
    public $timestamps = false;
    const CREATED_AT  = 'created';
    const UPDATED_AT = 'modified';
    protected $table = '';
    protected $folderUpload = '';
    protected $fieldSearchAccepted = '';
    public function upload($thumbObj){
        $thumbName = Str::random(10).".".$thumbObj->clientExtension();
        $thumbObj  -> storeAs($this->folderUpload,$thumbName,'custom_storage_images');
        return $thumbName;
    }
    public function deleteThumb($thumbName){
        Storage::disk('custom_storage_images')->delete($this->folderUpload.'/'. $thumbName);
    }
}