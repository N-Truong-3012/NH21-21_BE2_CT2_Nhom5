@extends('admin')
@section('content')
<?php $page = 'products';?>
  <!-- Content Wrapper. Contains page content -->
  <link rel="stylesheet" href="dist/css/phantrang.css">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session()->has('success'))
    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
      <div>
        <strong><i class="fa-solid fa-check"></i></strong>  {{ session()->get('success') }}
      </div>
    </div>
    @endif
    <!-- Main content -->
    <section class="content p-1">

      <!-- Default box -->
      <div class="card ">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">ID</th>
                      <th style="width: 10%">Name</th>
                      <th style="width: 10%">Image</th>
                      <th style="width: 8%">Price</th>
                      <th style="width: 5%">Type</th>
                      <th style="width: 5%">Manufacture</th>
                      <th style="width: 20%">Description</th>
                      <th style="width: 5%">Feature</th>
                      <th style="width: 15%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($data as $product)
                  <tr>
                      <td>{{ $product->id }}</td>
                      <td>
                          <a>{{ $product->Product_Name }}</a>
                      </td>
                      <td><img src="../../img/{{ $product->Image }}" style="width: 150px" alt=""></td>
                      <td class="project_progress">{{ number_format($product->Price,0,',','.') }} VND</td>
                      <td class="project_progress">{{ $product->Type_ID }}</td>
                      <td class="project_progress">{{ $product->Manu_ID }}</td>
                      <td class="project_progress">{{ $product->Description }}</td>
                      
                      <td class="project_progress">{{ $product->Feature }}</td>
                      <td class="project-actions text-center">
                          <a class="btn btn-info btn-sm" href="{{ route('product_edit',['id' => $product->id ]) }}">
                              <i class="fas fa-pencil-alt ">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('product_del',['id' => $product->id ]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>             
          </table>
          <div class="clearfix pt-3 pl-3">

          </div>

                
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection