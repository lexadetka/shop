
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать категорию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Редактировать категорию</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary ">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('user.update', $user->id)}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="card-body pb-0">
                                    <div class="form-group">
                                        <input type="text" value="{{$user->name}}" name="name" placeholder="Имя" class="form-control">
                                        @error('name')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$user->surname}}" name="surname" placeholder="Фамилия" class="form-control">
                                        @error('surname')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$user->patronymic}}" name="patronymic" placeholder="Отчество" class="form-control">
                                        @error('patronymic')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$user->age}}" name="age" placeholder="Возраст" class="form-control">
                                        @error('age')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$user->address}}" name="address" placeholder="Адрес" class="form-control">
                                        @error('address')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$user->gender}}" name="address" placeholder="Адрес" class="form-control">
                                        @error('address')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <select name="gender" class="custom-select form-control">
                                            <option {{$user->gender == 1 ? 'selected':'' }} value="1">Мужской</option>
                                            <option {{$user->gender == 2 ? 'selected':'' }} value="2">Женский</option>
                                        </select>
                                        @error('gender')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection


