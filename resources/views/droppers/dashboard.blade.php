@extends('layouts.lay-dropper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- @if (Auth::guard('dropper')->check())
                    Welcome {{Auth::guard('dropper')->user()  }} 
                    @else
                    You are not logged in! as DROPPER
                    @endif --}}
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
