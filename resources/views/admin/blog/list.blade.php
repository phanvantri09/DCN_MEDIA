@extends('admin.index')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        {{-- @isset($title)
                            {{ $title }}
                        @else
                            Chưa có tiêu đề cho trang này
                        @endisset --}}
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>stt</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung giới thiệu</th>
                                <th>Nội dung </th>
                                <th>Ảnh </th>
                                <th>Thời gian tạo </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{!! $item->content_pre !!}</td>
                                    <td>{!!$item->content!!}</td>
                                    <td><img width="180px" height="auto" src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($item->img)}}" alt=""></td>
                                    <td>{{ date(' H:i:s - d/m/Y', strtotime($item->created_at))}}</td>
                                    <td>
                                        <a href="{{ route('blog.show', ['id'=>$item->id]) }}" class="btn btn-app">
                                            <i class="fas fa-book-open"></i> Xem
                                        </a>
                                        <a  href="{{ route('blog.edit', ['id'=>$item->id]) }}" class="btn btn-app">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <a href="{{ route('blog.delete', ['id'=>$item->id]) }}" class="btn btn-app">
                                            <i class="fas fa-trash-alt"></i>Xóa
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                <th>acttion</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('scripts')
    <script src="../../admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../admin/plugins/jszip/jszip.min.js"></script>
    <script src="../../admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
