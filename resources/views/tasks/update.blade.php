@extends('master')
@section('title', 'Task Manager')
@section('name', 'Task Manger')
@section('content')
    <div>
        <h1 style="text-align: center; color: #1d68a7">Cập nhật công việc</h1>
        <form method="post" action="{{route('task.edit', ['id'=> $tasks->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên công việc</label>
                <input type="text" class="form-control" name="nameWork" value="{{$tasks->nameWork}}" required>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <input type="text" class="form-control" name="contents" value="{{$tasks->content}}" required>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label>Ngày hết </label>
                <input type="text" class="form-control" name="doomsday" value="{{$tasks->doomsday}}" required>
            </div>
            <button type="submit" class="btn-primary">Update</button>
            <a href="{{route('task.index')}}"><button class="btn-primary">Back</button></a>
        </form>
    </div>
    @endsection