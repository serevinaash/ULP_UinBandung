@extends('register.layouts.main')

@section('container')
<div class="d-flex justify-content-center">
    <section id="jadwal" data-stellar-background-ratio="2">
        <br>
        <div class="col-md-12 text-center">
            <h3 class="wow fadeInUp" data-wow-delay="1.6s">Pendaftaran Layanan Tes Psikotes<br>ULP UIN Sunan Gunung Djati Bandung</h3>
        <br>
        </div>
        <div class="col-md-12">
            <div class="container2 mx-auto">
                <div class="row">
        <div class="form-wrap">	
		<form id="survey-form">
           
           
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label id="no-wa-label" for="no-wa">No Wa Aktif</label>
                        <input type="tel" name="no-wa" id="no-wa" placeholder="Masukkan No Wa Aktif" class="form-control" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jenis Psikotes</label>
                        <select id="jenis-psikotes" name="jenis-psikotes" class="form-control" required>
                            <option disabled selected value>Pilih jenis psikotes</option>
                            <option value="tes-kecerdasan">Tes Kecerdasan</option>
                            <option value="tes-minat-bakat">Tes Minat Bakat</option>
                            <option value="tes-kesiapan-sekolah">Tes Kesiapan Sekolah</option>
                            <option value="deteksi-dini-tumbuh-kembang">Deteksi Dini Tumbuh Kembang</option>
                            <option value="seleksi-karyawan">Seleksi Karyawan</option>
                            <option value="tes-kesulitan-belajar">Tes Kesulitan Belajar</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tujuan Psikotes</label>
                        <textarea id="psikotes-purpose" class="form-control" name="psikotes-purpose" placeholder="Masukkan tujuan Psikotes Anda"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Online / Offline</label>
                        <select id="online-offline" name="online-offline" class="form-control" required>
                            <option disabled selected value>Pilih opsi</option>
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label id="password-confirm-label" for="password-confirm">Konfirmasi Password</label>
                        <input type="password" name="password-confirm" id="password-confirm" placeholder="Konfirmasi Password" class="form-control" required>
                    </div>
                </div>
            </div>
            
<div class="row">
				<div class="col-md-4">
					<button type="submit" id="submit" class="btn btn-primary btn-block">Submit Survey</button>
				</div>
			</div>

		</form>
	</div>	
</div>
@endsection