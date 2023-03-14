<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
class EmployeeController extends Controller
{
    public function showEmployees(){
        $employee = Employee::all();
        return view('employee_index', compact('employee'));
      }

      // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $employee = Employee::all();
        // share data to view
        //view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view',compact('employee'))->setOptions(['defaultFont' => 'sans-serif']);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
