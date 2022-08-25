<?php

namespace App\Http\Controllers;

use App\Imports\DriversImport;
use App\Mail\driversheetmail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;


class DriverSheetController extends Controller
{
    public function index() 
    {
       return view('dashboard');     
    }
    public function import(Request $req) 
    {

            Excel::import(new DriversImport, $req->file('driver_sheet_file'));
            Mail::to($req->management_email)->send(new  driversheetmail());
            Mail::to($req->send_email)->send(new  driversheetmail());

            return back();
    }
}
