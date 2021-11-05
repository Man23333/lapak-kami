@extends('layouts.seller')
@section('title')
Tambahkan Produk Baru
@endsection
@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Tambahkan Produk Baru</h2>
    <p class="dashboard-subtitle">
      Buat produk Anda sendiri
    </p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <form action="">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      aria-describedby="name"
                      name="storeName"
                      value="Papel La Casa"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="price">Harga</label>
                    <input
                      type="number"
                      class="form-control"
                      id="price"
                      aria-describedby="price"
                      name="price"
                      value="200"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="categories_id" class="form-control">
                      <option value=""></option>
                     
                        <option value=""></option>
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Keterangan</label>
                    <textarea
                      name="descrioption"
                      id="editor"
                      cols="30"
                      rows="4"
                      class="form-control"
                    >
The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                    </textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="thumbnails">Gambar kecil</label>
                    <input
                      type="file"
                      multiple
                      class="form-control pt-1"
                      id="thumbnails"
                      aria-describedby="thumbnails"
                      name="thumbnails"
                    />
                    <small class="text-muted">
                      Kamu dapat memilih lebih dari satu file
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <button
                type="submit"
                class="btn btn-success btn-block px-5"
              >
                Simpan
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush