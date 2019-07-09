@extends('layouts.app')

@section('content')

<div class="card-body">
    <h5 class="card-title">Your Profile</h5>
    <form class="">
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group"><label for="dname" class="">Name</label><input name="dname"
                        id="dname" placeholder="" type="text" class="form-control"></div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group"><label for="dcnic" class="">CNIC #</label><input name="dcnic"
                        id="dcnic" placeholder="" type="text" class="form-control"></div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group"><label for="dcontact" class="">Contact</label><input
                        name="dcontact" id="dcontact" placeholder="" type="text" class="form-control"></div>
            </div>
        </div>
        <div class="form-row">
            <label for="davail_hrs" class="">Availaibilty Hours : </label>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label for="davail_hrs" class=""> FROM </label>
                <input name="davail_hrs" id="timepicker1" width="276" class="form-control" />
                <script>
                    $('#timepicker1').timepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
            <div class="col-md-6">
                <label for="davail_hrs" class=""> TO </label>
                <input name="davail_hrs" id="timepicker" width="276" class="form-control" />
                <script>
                    $('#timepicker').timepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
        </div>

        <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input
                name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
        <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input
                name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text"
                class="form-control">
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input
                        name="city" id="exampleCity" type="text" class="form-control"></div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group"><label for="exampleState" class="">State</label><input
                        name="state" id="exampleState" type="text" class="form-control"></div>
            </div>
            <div class="col-md-2">
                <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip"
                        id="exampleZip" type="text" class="form-control"></div>
            </div>
        </div>
        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox"
                class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
        <button class="mt-2 btn btn-primary">Update Profile</button>
    </form>
</div>

@endsection