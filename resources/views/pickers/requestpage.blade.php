@extends('layouts.lay-picker')

@section('content')

<div class="app-main__inner">
    <div class="mb-2">
        <h3>Add Request</h3>
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form action="{{ route('picker.addrequest') }}" method="post">
                                @csrf
                                <div id="smartwizard">
                                    <ul class="forms-wizard">
                                        <li>
                                            <a href="#step-1">
                                                <em>1</em><span>Picker And Receiver Information</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <em>2</em><span>Dropper Information</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <em>3</em><span>Order Information</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-4">
                                                <em>4</em><span>Finish</span>
                                            </a>
                                        </li>
                                    </ul>


                                    <div class="form-wizard-content ">
                                        <div id="step-1">
                                            <h4 class="m-4" style="text-decoration:underline ">Picker Information</h4>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleEmail55">Name</label><input name="pname"
                                                            id="exampleEmail55" value={{$picker->pname}}
                                                            placeholder="Your name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="examplePassword22">CNIC</label><input name="pcontact"
                                                            id="examplePassword22" value={{$picker->pcnic}}
                                                            placeholder="your cell no" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleEmail55">Email</label><input name="email"
                                                            id="exampleEmail55" value={{$picker->email}}
                                                            placeholder="Your email" type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="examplePassword22">Contact</label><input name="pcnic"
                                                            id="examplePassword22" value={{$picker->pcontact}}
                                                            placeholder="your cnic no" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="m-4" style="text-decoration:underline ">Receiver Information</h4>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleEmail55">Receiver Name</label><input name="name"
                                                            id="exampleEmail55" placeholder="Receiver name" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="examplePassword22">Receiver CNIC</label><input
                                                            name="contact" id="examplePassword22"
                                                            placeholder="Receiver cnic no" type="text"
                                                            class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleEmail55">Receive Email</label><input
                                                            name="remail" id="exampleEmail55"
                                                            placeholder="Receiver Email" type="email"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="examplePassword22">Receiver Contact</label><input
                                                            name="cnic" id="examplePassword22"
                                                            placeholder="Receiver cell no" type="text"
                                                            class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-group"><label
                                                    for="exampleAddress">Receiver Address</label><input name="address"
                                                    id="exampleAddress" placeholder="1234 Main St" type="text"
                                                    class="form-control"></div>
                                            <div class="position-relative form-group"><label
                                                    for="exampleAddress2">Receiver Address 2</label><input
                                                    name="address2" id="exampleAddress2"
                                                    placeholder="Apartment, studio, or floor" type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleCity">City</label><input name="city"
                                                            id="exampleCity" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleState">State</label><input name="state"
                                                            id="exampleState" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label
                                                            for="exampleZip">Zip</label><input name="zip"
                                                            id="exampleZip" type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-check"><input name="check"
                                                    id="exampleCheck" type="checkbox" class="form-check-input"><label
                                                    for="exampleCheck" class="form-check-label">Check me out</label>
                                            </div>

                                        </div>
                                        <div id="step-2">
                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                <div class="card">
                                                    <div id="headingOne" class="card-header">
                                                        <button type="button" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="false"
                                                            aria-controls="collapseOne"
                                                            class="text-left m-0 p-0 btn btn-link btn-block">
                                                            <span class="form-heading">Dropper Information</span>
                                                        </button>
                                                    </div>
                                                    <div data-parent="#accordion" id="collapseOne"
                                                        aria-labelledby="headingOne" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group">
                                                                        <label for="exampleEmail2">Select Dropper</label>
                                                                        <select class="form-control  @error('dropper') is-invalid @enderror" id="dropper" name="dropper" >
                                                                                @if (count ($droppers)>0)
                                                                                @foreach ($droppers as $dropper)
                                                                                <option value={{$dropper->dropper_id}}>{{$dropper->dname}}</option>
                                                                                @endforeach
                                                                                @else
                                                                                <p>Currently There are no Droppers in our records.</p>
                                                                                @endif

                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword">Dropper Name</label>
                                                                        <input name="order_desc" id="examplePassword"
                                                                            placeholder="Dropper Name" type="text"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword">Dropper Contact</label>
                                                                        <input name="req_amount" id="examplePassword"
                                                                            placeholder="Dropper Contact" type="text"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="position-relative form-group">
                                                                <label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text"
                                                                                                                  class="form-control"></div>
                                                            <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text"
                                                                                                                                                           class="form-control"></div>
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-3">
                                                <div id="accordion" class="accordion-wrapper mb-3">
                                                        <div class="card">
                                                            <div id="headingOne" class="card-header">
                                                                <button type="button" data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="false"
                                                                    aria-controls="collapseOne"
                                                                    class="text-left m-0 p-0 btn btn-link btn-block">
                                                                    <span class="form-heading">Order Information<p>Enter order
                                                                            informations below</p></span>
                                                                </button>
                                                            </div>
                                                            <div data-parent="#accordion" id="collapseOne"
                                                                aria-labelledby="headingOne" class="collapse show">
                                                                <div class="card-body">
                                                                    <div class="form-row">
                                                                        <div class="col-md-4">
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleEmail2">Order type</label>
                                                                                <input name="order_type" id="exampleEmail2"
                                                                                    placeholder="Your Order Type" type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="position-relative form-group">
                                                                                <label for="examplePassword">Order
                                                                                    Description</label>
                                                                                <input name="order_desc" id="examplePassword"
                                                                                    placeholder="Order Description" type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="position-relative form-group">
                                                                                <label for="examplePassword">Amount</label>
                                                                                <input name="req_amount" id="examplePassword"
                                                                                    placeholder="Request Amount" type="number"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="position-relative form-group">
                                                                        <label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text"
                                                                                                                          class="form-control"></div>
                                                                    <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text"
                                                                                                                                                                   class="form-control"></div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div id="step-4">
                                            <div class="no-results">
                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                    <div class="swal2-success-circular-line-left"
                                                        style="background-color: rgb(255, 255, 255);"></div>
                                                    <span class="swal2-success-line-tip"></span>
                                                    <span class="swal2-success-line-long"></span>
                                                    <div class="swal2-success-ring"></div>
                                                    <div class="swal2-success-fix"
                                                        style="background-color: rgb(255, 255, 255);"></div>
                                                    <div class="swal2-success-circular-line-right"
                                                        style="background-color: rgb(255, 255, 255);"></div>
                                                </div>
                                                <div class="results-subtitle mt-4">Finished!</div>
                                                <div class="results-title">You arrived at the last form wizard step!
                                                </div>
                                                <div class="mt-3 mb-3"></div>
                                                <div class="text-center">
                                                    <button
                                                        class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="divider"></div>
                        <div class="clearfix">
                            <button type="button" id="reset-btn"
                                class="btn-shadow float-left btn btn-link">Reset</button>
                            <button type="button" id="next-btn"
                                class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                            <button type="button" id="prev-btn"
                                class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
