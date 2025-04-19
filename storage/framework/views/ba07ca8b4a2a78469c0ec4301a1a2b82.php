<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="../../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>stt</th>
                                <th>Tiêu đề</th>
                                <th>Giới thiệu</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Ảnh </th>
                                <th>Thời gian tạo </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td>
                                        <?php echo e($item->sub_description ?? ''); ?>

                                    </td>
                                    <td><?php echo e($item->amount); ?></td>
                                    <td><?php echo e($item->price); ?></td>
                                    <td><img width="180px" height="auto"
                                            src="<?php echo e(\App\Helpers\ConstCommon::getLinkImageToStorage($item->image)); ?>"
                                            alt=""></td>
                                    <td><?php echo e(date(' H:i:s - d/m/Y', strtotime($item->created_at))); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('product.show', ['id' => $item->id])); ?>" class="btn btn-app">
                                            <i class="fas fa-book-open"></i> Xem
                                        </a>
                                        <a href="<?php echo e(route('product.edit', ['id' => $item->id])); ?>" class="btn btn-app">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <a href="<?php echo e(route('product.delete', ['id' => $item->id])); ?>" class="btn btn-app">
                                            <i class="fas fa-trash-alt"></i>Xóa
                                        </a>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                        
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\laragon\www\laravel\resources\views/admin/product/list.blade.php ENDPATH**/ ?>