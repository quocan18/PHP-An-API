@extends('base')<!--Kế thừa từ file view base--> 

@section('main')<!-- Định nghĩa cả giá trị default và cho phép lớp con extends giá trị đó--> 
<div class = "row">
    <div>
        <h1 class = "display-3">Cập nhật thông tin</h1>
        
        <!--
            Thông báo nếu phát hiện lỗi
        -->
        @if($errors -> any())
        <div class = "alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
        @endif <!--Complie giống PHP-->

        <!--
            Form để cập nhật thông tin theo id của người dùng
        -->
        <form action="post" action =" {{route ('contacts.update', $contact -> id)}} ">
            @method ('PATCH')
            @csrf <!--Chống giả mạo website-->
            <div class = "form-group">
                <label for = "first_name"> Tên họ: </label>
                <input type = "text" class = "form-control" name = "first_name" value = "{{$contact -> first_name}}"/>
            </div>

            <div class = "form-group">
                <label for = "last_name"> Tên đệm: </label>
                <input type = "text" class = "form-control" name = "last_name" value = "{{$contact -> last_name}}"/>
            </div>

            <div class = "form-group">
                <label for = "email"> Email: </label>
                <input type = "text" class = "form-control" name = "email" value = "{{$contact -> email}}"/>
            </div>

            <div class = "form-group">
                <label for = "city"> Thành phố: </label>
                <input type = "text" class = "form-control" name = "city" value = "{{$contact -> city}}"/>
            </div>

            <div class = "form-group">
                <label for = "country"> Quốc gia: </label>
                <input type = "text" class = "form-control" name = "country" value = "{{$contact -> country}}"/>
            </div>

            <div class = "form-group">
                <label for = "job_title"> Nghề nghiệp: </label>
                <input type = "text" class = "form-control" name = "job_title" value = "{{$contact -> job_title}}"/>
            </div>
            <button type = "submit" class = "btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection