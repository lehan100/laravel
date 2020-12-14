<?php
namespace App\Modules\Category\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
       // echo "Text Config: " . config('configs.text2') . " <br />"; // ok
       // echo "Text Config: " . config('translate.timezone') . " <br />"; // ok
       // App::setLocale('vi'); 
       // echo "Text Language: " . trans('lang::local.hello') . " <br />"; // ok
        return view('Category::index');
    }
}