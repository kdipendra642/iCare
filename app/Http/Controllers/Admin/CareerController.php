<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Str;

class CareerController extends BaseController
{
    protected $base_route = 'admin.career';
    protected $view_path = 'admin.career';
    protected $panel = 'Career';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Career();
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'career' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $careers = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('careers'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $careers = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'description' => 'required',
        ],
        [
            'title.required' => 'Provide title for the post.',
            'title.max' => 'title length exceed.',
            'description.required' => 'This field is required.',
        ]);

        $careers->title = $request->input('title');
        $careers->description = $request->input('description');
        $careers->department = $request->input('department');
        $careers->level = $request->input('level');
        $careers->salary = $request->input('salary');
        $careers->experience = $request->input('experience');
        $careers->status = $request->input('status') == TRUE ? '1' : '0';
        $careers->slug = Str::slug($request->title);

        $careers->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $career = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('career'));
    }

   
    public function update(Request $request, $id)
    {
        $careers = $this->model::find($id);

        $careers->title = $request->input('title');
        $careers->description = $request->input('description');
        $careers->department = $request->input('department');
        $careers->level = $request->input('level');
        $careers->salary = $request->input('salary');
        $careers->experience = $request->input('experience');
        $careers->status = $request->input('status') == TRUE ? '1' : '0';
        $careers->slug = Str::slug($request->title);

        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'description' => 'required',
        ],
        [
            'title.required' => 'Provide title for the post.',
            'title.max' => 'title length exceed.',
            'description.required' => 'This field is required.',
        ]);

        $careers->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $careers = $this->model::find($id);
        $careers->delete();
        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
