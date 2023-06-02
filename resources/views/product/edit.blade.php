
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
                            <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body pb-0">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}" placeholder="Введите название">
                                        @error('title')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" placeholder="Введите описание">
                                        @error('description')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Контент</label>
                                        <textarea class="form-control" name="content" placeholder="Добавьте контент" rows="10">{{$product->content}}</textarea>
                                        @error('content')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Цена</label>
                                        <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Введите цену">
                                        @error('price')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Количество</label>
                                        <input type="number" class="form-control" id="count" name="count" value="{{$product->count}}" placeholder="Введите количество">
                                        @error('count')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Превью</label>
                                        <div class="w-25 pb-3">
                                            <img src="{{asset('storage/'.$product->preview_image)}}" alt="Превью" style="width: 500px">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile" >
                                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузка</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="category select2 form-control" name="category_id" data-placeholder="Выбрать категорию" style="width: 100%;">
                                            <option disabled selected="selected" >Выберите категорию</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                {{$category->id == $product->category_id? 'selected':''}}
                                                >{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="tags select2 form-control" name="tags[]" multiple="multiple" data-placeholder="Выбрать тэги" style="width: 100%;">
                                            @foreach($tags as $tag)
                                                <option
                                                    {{is_array($product->tags->pluck('id')->toArray())&&in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected':''}}
                                                    value="{{$tag->id}}">{{$tag->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="tags select2 form-control" name="colors[]" multiple="multiple" data-placeholder="Выбрать цвет" style="width: 100%;">
                                            @foreach($colors as $color)
                                                <option
                                                    {{is_array($product->colors->pluck('id')->toArray())&&in_array($color->id, $product->colors->pluck('id')->toArray()) ? 'selected':''}}
                                                    value="{{$color->id}}">{{$color->value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
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


