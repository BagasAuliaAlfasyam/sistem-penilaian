@extends('dashboard.home-template')

@section('content-section')
    <section class="main-content">
      <div class="card">
        <div class="card-header">
          <h1>hello world</h1>
        </div>

        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="Nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="Nama" name="nama">
            </div>

            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="number" class="form-control" id="nis" name="nis">
            </div>

            <div class="mb-3">
              <label for="Nama_ortu" class="form-label">Nama Orang Tua</label>
              <input type="text" class="form-control" id="Nama_ortu" name="nama_ortu">
            </div>

            <div class="mb-3">
              <label for="no_hp_ortu" class="form-label">Nomor HP Orang Tua</label>
              <input type="tel" class="form-control" id="no_hp_ortu" name="no_hp_ortu">
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="Nama" name="alamat" cols="30"></textarea>
            </div>

            <div class="mb-3">
              <label for="wali_kelas" class="form-label">Wali Kelas</label>
              <input type="text" class="form-control" id="wali_kelas" name="wali_kelas">
            </div>

            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="Nama" name="kelas">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>
@endsection