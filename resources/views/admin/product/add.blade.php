@extends('admin.index')
@section('css')
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($title)
                            {{ $title }}
                        @else
                            Chưa có tiêu đề cho trang này
                        @endisset
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('product.addPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}"
                                        placeholder="Nhập tiêu đề...">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input type="file" name="img" class="form-control" value="{{old('img')}}"
                                        placeholder="Nhập tiêu đề...">
                                    @error('img')
                                        <div class="alert alert-danger">{{ $errors->first('img') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select name="id_category" class="form-control">
                                        @foreach ($dataCategory as $key => $item)
                                            <option value="{{ $item->id }}"> {{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_category')
                                        <div class="alert alert-danger">{{ $errors->first('id_category') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Số lượng hiện tại</label>
                                    <input type="text" name="amount" class="form-control" value="{{old('amount')}}"
                                        placeholder="Nhập.">
                                    @error('amount')
                                        <div class="alert alert-danger">{{ $errors->first('amount') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="price" class="form-control" value="{{old('price')}}"
                                        placeholder="Nhập.">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Giảm giá (%)</label>
                                    <select name="discount" class="form-control">
                                        <option value="">Không giảm giá</option>
                                        @for ($i = 10; $i <= 100; $i += 10)
                                            <option value="{{ $i }}" {{ old('discount') == $i ? 'selected' : '' }}>
                                                {{ $i }}%
                                            </option>
                                        @endfor
                                    </select>
                                    @error('discount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Nội dung giới thiệu</label>
                                    <input type="text" name="sub_description" class="form-control"
                                        value="{{old('sub_description')}}" placeholder="Nhập.">
                                    @error('sub_description')
                                        <div class="alert alert-danger">{{ $errors->first('sub_description') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Nội dung chính</label>
                                    <textarea name="description" rows="3"
                                        id="summernoteDescription">{{old('description')}}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
        $(function () {
            // Summernote
            $('#summernoteDescription').summernote();

            $('#summernotecontent_pre').summernote();
        })

        let noimage =
            "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
@endsection