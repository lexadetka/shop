
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователь</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Пользователь</li>
                        </ol>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-6 d-flex">
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary mr-1">Редактировать</a>
                        <form action="{{route('user.delete', $user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    </div>
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
                    <table class="table">

                        <tr>
                            <th scope="col">ID</th>
                            <td>{{$user->id}}</td>
                        </tr>
                        @if($user->surname)
                            <tr>
                                <th scope="col">Фамилия</th>
                                <td>{{$user->surname}}</td>
                            </tr>
                        @endif
                        <tr>
                            <th scope="col">Имя</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        @if($user->patronymic)
                            <tr>
                                <th scope="col">Отчество</th>
                                <td>{{$user->patronymic}}</td>
                            </tr>
                        @endif

                        <tr>
                            <th scope="col">E-mail</th>
                            <td>{{$user->email}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Дата создания</th>
                            @php($create_date = $user->created_at)
                            <td>{{$create_date->format('d-m-Y H:i')}}</td>
                        </tr>
                        @if($user->age)
                            <tr>
                                <th scope="col">Возраст</th>
                                <td>{{$user->age}}</td>
                            </tr>
                        @endif
                        @if($user->address)
                            <tr>
                                <th scope="col">Адрес</th>
                                <td>{{$user->address}}</td>
                            </tr>
                        @endif
                        @if($user->gender)
                            <tr>
                                <th scope="col">Пол</th>
                                <td>{{\App\Models\User::getGenders()[$user->gender]}}</td>
                            </tr>
                        @endif

                    </table>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection


