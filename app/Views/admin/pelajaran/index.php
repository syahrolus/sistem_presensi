<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="title ml-5 pt-3">
    <h1>Daftar Pelajaran</h1>
</div>

<div class="container">
    <div class="card m-4">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Pengajar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Pengajar</td>
                    </tr>
                    <tr>
                        <td>No</td>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Pengajar</td>
                    </tr>
                    <tr>
                        <td>No</td>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Pengajar</td>
                    </tr>
                    <tr>
                        <td>No</td>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Pengajar</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?= $this->endSection(); ?>