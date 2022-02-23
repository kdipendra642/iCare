<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Mail;
use App\Mail\VacancyMail;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Storage;


class VacancyController extends BaseController
{
    protected $base_route = 'admin.vacancy';
    protected $view_path = 'admin.vacancy';
    protected $panel = 'Vacancy';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Vacancy();
        $this->folder_path = public_path() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'vacancy' . DIRECTORY_SEPARATOR;
    }

    public function index()
    {
        $vacancy = $this->model::all();   
        return view($this->view_path.'.index', compact('vacancy'));
    }

   
    
    public function store(Request $request)
    {
        // dd($request->all());
        $details = $this->model;

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'resume' => 'required|mimes:pdf,xlx,csv|max:2048',
        ],
        [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide your email.',
            'phone.required' => 'Please provide your contact number.',
            'address.required' => 'Please specify where you live.',
            'experience.required' => 'If you have no experience then type 0 in the box.',
            'resume.required' => 'Resume is required.',
            'resume.mimes' => 'Resume must be in pdf format.',
            'resume.max' => 'File too large',
            
        ]);

        $details->name = $request->input('name');
        $details->email = $request->input('email');
        $details->phone = $request->input('phone');
        $details->address = $request->input('address');
        $details->job_id = $request->input('job_id');
        $details->experience = $request->input('experience');
        $details->current_salary = $request->input('current_salary');
        $details->expected_salary = $request->input('expected_salary');
        $details->project_reference = $request->input('project_reference');
        $details->source_reference = $request->input('source_reference');
        $details->reason = $request->input('reason');
        $details->status = $request->input('status') == TRUE ? '1' : '0';

            $file = $request->resume;
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $request->resume->move('uploads', $fileName);
            $details->resume = $fileName;
        

        $details->save();

        Mail::to('kdipendra642@gmail.com')->send(new VacancyMail($details));
        return back()->with('success', 'Your message has been sent we will contact you soon.' );
        
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $vacancy = $this->model::find($id);
        return view($this->view_path.'.edit', compact('vacancy'));
    }

    
    public function update(Request $request, $id)
    {
        $vacancy = $this->model::find($id);
        $vacancy->status = $request->input('status') == TRUE ? '1' : '0';

        $vacancy->update();

        $request->session()->flash('updated_message', $this->panel . ' read.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $vacancy = $this->model::find($id);
        $destination = $this->folder_path.$vacancy->resume;
        
        if(file_exists($destination)){
            unlink($destination);
        }

        $vacancy->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }

    public function download(Request $request, $resume) {
        return response()->download(public_path('uploads/'.$resume));
    }
}
