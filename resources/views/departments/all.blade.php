@extends('layo.pap')

{{-- start body section --}}
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <center><h3 class="m-0, text-bold">All Departments</h3></center>
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
                <th>Department Name</th>
                <th>Department Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
 
                @forelse($departments as $department)
                <tr>
                    <td>{{ ucfirst($department->id) }}</td>
                    <td>{{ ucfirst($department->Department_Name) }}</td>
                    <td>{{ ucfirst($department->Department_Code) }}</td>
                    <td> <button class="btn-outline-success, btn-info">
                       <a href="departments.edit">Edit</a>
                        </button> 
                        <button class="btn-danger, btn-danger">
                            <a href="departments.delete">Delete</a> 
                        </button></td>      
                @empty
                    <p class="text-warning">No departments available</p>
                @endforelse
            </tr>              
        </tbody>

        <tfoot>
            <tr>
                <th>id</th>
                <th>Department Name</th>
                <th>Department Code</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>



@endsection