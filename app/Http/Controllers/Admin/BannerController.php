<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;

class BannerController extends BaseController
{
    protected $base_route = 'admin.banner';
    protected $view_path = 'admin.banner';
    protected $panel = 'Banner';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Banner();
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'banner' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $banner = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('banner'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $banner = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ],
        [
            'title.required' => 'Please provide title for the banner.',
            'title.max' => 'Title length exceed.',
        ]);

        $banner->title = $request->input('title');
        $banner->status = $request->input('status') == TRUE ? '1' : '0';

        $banner->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $banner = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('banner'));
    }

   
    public function update(Request $request, $id)
    {
        $banner = $this->model::find($id);
        $banner->title = $request->input('title');
        $banner->status = $request->input('status') == TRUE ? '1' : '0';

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ],
        [
            'title.required' => 'Please provide title for the banner.',
            'title.max' => 'Title length exceed.',
        ]);

        $banner->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $banner = $this->model::find($id);

        $banner->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
