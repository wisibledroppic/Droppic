@extends('layouts.lay-admin')

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-medal icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Data Tables
                <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic
                    ones.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Cell Number</th>
                    <th>Email</th>
                    <th>Date Of Registration</th>
                    <th>Availaibility Hours</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($droppers as $dropper)
                <tr>
                    <td>{{$dropper->dname}}</td>
                    <td>{{$dropper->dcnic}}</td>
                    <td>{{$dropper->dcontact}}</td>
                    <td>{{$dropper->email}}</td>
                    <td>{{$dropper->created_at}}</td>
                    <td>{{$dropper->hrs_from}} - {{$dropper->hrs_to}}</td>
                    <td>{{$dropper->status_id}} - {{$dropper->status['status_name']}}</td>
                </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Cell Number</th>
                    <th>Email</th>
                    <th>Date Of Registration</th>
                    <th>Availaibility Hours</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


@endsection
