@extends('base')<!--Kế thừa từ file view base--> 

@section('main')<!-- Định nghĩa cả giá trị default và cho phép lớp con extends giá trị đó--> 
<div class = "row">
    <div class = "col-sm-12">
        <div class = "col-sm-12">
        @if(session()-> get('success'))
            <div class = "alert alert-danger">
                {{session() -> get('success')}}
            </div>
        @endif
        </div>
        <h1 class = "display - 3">Danh sách liên hệ</h1>
        <div>
            <a style = "margin: 19px;" href = "{{ route('contacts.create') }}" class = "btn btn-primary"> Thêm mới </a>
        </div>
        <table class = "table table - striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Nghề nghiệp</td>
                    <td>Thành phố</td>
                    <td>Quốc gia</td>
                    <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact -> id}}</td>
                    <td>{{$contact -> first_name}} {{$contact -> last_name}}</td>
                    <td>{{$contact -> email}}</td>
                    <td>{{$contact -> job_title}}</td>
                    <td>{{$contact -> city}}</td>
                    <td>{{$contact -> country}}</td>
                    <td>
                        <a href="{{route ('contacts.edit', $contact -> id)}}" class = "btn btn-primary">Sửa</a>
                    </td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact -> id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type = "submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection