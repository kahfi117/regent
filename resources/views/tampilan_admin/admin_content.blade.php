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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">KONTEN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Konten</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<!-- <div class="card-header">
							<h3 class="card-title">DataTable with default features</h3>
						</div> -->
						<!-- /.card-header -->
						<div class="card-body">
							<a href="{{route('tambahContent')}}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Data</a>
							<table id="table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>JUDUL</th>
                    					<th>Deskripsi</th>
                    					<th>Foto</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
										<tr>
											<td scope="row">1</td>
                      						<td>JUDUL KONTEN</td>
                      						<td>Foto</td>
											<td>Keterangan</td>
											<td>
												<a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a> |
												<a href="#><i class="fas fa-edit"></i></a> |
												<a onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data Ini ?') " href="{{ route('content')}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->

    </div> 
    {{-- end content wrapper --}}

    <footer class="main-footer">
      <strong>&copy; REGENT (MULAI PERJALANANMU)</a>.</strong>
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