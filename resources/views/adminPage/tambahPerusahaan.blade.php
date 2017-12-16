@extends('adminPage.master')

@section('title')
    Perusahaan Baru
    @endsection
@section('body-title')
    Manage Perusahaan
    @endsection
@section('body-subtitle')
    Tambah Perusahaan Baru
    @endsection
@section('body')
    <section class="content">
        <form method="POST" action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Perusahaan Baru</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan : </label>
                                    <input type="text" class="form-control" id="nama_perusahaan" placeholder="Input nama perusahan" name="nama_perusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemilik">Nama Pemilik : </label>
                                    <input type="text" class="form-control" id="nama_pemilik" placeholder="Input pemilik perusahan" name="nama_pemilik">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_perusahaan">Alamat Perusahaan : </label>
                                    <input type="text" class="form-control" id="alamat_perusahaan" placeholder="Input alamat perusahan" name="alamat_perusahaan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Pemilik Perusahaan Baru</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama_perusahaan">username : </label>
                                    <input type="text" class="form-control" id="nama_perusahaan" placeholder="Input nama perusahan" name="username_pemilik_perusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="email_pemilik">Email Pemilik : </label>
                                    <input type="text" class="form-control" id="nama_pemilik" placeholder="Input email pemilik perusahan" name="email_pemilik">
                                </div>
                                <div class="form-group">
                                    <label for="password_pemilik">Password : </label>
                                    <input type="password" class="form-control" id="alamat_perusahaan" placeholder="Input password pemilik perusahan" name="password_pemilik">
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password : </label>
                                    <input type="password" class="form-control" id="alamat_perusahaan" placeholder="konfirmasi password" name="confirmpassword">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn-block btn-lg bg-green">Submit</button>
                </div>
            </div>
        </form>
    </section>
    @endsection