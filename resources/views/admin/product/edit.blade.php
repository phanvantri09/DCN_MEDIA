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
                    <form action="{{ route('product.editPost', ['id'=>$id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name',$data->name)}}" placeholder="Nhập tiêu đề...">
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
                                    <input type="file" name="img" class="form-control" value="{{old('img')}}" placeholder="Nhập tiêu đề...">
                                    @error('img')
                                    <div class="alert alert-danger">{{ $errors->first('img') }}</div>
                                    @enderror
                                </div>
                                <img width="180px" height="auto" src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($data->img)}}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Thời gian tạo</label>
                                    <input type="date" name="time_create" class="form-control" value="{{old('time_create',$data->time_create)}}" placeholder="Nhập tiêu đề...">
                                    @error('time_create')
                                    <div class="alert alert-danger">{{ $errors->first('time_create') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link YTB</label>
                                    <input type="text" name="link_ytb" class="form-control" value="{{old('link_ytb',$data->link_ytb)}}" placeholder="Nhập Link.">
                                    @error('link_ytb')
                                    <div class="alert alert-danger">{{ $errors->first('link_ytb') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label> link_ytb_topic</label>
                                    <input type="text" name="link_ytb_topic" class="form-control" value="{{old('link_ytb_topic',$data->link_ytb_topic)}}" placeholder="Nhập Link.">
                                    @error('link_ytb_topic')
                                    <div class="alert alert-danger">{{ $errors->first('link_ytb_topic') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_zing</label>
                                    <input type="text" name="link_zing" class="form-control" value="{{old('link_zing',$data->link_zing)}}" placeholder="Nhập Link.">
                                    @error('link_zing')
                                    <div class="alert alert-danger">{{ $errors->first('link_zing') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_spotify</label>
                                    <input type="text" name="link_spotify" class="form-control" value="{{old('link_spotify',$data->link_spotify)}}" placeholder="Nhập Link.">
                                    @error('link_spotify')
                                    <div class="alert alert-danger">{{ $errors->first('link_spotify') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_spotify nhỏ</label>
                                    <input type="text" name="link_apple" class="form-control" value="{{old('link_apple',$data->link_apple)}}" placeholder="Nhập Link.">
                                    @error('link_apple')
                                    <div class="alert alert-danger">{{ $errors->first('link_apple') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_NCT</label>
                                    <input type="text" name="link_NCT" class="form-control" value="{{old('link_NCT',$data->link_NCT)}}" placeholder="Nhập Link.">
                                    @error('link_NCT')
                                    <div class="alert alert-danger">{{ $errors->first('link_NCT') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_tiktok</label>
                                    <input type="text" name="link_tiktok" class="form-control" value="{{old('link_tiktok',$data->link_tiktok)}}" placeholder="Nhập Link.">
                                    @error('link_tiktok')
                                    <div class="alert alert-danger">{{ $errors->first('link_tiktok') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Link link_facebook</label>
                                    <input type="text" name="link_ytb" class="form-control" value="{{old('link_facebook',$data->link_facebook)}}" placeholder="Nhập Link.">
                                    @error('link_facebook')
                                    <div class="alert alert-danger">{{ $errors->first('link_facebook') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select name="id_category" class="form-control">
                                        @foreach ($category as $key => $item)
                                            <option value="{{ $item->id }}"> {{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_category')
                                    <div class="alert alert-danger">{{ $errors->first('id_category') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <div class="custom-file">
                                        <input onchange="readURL(this)" name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex flex-row mt-4">
                                    <img id="img-preview" style="width: 200px;height: 200px; object-fit: cover;" class="rounded" src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Thông tim xem trước</label>
                                    <textarea name="content_pre" rows="3" id="summernotecontent_pre">{{old('content_pre')}}</textarea>
                                    @error('content_pre')
                                    <div class="alert alert-danger">{{ $errors->first('content_pre') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Nội dung chính</label>
                                    <textarea name="content" rows="3" id="summernoteDescription">{{old('content',$data->content)}}</textarea>
                                    @error('content')
                                    <div class="alert alert-danger">{{ $errors->first('content') }}</div>
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
