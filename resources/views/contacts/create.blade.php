@ extends('base')<!--Kế thừa từ file view base--> 

@section('main')<!-- Định nghĩa cả giá trị default và cho phép lớp con extends giá trị đó--> 

<div class = "row">
    <div class = "col-sm-8 offset-sm-2">
        <h1 class = "display-3">Thêm liên hệ</h1>
        <div>
        @if ($errors -> any())
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors -> all () as $errors)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form method = "post"  action = "{{route('contacts.store')}}">
                @csrf
                <div class = "form-group">
                    <label for="first_name">Tên họ:</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>

                <div class = "form-group">
                    <label for="last_name">Tên đệm:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>

                <div class = "form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>

                <div class = "form-group">
                    <label for="city">Thành phố:</label>
                    <input type="text" class="form-control" name="city"/>
                </div>

                <div class = "form-group">
                    <label for="country">Quốc gia:</label>
                    <input type="text" class="form-control" name="country"/>
                </div>

                <div class = "form-group">
                    <label for="job_title">Nghề nghiệp:</label>
                    <input type="text" class="form-control" name="job_title"/>
                </div>
                <button type = "submit" class="btn btn-primary-outline">Thêm liên hệ</button>
            </form>
        </div>
    </div>
</div>
@endsection