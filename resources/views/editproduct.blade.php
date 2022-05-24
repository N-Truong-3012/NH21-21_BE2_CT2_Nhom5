@extends('admin')
@section('content')
<?php $page = 'edit';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content p-1">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">      
      @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Tên Sản Phẩm</label>
                            <input type="text" name="Product_Name" id="inputName" class="form-control" placeholder="Nhập tên sản phẩm" value="{{$suasp->Product_Name}}">
                            @if($errors->has('Product_Name'))
                                <p style="color:red"> {{$errors->first('Product_Name') }} !!!</p>
                            @endif
                        </div>
                       
                        <div class="form-group">
                            <label for="inputType">Loại Sản Phẩm</label>
                            <select id="inputType" name="Type_ID" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            @foreach($allprotype as $protype)
                                <?php $selected = $protype->Type_ID == $suasp->Type_ID ? 'selected' : ''; ?>
                                <option {{ $selected }} value ='{{ $protype -> Type_ID }}'> {{ $protype -> Type_Name  }}</option>
                            @endforeach
                            </select>
                            @if($errors->has('Type_ID'))
                                <p style="color:red"> {{$errors->first('Type_ID') }} !!!</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="inputType">Hãng Sản Phẩm</label>
                            <select id="inputType" name="Manu_ID" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            @foreach($allmanu as $manu)
                                <?php $selected = $manu->Manu_ID == $suasp->Manu_ID ? 'selected' : ''; ?>
                                <option {{ $selected }} value ='{{ $manu -> Manu_ID }}'> {{ $manu -> Manu_Name  }}</option>
                            @endforeach
                            </select>
                            @if($errors->has('Manu_ID'))
                                <p style="color:red"> {{$errors->first('Manu_ID') }} !!!</p>
                            @endif
    
                        </div>
                        <div class="form-group">
                            <label for="inputPrice">Giá Sản Phẩm</label>
                            <input type="number" name="Price" id="inputPrice" class="form-control" placeholder="Nhập giá sản phẩm" value="{{ $suasp -> Price  }}">
                            @if($errors->has('Price'))
                            <p style="color:red"> {{$errors->first('Price') }} !!!</p>
                            @endif
                        </div>
  

                        <div class="form-group">
                                <label for="inputImg">Ảnh Sản Phẩm</label>
                                <div class="row">
                                    <div class="col-9"><input type="text" name="Image" id="inputImage" class="form-control"  value="{{ $suasp -> Image  }}" readonly ></div>
                                    <div class="col-3"><a  class="btn btn-primary" href="#modal-file" data-toggle="modal">Upload</a></div>
                                </div>
                                @if($errors->has('Image'))
                                    <p style="color:red"> {{$errors->first('Image') }} !!!</p>
                                @endif
                        </div>
                        <div class="form-group">
                                <label for="inputDescription">Mô Tả</label>
                                <textarea id="content" name="Description" class="form-control" >{{ $suasp -> Description  }}</textarea>
                        </div>
                        <div class="form-group">
                                <label for="inputPrice">Feature</label><br>
                                <input type="checkbox" value="0" name="Feature" ischecked> Nổi Bật</input>
                                <input type="checkbox" value="1"  name="Feature">Không</input>
                        </div>
                        <div class="form-group">
                            <label for="quantity_stock">Tồn Kho</label>
                            <input type="number" name="Quantity_Stock" id="quantity_stock" class="form-control" placeholder="Nhập SL Tồn Kho" value="{{ $suasp -> Quantity_Stock  }}">
                            @if($errors->has('Quantity_stock'))
                            <p style="color:red"> {{$errors->first('Quantity_stock') }} !!!</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="quantity_sold">SL Bán</label>
                            <input type="number" name="Quantity_Sold" id="quantity_sold" class="form-control" value="{{ $suasp -> Quantity_Sold  }}" >
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="row p-1">
            <div class="col-12">
                <a href="{{ route('products') }}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update Product" class="btn btn-success float-right" >
            </div>
        </div>
        </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="modal-file">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quản lý file</h5>
                </div>
                <div class="modal-body">
                    <iframe src="{{ asset('file/dialog.php?akey=y6iFg3JIBfdH5mtfDU8oPWCVR6vfktSMgkTK8DiZfpE&field_id=inputImage') }}" style="width:100%;height:500px;border:0;overflow-y:auto"></iframe>
                </div>
            
            </div>
        </div>
    </div>

    <script src="{{ asset('/admin/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/admin/tinymce/config.js') }}"></script>
@stop