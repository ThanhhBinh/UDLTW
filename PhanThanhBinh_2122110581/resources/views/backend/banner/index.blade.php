@extends('layouts.admin')
@section('title','Quản lý Banner')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>QUẢN LÝ BANNER</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Quản lý banner</li>
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
          <a class="btn btn-sm btn-success" href="">
            <i class="fas fa-plus"></i>
            Thêm
        </a>
          <a href="#" class="btn btn-sm btn-danger">
            <i class="fas fa-trash"></i> Thùng rác
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <h3>Thiết kế form</h3>
        </div>
        <div class="col-md-9">
          <table class="table table-bordered table-striped">
            <thead>
              <th class="text-center" style="width: 20px">#</th>
              <th class="text-center" style="width: 120px">Hình</th>
              <th>Tên banner</th>
              <th>Link</th>
              <th>Mô tả</th>
              <th class="text-center" style="width: 220px">Chức năng</th>
              <th class="text-center" style="width: 20px">ID</th>
            </thead>
            <tbody>
              @foreach ($list as $row)
              <tr>
                <td class="text-center">
                    <input type="checkbox" id="checkId" value="1" name="checkId[]">
                </td>
                <td class="text-center">
                    <img src="{{asset('images/banner/'.$row->image)}}"class="img-fluid" alt="{{$row->image}}">
                </td>
                <td>{{$row->name}}</td>
                <td>{{$row->link}}</td>
                <td>{{$row->description}}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-success">
                        <i class="fas fa-toggle-on"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
                <td class="text-center">{{$row->id}}</td>
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