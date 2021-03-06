@extends('layouts.seller')
@section('title')
    Pengaturan Toko
@endsection
@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Pengaturan Toko</h2>
    <p class="dashboard-subtitle">
      Jadikan toko itu menguntungkan
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
                    <label for="storeName">Nama Toko</label>
                    <input
                      type="text"
                      class="form-control"
                      id="storeName"
                      aria-describedby="emailHelp"
                      name="storeName"
                      value="Papel La Casa"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category">Kategori</label>
                    <select
                      name="category"
                      id="category"
                      class="form-control"
                    >
                      <option value="Furniture">Furniture</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="is_store_open">Status Toko</label>
                    <p class="text-muted">
                      Apakah saat ini toko Anda buka?
                    </p>
                    <div
                      class="custom-control custom-radio custom-control-inline"
                    >
                      <input
                        class="custom-control-input"
                        type="radio"
                        name="is_store_open"
                        id="openStoreTrue"
                        value="true"
                        checked
                      />
                      <label
                        class="custom-control-label"
                        for="openStoreTrue"
                        >Buka</label
                      >
                    </div>
                    <div
                      class="custom-control custom-radio custom-control-inline"
                    >
                      <input
                        class="custom-control-input"
                        type="radio"
                        name="is_store_open"
                        id="openStoreFalse"
                        value="false"
                      />
                      <label
                        makasih
                        class="custom-control-label"
                        for="openStoreFalse"
                        >Tutup Sementara</label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col text-right">
                  <button
                    type="submit"
                    class="btn btn-success px-5"
                  >
                    Simpan Sekarang
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection