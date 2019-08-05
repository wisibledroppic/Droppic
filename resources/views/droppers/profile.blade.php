@extends('layouts.lay-dropper')

@section('content')

<div class="card-body">
    <h5 class="card-title">Dropper's Profile</h5>

    <form method="POST" action="{{ route('dropper.editProfile') }}" >
            @csrf
                    <div class="card" style="width: 20rem;">
                            <a href=""><img class="card-img-top" src="{{ URL::asset('storage/'. $dropper->profile_image) }}" alt="image avatar"></a>
                            <div class="card-body">
                                <h5 class="card-title"><strong>Name: {{$dropper->dname}}</strong></h5>
                                <p class="card-text"><strong>Email : {{$dropper->email}}</strong></p>


                            <div class="form-group row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Upload Your Image') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" id="file">
                                </div>
                            </div>


                            </div>
                            </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="position-relative form-group"><label for="dname" class="">Name</label><input name="dname"
                        id="dname" placeholder="" required value={{$dropper->dname}} type="text" class="form-control"></div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group"><label for="email" class="">Email</label><input name="email"
                        id="email" placeholder=""  required disabled value={{$dropper->email}} type="email" class="form-control"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="position-relative form-group"><label for="dcontact" class="">Contact</label><input
                        name="dcontact" id="dcontact" required placeholder="" value={{$dropper->dcontact}} type="text" class="form-control"></div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group"><label for="dcnic" class="">CNIC #</label><input name="dcnic"
                        id="dcnic" placeholder="" required value={{$dropper->dcnic}} type="text" class="form-control"></div>
            </div>
        </div>
        <div class="form-row">
            <label for="davail_hrs" class="">Availaibilty Hours : </label>
        </div>
        <div class="form-row">
            <div class="col-md-6 ">
                <label for="hrs_from" class=""> FROM </label>
                <input name="hrs_from"  value={{$dropper->hrs_from}} required id="timepicker1" width="276" class="form-control" />
                <script>
                    $('#timepicker1').timepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
            <div class="col-md-6">
                <label for="hrs_to" class=""> TO </label>
                <input name="hrs_to" required value={{$dropper->hrs_to}} id="timepicker" width="276" class="form-control" />
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
        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                Update Profile
            </button>

    </form>
</div>

@endsection
