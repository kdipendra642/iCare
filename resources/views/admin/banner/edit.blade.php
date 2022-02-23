@extends('admin.layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3>{{ $_panel }}</h3>
                </header>
                <div class="panel-body">
                    <div class="btn-group">
                    <a href="{{ route($_base_route) }}" class="btn btn-info btn-xs"><i class="fa fa-arrow-left"> Back</i></a>
                </div>    
                <br>
                <br>                    
                <div class=" form">
                    <form class="form-horizontal" method="POST" action="{{route($_base_route.'.update',$banner->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Banner Title(<em style="color:red">*</em>)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="title" name="title" value="{{ $banner->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block" style="color:red">
                                        * <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="status" class="control-label col-lg-2">Status</label>
                            <div class="col-lg-10 col-sm-10">
                                <input type="checkbox"{{ $banner->status == "1" ? 'checked' : '' }} style="width: 20px" class="checkbox form-control" id="status" name="status">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="pull-right">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <a href="{{ route($_base_route) }}" class="btn btn-default" type="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection