<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Str;

class ServiceController extends BaseController
{
    protected $base_route = 'admin.service';
    protected $view_path = 'admin.service';
    protected $panel = 'Service';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Services();
        $this->folder_path = public_path() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'services' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $services = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('services'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $services = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'description' => 'required|max:5000',
            'image' => 'required|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'Provide title for the post.',
            'title.max' => 'title length exceed.',
            'description' => 'This field is required.',
            'image.required' => 'Please provide any image.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'Image must be in jpg, png or jpeg format.',
        ]);

        $services->title = $request->input('title');
        $services->description = $request->input('description');
        $services->status = $request->input('status') == TRUE ? '1' : '0';
        $services->feature = $request->input('feature') == TRUE ? '1' : '0';
        $services->slug = Str::slug($request->title);

        if ($request->hasfile('image')) {
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($this->folder_path, $filename);
            $services->image = $filename;
        }
        $services->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $services = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('services'));
    }

   
    public function update(Request $request, $id)
    {
        $services = $this->model::find($id);

        $services->title = $request->input('title');
        $services->description = $request->input('description');
        $services->status = $request->input('status') == TRUE ? '1' : '0';
        $services->feature = $request->input('feature') == TRUE ? '1' : '0';
        $services->slug = Str::slug($request->title);

        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'description' => 'required|max:5000',
            'image' => 'sometimes|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'Provide title for the post.',
            'title.max' => 'title length exceed.',
            'description' => 'This field is required.',
            'image.required' => 'Please provide any image.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'Image must be in jpg, png or jpeg format.',
        ]);

        if($request->hasfile('image')) {
            $destination = $this->folder_path.$services->image;
            if(file_exists($destination)){
                unlink($destination);
            }

            if ($request->hasfile('image')) {
                parent::createFolderIfNotExist($this->folder_path);
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($this->folder_path, $filename);
                $services->image = $filename;
            }
        }
        $services->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $services = $this->model::find($id);

        $destination = $this->folder_path.$services->image;
        
        if(file_exists($destination)){
            unlink($destination);
        }

        $services->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
