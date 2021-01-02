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
					<h1>Tambah Data</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Tambah Data</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<!-- Horizontal Form -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Form</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal" action="{{ route('prosesTambah')}}" method="POST">
							<div class="card-body">
								<div class="form-group row">
									<label class="col-sm-12 col-form-label">Judul</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" placeholder="JUDUL" name="tabel_nm">
									</div>
                                </div>
                                <div class="form-group row">
									<label class="col-sm-12 col-form-label">Foto</label>
									<div class="col-sm-12">
										<input type="file" class="form-control" placeholder="" name="tabel_nm">
									</div>
                                </div>
                                <div class="form-group row">
									<label class="col-sm-12 col-form-label">Deskripsi</label>
									<div class="col-sm-12">
										<textarea class="form-control" rows="10" placeholder="Deskripsi" name="tabel_nm">
                                        </textarea>
									</div>
								</div>	
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
                                <button type="submit" class="btn btn-info text-white">TAMBAH</button>
                                <a href="{{route('content')}}" class="btn btn-danger tect-white">KEMBALI</a>
							</div>
							<!-- /.card-footer -->
						</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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