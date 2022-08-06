<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use App\Models\Title;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function viewEmployeesList()
    {
        $employeeList = Employee::all()->toArray();
        return view('employee.show_employee_list',compact('employeeList'));
    }
    public function showEmployeesDetails(Request $request){
        $userID = $request->id;
        $employeeData = Employee::findOrFail($userID)->toArray();
        $SalaryData = Salary::all()->where('emp_no',$userID)->toArray();
        $TitleData = Title::all()->where('emp_no',$userID)->toArray();
        return view('employee.show_employee_data',compact('employeeData','TitleData','SalaryData'));
    }
    public function createEmployee(){
        return view('employee.create_employee');
    }

    public function editEmployeesDetails(Request $request){

        $userID = $request->id;
        $employeeData = Employee::findOrFail($userID)->toArray();
        $SalaryData = Salary::all()->where('emp_no',$userID)->toArray();
        $TitleData = Title::all()->where('emp_no',$userID)->toArray();
        return view('employee.edit_employee_data',compact('employeeData','TitleData','SalaryData'));
    }

    public function deleteEmployeesSalary(Request $request){
        $id = $request->id;
        try {
            Salary::where('emp_no', $id)->firstorfail()->delete();
            //$salary->delete();
            return back()->withInput()->with('message','Employee Salary Records Deleted Successfully !');
        } catch (\Exception $exception){
            return back()->withInput()->with('message',$exception->getMessage());
        }

    }

    public function deleteEmployeesTitle(Request $request){
        $id = $request->id;
        try {
            Title::where('emp_no', $id)->firstorfail()->delete();
            //$salary->delete();
            return back()->withInput()->with('message','Employee Designation Records Deleted Successfully !');
        } catch (\Exception $exception){
            return back()->withInput()->with('message',$exception->getMessage());
        }
    }

    public function updateEmployeesDetails(Request $request , Employee $employee){

        // Validate Form Request
        $empNo = $request->input('emp_no');

        $validated = $request->validate([
            'first_name' => 'required|max:100|string',
            'last_name' => 'required|max:100|string',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date',
            'gender' => 'required',
        ]);
        try {
            Employee::where('emp_no', $empNo)->update($validated);
            return back()->withInput()->with('message','Employee Updated Successfully !');
        } catch (\Exception $exception){
            return back()->withInput()->with('message',$exception->getMessage());
        }
    }

    public function storeEmployeesDetails(Request $request , Employee $employee){
        // Validate Form Request
        //dd($request->all());
        $validated = $request->validate([
            'first_name' => 'required|max:100|string',
            'last_name' => 'required|max:100|string',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date',
            'gender' => 'required',
        ]);

        try {
            $insert = Employee::create($validated);
            $emp_no = $insert->emp_no;
            for ($x = 0; $x <= 10; $x++) {
                if(!empty($request->input('salary_amount_'.$x))){
                    $tempArray = array();
                    $tempArray['salary'] = $request->input('salary_amount_'.$x);
                    $tempArray['emp_no'] = $emp_no;
                    $tempArray['from_date'] = strval($request->input('salary_from_date_'.$x));
                    $tempArray['to_date'] = strval($request->input('salary_to_date_'.$x));
                    Salary::create($tempArray);
                }

            }
            for ($a = 0; $a<= 10; $a++) {
                if(!empty($request->input('title_amount_'.$a))){
                    $tempArray2 = array();
                    $tempArray2['title'] = $request->input('title_amount_'.$a);
                    $tempArray2['emp_no'] = $emp_no;
                    $tempArray2['from_date'] = strval($request->input('title_from_date_'.$a));
                    $tempArray2['to_date'] = strval($request->input('title_to_date_'.$a));
                    Title::create($tempArray2);
                }

            }

            return back()->withInput()->with('message','Employee Created Successfully !');
        } catch (\Exception $exception){
            return back()->withInput()->with('message',$exception->getMessage());
        }
    }
}
