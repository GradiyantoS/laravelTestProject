
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cultivation</div>
                </div>

                <div class="panel panel-default">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('searchCultivation') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="search" class="col-md-4 control-label">Search</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>

                    </form>
                    <a href="{{ route('addCultivation') }}">Add New</a>
                </div>
                <table  align="center">
                    <tr>
                        <th>Nama Budidaya</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $datas)
                    <tr>
                        <td> {{$datas->description}}</td>
                        <td>
                            <a href="{{ URL::to('updateCultivation/' . $datas->id) }}">Update</a>
                            <a href="{{ URL::to('deleteCultivation/' . $datas->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
