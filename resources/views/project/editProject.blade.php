@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Project Manager</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{ route('AlterCultivation') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nama Project</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">ID budidaya</label>
                                <div class="col-md-6">
                                    <input id="cultivation_id" type="text" class="form-control" name="cultivation_id" value="{{$data->cultivation_id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Tanggal Mulai</label>
                                <div class="col-md-6">
                                    <input id="start_at" type="date" class="form-control" name="start_at" value="{{$data->start_at}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Tanggal Berakhir</label>
                                <div class="col-md-6">
                                    <input id="end_at" type="date" class="form-control" name="end_at" value="{{$data->end_at}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Image Url</label>
                                <div class="col-md-6">
                                    <input id="image_url" type="text" class="form-control" name="image_url" value="{{$data->image_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection