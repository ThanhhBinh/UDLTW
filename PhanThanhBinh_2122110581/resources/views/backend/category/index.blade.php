@extends('layouts.admin')
@section('title', 'Quản lý danh mục')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>QUẢN LÝ DANH MỤC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý danh mục</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT -->

    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Tên danh mục</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name"
                                    class="form-control">
                                @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="parent_id">Danh mục cha</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0">None</option>
                                    {!! $htmlparentid !!}
                                </select>
                                <div class="mb-3">
                                    <label for="sort_order">Sắp xếp</label>
                                    <select name="sort_order" id="sort_order" class="form-control">
                                        <option value="0">None</option>
                                        {!! $htmlsortorder !!}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="name">Hình</label>
                                    <input type="file" name="image" id="image" class="form-control"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" name="create" class="btn btn-success">
                                    Thêm danh mục
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th class="text-center" style="width: 20px">#</th>
                                <th class="text-center" style="width: 120px">Hình</th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th class="text-center" style="width: 220px">Chức năng</th>
                                <th class="text-center" style="width: 20px">ID</th>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    @php
                                        $args = ['id' => $row->id];
                                    @endphp
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" id="checkId" value="1" name="checkId[]">
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ asset('images/category/' . $row->image) }}"class="img-fluid"
                                                alt="{{ $row->image }}">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->slug }}</td>

                                        <td class="text-center">
                                            @if ($row->status == 1)
                                                <a href="{{ route('admin.category.status', $args) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.category.status', $args) }}"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="fas fa-toggle-off"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('admin.category.show', $args) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.category.edit', $args) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.category.delete', $args) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">{{ $row->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.CONTENT -->
@endsection
