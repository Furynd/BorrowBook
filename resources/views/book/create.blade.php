@extends('layouts.base')

@section('content')
    <form action="/borrowBook/public/book" method="post" enctype="multipart/form-data">
        @csrf
        <div id ="container" class="mx-auto mt-3">
            <div class="row justify-content-center ">
                <div class="col-sm-2">
                    <img src="" id="cover_picture_tag" class="img" width="200px" />
                    <input type="file" name="cover_picture" class="form-control-file mb-3" id="cover_picture" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="book_name">Judul Buku</label>
                        <input type="text" name="book_name" id="book_name" class="form-control mb-2" required>
            
                        <label for="author">Pengarang</label>
                        <input type="text" name="author" id="author" class="form-control mb-2" required>
                        
                        <label for="price">Harga Beli</label>
                        <input type="text" name="price" class="form-control mb-2" id="price" required>   
                    </div>
            
                    <div class="form-group">
                        <label for="summary">Sinopsis</label>
                        <textarea name="summary" class="form-control" id="summary" cols="30" rows="5" placeholder="Enter Description of book"></textarea>
                    </div>
            
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Tambah Buku</button>
                        {{-- <a href="/" class="btn btn-outline-warning mx-2">Cancel</a> --}}
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
        </div>
    </form>
@endsection

@section('scripts')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#cover_picture_tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#cover_picture").change(function(){
        readURL(this);
    });
</script>
@endsection