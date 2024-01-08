@extends('layouts.app')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title ps-5 pt-1"><strong>Student Data</strong></h5>
                        <a class="btn btn-outline-primary" href="{{ route('student.createStudent') }}"><b>+</b> New Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-light">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">class</th>
                                    <th scope="col">Action</th>
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

                                        {{-- <a class="btn btn-sm btn-outline-secondary" href="">Edit</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="">Delete</a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
