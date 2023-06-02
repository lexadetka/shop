
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категория</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Категория</li>
                        </ol>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-6 d-flex">
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary mr-1">Редактировать</a>
                        <form action="{{route('product.delete', $product->id)}}" method="post">
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
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Название</th>
                            <td>{{$product->title}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Дата создания</th>
                            @php($create_date = $product->created_at)
                            <td>{{$create_date->format('d-m-Y H:i')}}</td>
                        </tr>

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


