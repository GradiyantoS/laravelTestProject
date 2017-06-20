/**
 * Created by PhpStorm.
 * User: Gradiyanto
 * Date: 6/20/2017
 * Time: 9:08 PM
 */
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                </div>
                @foreach($data as $datas)
                    <div class="form-group">
                        <div for="name" class="col-md-4 ">{{$datas->title}}
                            {{$datas->image_url}}</div>
                        <div for="name" class="col-md-2 ">{{$datas->start_at}} |
                            {{$datas->end_at}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection