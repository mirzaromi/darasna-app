@extends('admin.template')
@section('container')
    <div class="col-md-12">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-book-reader"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Post</span>
                        <span class="info-box-number">{{ $post }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Like</span>
                        <span class="info-box-number">{{ $like }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-eye"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah View</span>
                        <span class="info-box-number">{{ $view }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-comments"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Comment</span>
                        <span class="info-box-number">{{ $comment }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
