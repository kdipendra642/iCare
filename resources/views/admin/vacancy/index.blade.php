@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content')

@include('admin.common.flash_message')

<div class="row">
    <div class="col-sm-12">
       <section class="panel">
            <header class="panel-heading">
            Vacancy
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped" id="staffTable">
                    <thead>
                        <tr role="row">
                            <th style="width: 20px">#</th>
                            <th style="width: 150px">Name</th>
                            <th style="width: 200px">Description</th>
                            <th style="width: 20px">Email</th>
                            <th style="width: 20px">Phone</th>
                            <th style="width: 20px">Project Source</th>
                            <th style="width: 20px">Experience</th>
                            <th style="width: 20px">Status</th>
                            <th style="width: 20px">Action</th>
                            </tr>
                    </thead>
                    @foreach($vacancy as $career)
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <tr>
                                <td>{{$career->id}}</td>
                                <td>{{$career->name}}</td>
                                <td>{!! str_limit($career->reason, 50) !!}</td>
                                <td>{{$career->email}}</td>
                                <td>{{$career->phone}}</td>
                                <td>{{$career->project_source}}</td>
                                <td>{{$career->experience}}</td>
                                <td width="25px" class="hidden-phone ">
                                    @if($career->status == "1")
                                        <button class="btn btn-round btn-success btn-xs">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        @else
                                        <button class="btn btn-round btn-danger btn-xs">
                                            <i class="fa fa-minus-circle"></i>
                                        </button>
                                    @endif
                                </td>
                                <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.vacancy.edit',$career->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('admin.vacancy.delete',$career->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
          </div>
       </section>
    </div>
</div>

@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
    <script>
        $(document).ready( function () {
            $('#staffTable').DataTable();
        } );
    </script>
@endpush

<!-- contd.... -->