@extends('template.dosen')

@section('content')


    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="header-title m-t-0 m-b-20">Daftar Kerja Praktek</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <form action="">
                            <div class="form-group row">
                                <label for="nim" class="col-sm-3 col-form-label col-form-label-lg">NIM</label>
                                <input type="text" class="form-control col-sm-4 form-control-lg" placeholder="NIM" name="nim">
                            </div>
                            <div class="form-group row">
                                <label for="nomor-surat" class="col-sm-3 col-form-label col-form-label-lg">Nomor Surat</label>
                                <input type="text" class="form-control col-sm-4 form-control-lg" placeholder="Nomor Surat" name="nomor-surat">
                            </div>

                            <div class="form-group row">
                                <label for="nama-perusahaan" class="col-sm-3 col-form-label col-form-label-lg">Nama Perusahaan</label>
                                <input type="text" class="form-control col-sm-4 form-control-lg" placeholder="Nama Perusahaan" name="nama-perusahaan">
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary col-md-2 offset-5">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

@endsection