@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
    <div class="row justify-content-center ">
        <div class="col-sm-2">
            <img src="" id="profile-img-tag" class="rounded-circle" width="200px" />
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="userName" class="col-sm-3 col-form-label">Nama</label>
            <input type="text" name="userName" id="userName" class="form-control col-sm-9" value="{{$user->name}}" readonly>
            </div>
            <div class="form-group row">
                <label for="userEmail" class="col-sm-3 col-form-label">E-mail</label>
                <input type="text" name="userEmail" class="form-control col-sm-9" id="userEmail" value="{{$user->email}}" readonly>
            </div>
            <div class="form-group row">
                <label for="userPhone" class="col-sm-3 col-form-label">No. Telp</label>
                <input type="text" name="userPhone" class="form-control col-sm-9" id="userPhone" value="{{$user->phone_number}}" readonly>
            </div>
            <div class="form-group row">
                <label for="userKTP" class="col-sm-3 col-form-label">No. KTP</label>
                <input type="text" name="userKTP" class="form-control col-sm-9" id="userKTP" value="{{$user->ktp_number}}" readonly>
            </div>
            <div class="form-group row">
                <label for="userAddress" class="col-sm-3 col-form-label">Alamat</label>
                <input type="text" name="Address" class="form-control col-sm-9" id="Address" value="{{$user->address}}" readonly>
            </div>
            <div class="form-group row">
                <label for="kotaName" class="col-sm-3 col-form-label">Kota</label>
                <input name="kotaName" class="form-control col-sm-9" id="kotaName" value="{{$user->city_id}}" readonly>
            </div>
            <div class="form-group row">
                <label for="userBank" class="col-sm-3 col-form-label">No. Rekening</label>
                <input type="text" name="userBank" class="form-control col-sm-9" id="userBank" value="{{$user->bank_number}}" readonly>
            </div>
            <div class="form-group float-right">
                <a href="/borrowBook/public/profil/{{$user->id}}/edit"><button type="button" class="btn btn-primary">Edit Profile</button></a>
            </div>        
        </div>
    </div> 
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profilPicture").change(function(){
        readURL(this);
    });
</script>
@endsection