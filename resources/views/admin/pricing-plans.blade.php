@extends('layouts.lay-admin')

@section('content')

<!-- Editable table -->
<div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Pricing Plans For Pickers</h3>
        <div class="card-body">
          <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                  class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
              <thead>
                <tr>
                  <th class="text-center">Pricing Plan Code</th>
                  <th class="text-center">Plan Name</th>
                  <th class="text-center">Charges/Month</th>
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
      </div>
      <!-- Editable table -->

      @endsection