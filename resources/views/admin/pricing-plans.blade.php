@extends('layouts.lay-admin')

@section('content')

<!-- Editable table -->

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
                    <div id="addplan"><button type="button" class="btn btn-info btn float-right mb-3 mr-2" data-toggle="modal" data-target="#pricing-plan-modal">Add new Plan</button></div>
                    <th class="text-center">Pricing Plan Code</th>
                    <th class="text-center">Plan Name</th>
                    <th class="text-center">Charges/Month</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pricingplans as $pricingplan)
                <tr>
                    <td >{{$pricingplan->pricing_plan_id}}</td>
                        <td >{{$pricingplan->cat_name}}</td>
                        <td>{{$pricingplan->amount_per_month}}</td>
                        <td>
                            <span class="table-remove"><button type="button"
                                class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                          </td>
                </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th class="text-center">Pricing Plan Code</th>
                    <th class="text-center">Plan Name</th>
                    <th class="text-center">Charges/Month</th>
                    <th class="text-center">Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>



{{-- <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Pricing Plans For Pickers</h3>
        <div class="card-body">
          <div id="table" class="table-editable">
            <div id="addplan"><button type="button" class="btn btn-info btn float-right mb-3 mr-2" data-toggle="modal" data-target="#pricing-plan-modal">Add new Plan</button></div>
            
            <table class="table table-bordered table-responsive-md table-striped text-center">
              <thead>
                <tr>
                  <th class="text-center">Pricing Plan Code</th>
                  <th class="text-center">Plan Name</th>
                  <th class="text-center">Charges/Month</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pricingplans as $pricingplan)
                <tr>
                        <td class="pt-3-half" contenteditable="true">{{$pricingplan->pricing_plan_id}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$pricingplan->cat_name}}</td>
                        <td class="pt-3-half" contenteditable="true">{{$pricingplan->amount_per_month}}</td>
                        <td>
                          <span class="table-remove"><button type="button"
                              class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                      </tr>
                @endforeach
                <!-- This is our clonable table line -->
              </tbody>
            </table>
          </div>
        </div>
      </div> --}}
      <!-- Editable table -->
      
      
      @endsection