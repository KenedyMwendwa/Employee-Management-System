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
                  <h4>Create a New Department</h4>
                </center>
                  <form action="" method="POST">
                      @csrf
                      <div class="row">
                        <center>
                          <div class="control-group col-13">
                            <input type="text" id="Department_Name" class="form-control" name="Department_Name"
                                   placeholder="Enter Department Name" required>
                        </div>
                        </center>
                        <center>
                          <div class="control-group col-13">
                            <input type="text" id="Department_Code" class="form-control" name="Department_Code"
                                   placeholder="Enter Department Code" required>
                        </div>
                        </center>
                      </div>
                      <div class="row mt-2">
                          <div class="control-group col-12 text-center">
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