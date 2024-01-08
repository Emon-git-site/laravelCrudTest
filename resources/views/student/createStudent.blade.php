@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  <div class="d-flex justify-content-between align-items-center card-header">
                    <span>{{ __('Create New Student') }}</span>
                    <a class="btn btn-sm btn-outline-secondary" href="{{ url('/') }}">Back</a>
                </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert" id="success-alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session()->has('message'))
                            <div class="alert alert-success" id="success-alert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('student.storeStudent') }}" method="post">
                            @csrf
                            <div class="form-group row py-1">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" name="email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Address" name="address"
                                        value="{{ old('address') }}">
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="Class" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Class" name="class"
                                        value="{{ old('class') }}">
                                </div>
                            </div>


                            <div class="row mb-0 mt-3">
                                <div class="col-md-8 offset-md-1">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('create') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
