<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\JobDescription;
use App\Models\EmpDetail;

class JobController extends Controller
{

    protected $jobObj;
    protected $empapply;

    public function __construct(JobDescription $jobObj, EmpDetail $empapply)
    {
                $this->jobObj= $jobObj;
                $this->$empapply= $empapply;
    }



    public function jobFetch(Request $req)
    {
        
            $data=$this->jobObj::all(); 
            return view('home', ['data'=>$data]);
    }

    public function desShow($id)
    {
        $job_id= JobDescription::find($id);
        return view('job_des')->with('job_id', $job_id);
    }

    public function applyJob($id)
    {
        $jobData= JobDescription::find($id);

        return view('apply_job')->with('jobData', $jobData);
    }

    public function jobApply(Request $req)
    {
              //dd($req->all());
            EmpDetail::create($req->all());

            $data=$req->all();

            return view('successview', ['data'=>$data]);

          

    }

    public function addJob(Request $req)
    {
         //dd($req->all());
         JobDescription::create($req->all());
         return redirect('/');
    }


    public function applicants()
    {
        $data=EmpDetail::all(); 
        return view('applicants', ['data'=>$data]);
    }
}

