<!DOCTYPE html>
<html lang="en">
<head>
    @include('tampilan_admin.template.header')
</head>
<body>

    <div class="wrapper">

    @include('tampilan_admin.template.navbar')
    @include('tampilan_admin.template.sidebar')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    </div> 
    {{-- end content wrapper --}}

    <footer class="main-footer">
        <strong>&copy; REGENT(MULAI PERJALANANMU)</a>.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Versi</b> 0.4 
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


</div>
{{-- end wrapper --}}

@include('tampilan_admin.template.footer')
</body>
</html>