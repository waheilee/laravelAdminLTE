@extends('admin_template')

@section('modules')

    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student as $students)
                <tr>
                    <th scope="row">{{$students->id}}</th>
                    <td>{{$students->name}}</td>
                    <td>{{$students->age}}</td>
                    <td>{{$students->sexMap($students->sex)}}</td>
                    <td>{{ $students->created_at }}</td>
                    <td>
                        <a href="{{url('detail',['id'=>$students->id])}}">详情</a>
                        <a href="{{url('update',['id'=>$students->id])}}">修改</a>
                        <a href="{{ url('delete', ['id' => $students->id]) }}"
                           onclick="if (confirm('确定要删除吗？') == false) return false;">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
