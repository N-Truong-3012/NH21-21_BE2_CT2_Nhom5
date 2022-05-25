@extends('admin')
@section('content')
<?php $page = 'manufactures';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Hãng Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">Manufactures Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">      
        @csrf
      <div class="row p-1">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="id" value="{{ $manubyid-> id }}">
                </div>
                <label for="inputName">Tên Loại</label>
                <input type="text" name="Manu_Name" id="inputName" class="form-control" placeholder="Nhập tên hãng"  value= "{{ $manubyid->Manu_Name }}" >
                @if($errors->has('Manu_Name'))
                    {{$errors->first('Manu_Name') }}
                @endif
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row p-1">
        <div class="col-12">
          <a href="{{ route('manu') }}" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Manufactures" class="btn btn-success float-right" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection