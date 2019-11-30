@extends('layouts.base')

@section('content')
    <div class="container mt-3" id="container">
        <div class="card md-3">
            <div class="card-body">
                    <form action="/borrowBook/public/topup" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <img src="" id="transfer-img-tag" class="img" width="200px" />
                            <input type="file" name="transfer_picture" class="form-control-file mb-3" id="transfer_picture" >                      
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
                    </form>
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
                $('#transfer-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#transfer_picture").change(function(){
        readURL(this);
    });
</script>
@endsection