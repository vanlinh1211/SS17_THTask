@extends('master')
@section('title', 'Task Manager')
@section('name', 'Task Manager')
@section('content')
    <div>
        <h1 style="color: #1d68a7; text-align: center">Thêm mới công việc</h1>
    </div>
    <form method="post" action="{{route('task.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tên công việc</label>
            <input type="text" name="nameWork" class="form-control" placeholder="Tên công việc" required>
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <input type="text" name="contents" class="form-control" placeholder="Nội dung">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Ảnh</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Ngày hết hạn</label>
            <input type="date" name="doomsday" class="form-control" placeholder="Ngày hết hạn" required>
        </div>
        <div>
            <button type="submit" class="btn-primary">Submit</button>
            <a href="{{route('task.index')}}">
                <button class="btn-primary">Cancel</button>
            </a>
        </div>

    </form>

@endsection