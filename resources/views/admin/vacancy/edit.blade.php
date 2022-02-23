@extends('admin.layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3>Applications</h3>
                </header>
                <div class="panel-body">
                    <div class="btn-group">
                    <a href="{{ route('admin.vacancy') }}" class="btn btn-info btn-xs"><i class="fa fa-arrow-left"> Back</i></a>
                </div>    
                <br>
                <br>  
                <div>
                    <span>Application from:</span>
                    <h3>
                        {{$vacancy->name}}
                    </h3>
                </div>                   
                <div class=" form">
                    <form class="form-horizontal" method="POST" action="{{route('admin.vacancy.update',$vacancy->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="status" class="control-label col-lg-2">Mark as read</label>
                            <div class="col-lg-10 col-sm-10">
                                <input type="checkbox"{{ $vacancy->status == "1" ? 'checked' : '' }} style="width: 20px" class="checkbox form-control" id="status" name="status">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="status" class="control-label col-lg-2">Resume</label>
                            <div class="col-lg-10 col-sm-10">
                                <a href="{{ route('admin.vacancy.download', $vacancy->resume) }}">{{$vacancy->resume}}</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="pull-right">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <a href="{{ route('admin.vacancy') }}" class="btn btn-default" type="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

    <!-- ck-editor -->
    <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script>
        function previewImage(input) {
            var file = $("input[type=file]").get(0).files[0];
            if(file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection