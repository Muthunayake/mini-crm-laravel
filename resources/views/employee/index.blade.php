@extends('layouts.app')

@section('css')
<link href="{{ asset('css/employee.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm mb-3 float-right">Add New</a>
                        </div>
                    </div>
                    <table class="table employee-list">
                        <thead>
                          <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($employees as $employee)
                            <tr>
                                <td>{{$employee['first_name']}}</td>
                                <td>{{$employee['last_name']}}</td>
                                <td>{{$employee->company['name']}}</td>
                                <td>{{$employee['email']}}</td>
                                <td>{{$employee['phone']}}</td>
                                <td>
                                    <form action="{{ route('employees.destroy',$employee['id']) }}" method="POST">
                                        <a href="{{ route('employees.edit',$employee['id']) }}" class="btn btn-primary btn-sm mx-1">edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">{{ __('No Employee Found') }}</td>
                            </tr>
                        @endforelse                  
                        </tbody>
                      </table>
                      {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
