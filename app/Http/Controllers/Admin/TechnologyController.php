<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;

class TechnologyController extends BaseController
{
    protected $base_route = 'admin.technology';
    protected $view_path = 'admin.technology';
    protected $panel = 'Technology';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Technology();
        $this->folder_path = public_path() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'technology' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $technology = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('technology'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $technology = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:5120|mimes:jpg,svg,png,jpeg',
        ],
        [
            'title.required' => 'Please provide title for the technology.',
            'title.max' => 'Title length exceed.',
            'image.required' => 'Image is required.',
            'image.max' => 'Image size too large.',
            'image.mimes' => 'Image must be in jpg, png, jpeg or svg.',
        ]);

        $technology->title = $request->input('title');
        $technology->status = $request->input('status') == TRUE ? '1' : '0';

        if ($request->hasfile('image')) {
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($this->folder_path, $filename);
            $technology->image = $filename;
        }

        $technology->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $technology = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('technology'));
    }

   
    public function update(Request $request, $id)
    {
        $technology = $this->model::find($id);
        $technology->title = $request->input('title');
        $technology->status = $request->input('status') == TRUE ? '1' : '0';

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'sometimes|max:5120|mimes:jpg,svg,png,jpeg',
        ],
        [
            'title.required' => 'Please provide title for the technology.',
            'title.max' => 'Title length exceed.',
            'image.required' => 'Image is required.',
            'image.max' => 'Image size too large.',
            'image.mimes' => 'Image must be in jpg, png, jpeg or svg.',
        ]);

        if($request->hasfile('image')) {
            $destination = $this->folder_path.$technology->image;
            if(file_exists($destination)){
                unlink($destination);
            }

            if ($request->hasfile('image')) {
                parent::createFolderIfNotExist($this->folder_path);
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($this->folder_path, $filename);
                $technology->image = $filename;
            }
        }

        $technology->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $technology = $this->model::find($id);
        $destination = $this->folder_path.$technology->image;
        
        if(file_exists($destination)){
            unlink($destination);
        }

        $technology->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
