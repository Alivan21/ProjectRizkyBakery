@extends('layouts.admin.app')

@section('title', 'Form User')

@section('contents')
<form action="{{ route('user.create.store') }}"
    method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Form Tambah User</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                        value="{{ isset($user) ? $user->name : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                        value="{{ isset($user) ? $user->email : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                        value="{{ isset($user) ? $user->password : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Leveling</label>
                        <select name="level" id="level" class="custom-select">
                            <option value="" selected disabled hidden>-- Pilih Leveling --</option>
                            <option value="owner">Owner</option>
                            <option value="admin">Admin</option>
                            <option value="pelanggan">Pelanggan</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('user') }}" class="btn btn-danger" role="button" aria-disabled="true" style="margin-left:5px">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
