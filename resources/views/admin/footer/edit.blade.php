@extends('layouts.app')

@section('content')
<script src="https://cdn.tiny.cloud/1/rkzt5wrufs3ykx3pxhx5x644egbj7h3kh2oy3g0985s5r5kf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5 bg-light">
            <h3 class="">Edit Footer-Content</h3>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <form action="{{route('store-footer',[$data->slug])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Content</label>
                            <span class="required-field"> *</span>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ $data->name }}" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title for Page </label>
                            <span class="required-field"> *</span>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $data->title }}" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <label style="margin-top: 20px; font-weight: bolder;"  >Short Description</label>
                    <textarea id="short" name="short_des"  >{{ $data->short_des}}</textarea><br>
                    <label style="margin-top: 45px; font-weight: bolder; " >Long Description</label>
                    <textarea id="long" name="long_des"  >{{$data->long_des}}</textarea>

                    <div >
                        <button style="margin-top: 15px;float: right; "   type="submit" class="btn btn-primary  ">Submit</button>
                    </div>



            </form>
        </div>
    </div>
</div>

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script> --}}
<script>
    tinymce.init({
        selector: '#short'
    });
</script>
<script>
    tinymce.init({
        selector: '#long'
    });
</script>
<!--{{-- <script>-->
<!--    $('textarea#summernote').summernote({-->
<!--        placeholder: 'Write text here',-->
<!--        tabsize: 2,-->
<!--        height: 100,-->
<!--        toolbar: [-->
<!--            ['style', ['style']],-->
<!--            ['font', ['bold', 'italic', 'underline', 'clear']],-->
<!--            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],-->
<!--            ['fontname', ['fontname']],-->
<!--            ['fontsize', ['fontsize']],-->
<!--            ['color', ['color']],-->
<!--            ['para', ['ul', 'ol', 'paragraph']],-->
<!--            ['height', ['height']],-->
<!--            ['table', ['table']],-->
<!--            ['insert', ['link', 'picture', 'hr']],-->
<!--            ['view', ['fullscreen', 'codeview']],-->
<!--            ['help', ['help']]-->
<!--        ],-->
<!--    });-->
<!--</script> --}}-->


@endsection
