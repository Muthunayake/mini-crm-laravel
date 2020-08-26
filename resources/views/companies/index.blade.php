@extends('layouts.app')

@section('css')
<link href="{{ asset('css/company.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Companies') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('companies.create') }}" class="btn btn-primary btn-sm mb-3 float-right">Add New</a>
                        </div>
                    </div>
                    <table class="table company-list">
                        <thead>
                          <tr>
                            <th scope="col">Logo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <th scope="row"><img src="{{$company['logo']}}" onerror="this.src='{{ asset('images/no-image.png') }}'" class="img-thumbnail logo"></th>
                                <td>{{$company['name']}}</td>
                                <td>{{$company['email']}}</td>
                                <td>{{$company['web_site']}}</td>
                                <td>
                                    <form action="{{ route('companies.destroy',$company['id']) }}" method="POST">
                                        <a href="{{ route('companies.edit',$company['id']) }}" class="btn btn-primary btn-sm mx-1">edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">{{ __('No Company Found') }}</td>
                            </tr>
                        @endforelse                  
                        </tbody>
                      </table>
                      {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
