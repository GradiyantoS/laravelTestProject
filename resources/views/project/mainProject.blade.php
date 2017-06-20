
/**
 * Created by PhpStorm.
 * User: Gradiyanto
 * Date: 6/20/2017
 * Time: 9:55 PM
 */
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project</div>
            </div>
            <div class="panel panel-default">
                <a href="{{ route('addProject') }}">Add New</a>
            </div>
            <table>
            <tr>
                <th>Nama Project</th>
                <th>Nomor Project</th>
                <th>Jenis Budidaya</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Image url</th>
                <th>Action</th>
            </tr>
            @foreach($data as $datas)
                <tr>
                <td>
                    {{$datas->title}}
                </td>
                    <td>
                        {{$datas->project_pattern}}
                    </td>
                    <td>
                        {{$datas->cultivation_id}}
                    </td>
                    <td>
                        {{$datas->start_at}}
                    </td>
                    <td>
                        {{$datas->end_at}}
                    </td>
                    <td>
                        {{$datas->image_url}}
                    </td>
                <td>
                    <a href="{{ URL::to('updateProject/' . $datas->id) }}">Update</a>
                    <a href="{{ URL::to('deleteProject/' . $datas->id) }}">Delete</a>
                </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
