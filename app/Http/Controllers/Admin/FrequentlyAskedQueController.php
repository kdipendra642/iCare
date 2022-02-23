<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\FrequentlyAskedQue;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Str;


class FrequentlyAskedQueController extends BaseController
{
    protected $base_route = 'admin.faq';
    protected $view_path = 'admin.faq';
    protected $panel = 'FrequentlyAskedQue';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new FrequentlyAskedQue();
    }
   
    public function index()
    {
        $faq = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('faq'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $faq = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
        ],
        [
            'title.required' => 'Please provide title for the faq.',
            'title.max' => 'Title length exceed.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description length exceed.',
        ]);

        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->status = $request->input('status') == TRUE ? '1' : '0';
        $faq->slug = Str::slug($request->title);

        $faq->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $faq = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('faq'));
    }

   
    public function update(Request $request, $id)
    {
        $faq = $this->model::find($id);

        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->status = $request->input('status') == TRUE ? '1' : '0';
        $faq->slug = Str::slug($request->title);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
        ],
        [
            'title.required' => 'Please provide title for the faq.',
            'title.max' => 'Title length exceed.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description length exceed.',
        ]);

        $faq->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $faq = $this->model::find($id);

        $faq->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
