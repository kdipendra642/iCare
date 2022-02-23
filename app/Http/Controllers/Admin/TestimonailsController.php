<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Str;

class TestimonailsController extends BaseController 
{
    protected $base_route = 'admin.testimonials';
    protected $view_path = 'admin.testimonials';
    protected $panel = 'Testimonials';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Testimonials();
        $this->folder_path = public_path() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'testimonials' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $testimonials = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('testimonials'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        // dd($request->all());
        $testimonials = $this->model;

        $validatedData = $request->validate([
            'name' => 'required|max:1000',
            'designation' => 'required|max:1000',
            'description' => 'required|max:5000',
            'image' => 'required|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'Provide name for the post.',
            'name.max' => 'name length exceed.',
            'designation.required' => 'Designation required.',
            'designation.max' => 'Designation too long.',
            'description' => 'This field is required.',
            'image.required' => 'Please provide any image.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'Image must be in jpg, png or jpeg format.',
        ]);

        $testimonials->name = $request->input('name');
        $testimonials->designation = $request->input('designation');
        $testimonials->description = $request->input('description');
        $testimonials->status = $request->input('status') == TRUE ? '1' : '0';
        $testimonials->feature = $request->input('feature') == TRUE ? '1' : '0';
        $testimonials->slug = Str::slug($request->name);

        if ($request->hasfile('image')) {
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($this->folder_path, $filename);
            $testimonials->image = $filename;
        }
        $testimonials->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $testimonials = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('testimonials'));
    }

   
    public function update(Request $request, $id)
    {
        $testimonials = $this->model::find($id);

        $testimonials->name = $request->input('name');
        $testimonials->designation = $request->input('designation');
        $testimonials->description = $request->input('description');
        $testimonials->status = $request->input('status') == TRUE ? '1' : '0';
        $testimonials->feature = $request->input('feature') == TRUE ? '1' : '0';
        $testimonials->slug = Str::slug($request->name);

        $validatedData = $request->validate([
            'name' => 'required|max:1000',
            'designation' => 'required|max:1000',
            'description' => 'required|max:5000',
            'image' => 'sometimes|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'Provide name for the post.',
            'name.max' => 'name length exceed.',
            'designation.required' => 'Designation required.',
            'designation.max' => 'Designation too long.',
            'description' => 'This field is required.',
            'image.required' => 'Please provide any image.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'Image must be in jpg, png or jpeg format.',
        ]);

        if($request->hasfile('image')) {
            $destination = $this->folder_path.$testimonials->image;
            if(file_exists($destination)){
                unlink($destination);
            }

            if ($request->hasfile('image')) {
                parent::createFolderIfNotExist($this->folder_path);
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($this->folder_path, $filename);
                $testimonials->image = $filename;
            }
        }
        $testimonials->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $testimonials = $this->model::find($id);

        $destination = $this->folder_path.$testimonials->image;
        
        if(file_exists($destination)){
            unlink($destination);
        }

        $testimonials->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
