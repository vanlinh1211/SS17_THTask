@extends('master')
@section('title', 'Task Manager')
@section('name', 'Task Manager')
@section('content')
    <div>
        <table class="table">
            <a href="{{route('task.create')}}">
                <button class="btn-primary">Create</button>
            </a>
            <thead class="thead-dark">
            <tr class="form-group">
                <th scope="col">ID</th>
                <th scope="col">Tên Công Việc</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Ngày Hết Hạn</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($tasks as $key => $task)
                <tr>
                    <th>{{++$key}}</th>
                    <th>{{$task->nameWork}}</th>
                    <th>{{$task->content}}</th>
                    <th><img src="{{asset('storage/'.$task->image)}}" style="width:150px "></th>
                    <th>{{$task->doomsday}}</th>
                    <th>
                        <a href="{{route('task.destroy', ['id'=> $task->id])}}">
                            <button class="btn-outline-danger"
                                    onclick="return confirm('Do you want delete user {{$task->nameWork}}?')">Delete
                            </button>
                        </a>
                        <a href="{{route('task.update', ['id'=>$task->id])}}">
                            <button class="btn-outline-info">Edit</button>
                        </a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
