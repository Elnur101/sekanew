@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Forms</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Basic Form</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Создать категорию</div>
                </div>
                <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group has-success">
                                    <label for="successInput">Название услуги</label>
                                    <input type="text" name="name" class="form-control" placeholder="Название категории"/>
                                    @error('name')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group has-success">
                                    <label for="successInput">Описание услуги</label>
                                    <input type="text" name="description" class="form-control" placeholder="Описание категории"/>
                                </div>
                                <div class="form-group has-success">
                                    <label for="successInput">Цена услуги</label>
                                    <input type="number" name="price" class="form-control" placeholder="Цена категории"/>
                                    @error('price')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Родительская категория</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Нет корневой категории</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @if($category->children->isNotEmpty())
                                                @include('admin.category.category-option', ['children'=>$category->children, 'prefix'=>'-'])
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
