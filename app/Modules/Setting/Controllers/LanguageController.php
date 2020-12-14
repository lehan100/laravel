<?php

namespace App\Modules\Setting\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Setting\Models\Language as mainModel;

class LanguageController extends Controller
{
    private $_pathViewController = 'Setting::language.';
    private $_controllerName = "language";
    private $_buttonGroup;
    private $_model;
    private $_params;
    public function __construct()
    {
        $this->_model = new mainModel();
        $this->_buttonGroup = config('admin_config.button_group.' . $this->_controllerName . '.list');
        $this->_params['pagination']['totalItemPerpage'] = 5;
        view()->share(['controllerName' => $this->_controllerName, 'buttonGroup' => $this->_buttonGroup]);
    }
    public function index(Request $request)
    {
        //echo trans('lang::local.add');die();
        $items = $this->_model->listItems($this->_params, ['task' => "admin-list-items"]);
        return view($this->_pathViewController . "index", [
            'items' => $items
        ]);
    }
}
