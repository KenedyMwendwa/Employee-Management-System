@extends('layo.pap')

{{-- start body section --}}
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <center><h3 class="m-0, text-bold">All Employees</h3></center>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="table table-responsive">
    <table id="table_id" class="table table-striped table-bordered">
        <thead class="table .thead-dark th">
            <tr>
                <th>id</th>
                <th>employee_name</th>
                <th>employee_age</th>
                <th>employee_department</th>
                <th>employee_salary</th>
                <th>employee_attendance</th>
                <th>employee_performance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
 
                @forelse($employees as $employee)
                <tr>
                    <td>{{ ucfirst($employee->id) }}</td>
                    <td>{{ ucfirst($employee->employee_name) }}</td>
                    <td>{{ ucfirst($employee->employee_age) }}</td>
                    <td>{{ ucfirst($employee->employee_department) }}</td>
                    <td>{{ ucfirst($employee->employee_salary) }}</td>
                    <td>{{ ucfirst($employee->employee_attendance) }}</td>
                    <td>{{ ucfirst($employee->employee_performance) }}</td>
                    <td> <button class="btn-outline-success, btn-info">
                       <a href="departments.edit">Edit</a>
                        </button> 
                        <button class="btn-danger, btn-danger">
                            <a href="departments.delete">Delete</a> 
                        </button></td>      
                @empty
                    <p class="text-warning">No Employees available</p>
                @endforelse
            </tr>              
        </tbody>

        <tfoot>
            <tr>
                <th>id</th>
                <th>employee_name</th>
                <th>employee_age</th>
                <th>employee_department</th>
                <th>employee_salary</th>
                <th>employee_attendance</th>
                <th>employee_performance</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>



@endsection