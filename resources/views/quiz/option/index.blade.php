

@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-7">
                                <h4><b>Option Index table</b></h4>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 my-1"><b class="text-success">Search:</b></div>
                                    <div class="col-md-9"><input type="text" id="search" class="form-control" placeholder="Enter search here.."></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="10%" scope="col">SL NO</th>
                                    <th width="25%" scope="col">Question</th>
                                    <th width="25%" scope="col">Option</th>
                                    <th width="10%" scope="col">Points</th>
                                    <th width="15%" scope="col">Created_AT</th>
                                    <th width="15%" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($options as $option)
                            <tr>
                            <th scope="row">{{ $options->firstItem()+$loop->index }}</th>
                            <td>{{ $option->Question->question_text }}</td>
                            <td>{{ $option->option_text }}</td>
                            <td>{{ $option->points }}</td>
                            <td>{{ Carbon\Carbon::parse($option->created_at)->diffforHumans() }}</td>
                            <td>
                                <a href="{{route('quiz_option.edit', $option->id)}}" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{route('quiz_option.delete', $option->id)}}"  class="btn btn-danger">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                            {{ $options->links() }}
                    </div>
                </div>
            </div> 
            <div class="col-lg-3"><a href="{{route('quiz_option.create')}}" class="btn btn-success">Add Option</a></div>
        </div> 
    </div>
</div>
@endsection