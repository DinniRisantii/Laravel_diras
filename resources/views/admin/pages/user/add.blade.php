@extends('admin.main')
@section('title','User Tambah')
@section('content')
<h1>User <small class="text-muted">Tambah</small></h1>
<hr>

<div class="row">
	<div class="col-md-6">
		<form method="POST" action="{{ route('admin.user.add') }}">
			{{ csrf_field() }}
			<div class="card">
				<div class="card-header">
					<h5>Buat User Baru</h5>
				</div> <!-- End card header -->

				<div class="card-body">

					<div class="form-group form-label-group">
						<input type="text" name="name"
						class="form-control"
						value="{{ old('name') }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
					</div><!-- End form group -->

					<div class="form-group form-label-group">
						<input type="text" name="email"
						class="form-control"
						value="{{ old('email') }}"
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
					</div><!-- End form group -->

					<div class="form-group form-label-group">
						<input type="password" name="password"
						class="form-control"
						value="{{ old('password') }}"
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
					</div><!-- End form group -->

					<div class="form-group form-label-group">
						<input type="password" name="repassword"
						class="form-control"
						value="{{ old('repassword') }}"
						id="iRePassword" placeholder="RePassword" required>
						<label for="iRePassword">Password</label>
					</div><!-- End form group -->

					<div class="form-group form-label-group">
						<select class="form-control" name="akses">
							<option value="">Pilih Akses Sebagai :</option>
							<option value="opetrator">Operator</option>
							<option value="admin">Administrator</option>
						</select>
					</div><!-- End form group -->

				</div><!-- End card body -->

				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>

			</div><!-- End card  -->
		</form>
	</div>
</div>
@endsection