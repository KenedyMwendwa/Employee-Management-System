@extends('layo.pap')

{{-- start body section --}}
@section('content')
  <!-- Content Header (Page header) -->
  {{-- <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <center><h3 class="m-0, text-bold">Add Department</h3></center>
        </div>
      </div>
    </div>>
  </div> --}}
  <!-- /.content-header -->
     <div class="container">
      <div class="row">
          <div class="col-7 pt-2">
              <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <center>
                  <h4>Create a New Employee</h4>
                </center>
                  <form action="{{ url('employees/create') }}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="control-group col-13">
                            <label for="title">Employee Name</label>
                            <input type="text" id="employee_name" class="form-control" name="employee_name"
                                   placeholder="Enter Employee Name" required>
                        </div>
                        <div class="control-group col-13">
                            <label for="title">Employee Age</label>
                            <input type="text" id="employee_age" class="form-control" name="employee_age"
                                   placeholder="Enter Employee Age" required>
                        </div>
                        <div class="control-group col-13">
                            <label for="title">Employee Department</label>
                            <input type="text" id="employee_department" class="form-control" name="employee_department"
                                   placeholder="Enter Employee Department" required>
                        </div>
                        <div class="control-group col-13">
                            <label for="title">Employee Salary</label>
                            <input type="text" id="employee_salary" class="form-control" name="employee_salary"
                                   placeholder="Enter Employee Salary" required>
                        </div>
                        <div class="control-group col-13">
                            <label for="title">Employee Attendance</label>
                            <input type="text" id="employee_attendance" class="form-control" name="employee_attendance"
                                   placeholder="Enter Employee Attendance" required>
                        </div>
                        <div class="control-group col-13">
                            <label for="title">Employee Performance</label>
                            <input type="text" id="employee_performance" class="form-control" name="employee_performance"
                                   placeholder="Enter Employee Performance" required>
                        </div>
                      </div>
                      <div class="row mt-2">
                          <div class="control-group col-12 text-center">
                              {{-- <a href="{{ route('all-employees') }}">nav-link</a> --}}
                              <button id="btn-submit" class="btn btn-primary">
                                  SUBMIT
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
  
          </div>
      </div>
  </div>
@endsection