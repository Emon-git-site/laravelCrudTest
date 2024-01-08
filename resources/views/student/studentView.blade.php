@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><strong>Student Information</strong></h5>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Name:</th>
                                    <td>{{ $studentData['name'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{ $studentData['email'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone:</th>
                                    <td>{{ $studentData['phone'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address:</th>
                                    <td>{{ $studentData['address'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Salary:</th>
                                    <td>{{ $studentData['class'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
