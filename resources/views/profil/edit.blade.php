@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
<form action="/borrowBook/public/profil/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row justify-content-center ">
            <div class="col-sm-2">
                <div class="form-group">
                    <img src="../../storage/profile_pictures/{{$user->profile_pictures}}" id="profile-img-tag" class="rounded-circle" width="200px" />
                    <input type="file" name="profile_picture" class="form-control-file mb-3" id="profile_picture" >                      
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control col-sm-9" value="{{$user->name}}">
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">E-mail</label>
                    <input type="text" name="email" class="form-control col-sm-9" id="email" value="{{$user->email}}">
                </div>
                <div class="form-group row">
                    <label for="phone_number" class="col-sm-3 col-form-label">No. Telp</label>
                    <input type="text" name="phone_number" class="form-control col-sm-9" id="phone_number" value="{{$user->phone_number}}">
                </div>
                <div class="form-group row">
                    <label for="ktp_number" class="col-sm-3 col-form-label">No. KTP</label>
                    <input type="text" name="ktp_number" class="form-control col-sm-9" id="ktp_number" value="{{$user->ktp_number}}">
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                    <input type="text" name="address" class="form-control col-sm-9" id="address" value="{{$user->address}}">
                </div>
                <div class="form-group row">
                    <label for="city_id" class="col-sm-3 col-form-label">Kota</label>
                    <select name="city_id" class="form-control col-sm-9" id="city_id" required>
                        <option selected>{{$user->city}}</option>
                        @foreach ($city as $acity)
                            <option value="{{$acity->id}}">{{$acity->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="bank_number" class="col-sm-3 col-form-label">No. Rekening</label>
                    <input type="text" name="bank_number" class="form-control col-sm-9" id="bank_number" value="{{$user->bank_number}}">
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-warning">Confirm</button>
                </div> 
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div> 
    </form>
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
    $("#profile_picture").change(function(){
        readURL(this);
    });
</script>
@endsection