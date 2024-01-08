@extends('layouts.app')

@section('content')
<div class="container">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Student DataTable</h3>
                  @if(Session::has('success'))
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="alert alert-danger" role="alert" id="success-alert">
                        {{ Session::get('success')}}
                      </div>
                    </div>
                  </div>
                    @endif
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SERIAL NO</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>PHONE</th>
                      <th>ADDRESS</th>
                      <th>CLASS</th>
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentsData as $key=>$student)
                        <tr>
                            <th scope="row">{{ $key++ }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->class }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('student.studentView', $student->id) }}">view</a>

                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('student.editStudent', $student->id) }}">Edit</a>
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('student.deleteStudent', $student->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
 

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
</div>
@endsection

