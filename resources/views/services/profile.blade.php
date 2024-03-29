<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>bs5 edit profile account details - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style2.css" />
  </head>
  <body>
    <div class="container-xl px-4 mt-4">
      <!-- Navigasi halaman akun -->
      <nav class="nav nav-borders">
        <a
          class="nav-link active ms-0"
          href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details"
          target="__blank"
          >Profil</a
        >
        <a
          class="nav-link"
          href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"
          target="__blank"
          >Notifikasi</a
        >
      </nav>
      <hr class="mt-0 mb-4" />
      <div class="row">
        <div class="col-xl-4">
          <!-- Kartu gambar profil -->
          <div class="card mb-4 mb-xl-0">
            <div class="card-header">Foto Profil</div>
            <div class="card-body text-center">
              <!-- Gambar profil -->
              <img
                class="img-account-profile rounded-circle mb-2"
                src="http://bootdey.com/img/Content/avatar/avatar1.png"
                alt=""
              />
              <!-- Blok bantuan gambar profil -->
              <div class="small font-italic text-muted mb-4">
                JPG atau PNG tidak lebih dari 5 MB
              </div>
              <!-- Tombol unggah gambar profil -->
              <button class="btn btn-primary" type="button">
                Unggah gambar baru
              </button>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <!-- Kartu detail akun -->
          <div class="card mb-4">
            <div class="card-header">Informasi Pribadi</div>
            <div class="card-body">
              <form>
                @csrf
                <!-- Grup Form (nama lengkap) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputFullName"
                    >Nama Lengkap</label
                  >
                  <input
                    class="form-control"
                    id="inputFullName"
                    type="text"
                    placeholder="Masukkan nama lengkap"
                    value="{{ auth()->user()->nama_lengkap }}"
                  />
                </div>
                <!-- Grup Form (alamat email) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputEmailAddress"
                    >Alamat Email</label
                  >
                  <input
                    class="form-control"
                    id="inputEmailAddress"
                    type="email"
                    placeholder="Masukkan alamat email"
                    value="{{ auth()->user()->email }}"
                  />
                </div>
                <!-- Grup Form (lokasi) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputLocation">Lokasi</label>
                  <input
                    class="form-control"
                    id="inputLocation"
                    type="text"
                    placeholder="Masukkan lokasi"
                    value="San Francisco, CA"
                  />
                </div>
                <!-- Grup Form (tanggal lahir) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputBirthday"
                    >Tanggal Lahir</label
                  >
                  <input
                    class="form-control"
                    id="inputBirthday"
                    type="text"
                    name="birthday"
                    placeholder="Masukkan tanggal lahir"
                    value="{{ auth()->user()->tempat_tanggal_lahir }}"
                  />
                </div>
                <!-- Grup Form (agama) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputReligion">Agama</label>
                  <input
                    class="form-control"
                    id="inputReligion"
                    type="text"
                    placeholder="{{ auth()->user()->agama }}"
                  />
                </div>
                <!-- Baris Form -->
                <div class="row gx-3 mb-3">
                  <!-- Grup Form (jenis kelamin) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputGender"
                      >Jenis Kelamin</label
                    >
                    <select class="form-select" id="inputGender">
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>
                  </div>
                  <!-- Grup Form (nomor WhatsApp) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputWhatsApp"
                      >Nomor WhatsApp</label
                    >
                    <input
                      class="form-control"
                      id="inputWhatsApp"
                      type="tel"
                      placeholder="Masukkan nomor WhatsApp"
                      value="{{ auth()->user()->noWA}}"
                    />
                  </div>
                </div>
                <!-- Baris Form -->
                <div class="row gx-3 mb-3">
                  <!-- Grup Form (NIM) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputNIM">NIM</label>
                    <input
                      class="form-control"
                      id="inputNIM"
                      type="text"
                      placeholder="{{ auth()->user()->nim}}"
                    />
                  </div>
                  <!-- Grup Form (jurusan) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputJurusan">Jurusan</label>
                    <input
                      class="form-control"
                      id="inputJurusan"
                      type="text"
                      placeholder="{{ auth()->user()->jurusan }}"
                    />
                  </div>
                </div>
                <!-- Baris Form -->
                <div class="row gx-3 mb-3">
                  <!-- Grup Form (fakultas) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputFakultas"
                      >Fakultas</label
                    >
                    <input
                      class="form-control"
                      id="inputFakultas"
                      type="text"
                      placeholder="Masukkan fakultas"
                      value="{{ auth()->user()->fakultas }}"
                    />
                  </div>
                  <!-- Grup Form (tahun masuk) -->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputTahunMasuk"
                      >Tahun Masuk</label
                    >
                    <input
                      class="form-control"
                      id="inputTahunMasuk"
                      type="text"
                      placeholder="Masukkan tahun masuk"
                      value="{{ auth()->user()->tahun_masuk }}"
                    />
                  </div>
                </div>
                <!-- Grup Form (alamat tinggal) -->
                <div class="mb-3">
                  <label class="small mb-1" for="inputAlamatTinggal">Alamat Tinggal</label>
                  <textarea
                    class="form-control"
                    id="inputAlamatTinggal"
                    rows="3"
                    placeholder="Masukkan alamat tinggal"
                  >{{ auth()->user()->alamat }}</textarea>
                </div>
                
                <!-- Tombol Simpan Perubahan -->
                <button class="btn btn-primary" type="button">
                  Simpan Perubahan
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
