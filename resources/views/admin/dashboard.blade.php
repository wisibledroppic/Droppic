@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Droppers</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($droppers as $dropper)
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    {{-- <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                    </div> --}}
                                    <div class="widget-content-left">
                                        <div class="widget-heading">{{$dropper->dname}} - {{$dropper->email}}</div>
                                        <div class="widget-subheading">NIC : {{$dropper->dcnic}}</div>
                                        <div class="widget-subheading">Cell : {{$dropper->dcontact}}</div>
                                        <div class="widget-subheading">{{$dropper->status_id['status_name']}}</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button type="button" class="btn-shadow btn btn-primary">Hire</button>
                                            <button type="button" class="btn-shadow btn btn-primary">Fire</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
            </div><br><br><br>
            <div class="card">
                    <div class="card-header">Pickers</div>

            <div class="card-body">
                    <ul class="list-group">
                        @foreach ($pickers as $picker)
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    {{-- <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                    </div> --}}
                                    <div class="widget-content-left">
                                        <div class="widget-heading">{{$picker->pname}} - {{$picker->email}}</div>
                                        <div class="widget-subheading">NIC : {{$picker->pcnic}}</div>
                                        <div class="widget-subheading">Cell : {{$picker->pcontact}}</div>
                                        <div class="widget-subheading">{{$picker->status_id['status_name']}}</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button type="button" class="btn-shadow btn btn-primary">Hire</button>
                                            <button type="button" class="btn-shadow btn btn-primary">Fire</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div></div></div>
        </div>
    </div>
</div>
@endsection
