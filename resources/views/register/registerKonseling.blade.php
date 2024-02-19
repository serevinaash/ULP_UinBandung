@extends('register/layouts.main')

@section('container')
<div class="d-flex justify-content-center">
    <section id="jadwal" data-stellar-background-ratio="2">
        <br>
        <div class="col-md-12 text-center">
            <h3 class="wow fadeInUp" data-wow-delay="1.6s">Pendaftaran Layanan Tes Uji Kompetensi <br> ULP UIN Sunan Gunung Djati Bandung</h3>
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
                    <label id="whatsapp-label" for="whatsapp">Nomor WhatsApp Aktif</label>
                    <input type="tel" name="whatsapp" id="whatsapp" placeholder="Masukkan nomor WhatsApp aktif" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Tujuan Konseling</label>
                    <textarea id="counseling-purpose" class="form-control" name="counseling-purpose" placeholder="Masukkan tujuan konseling Anda"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>General Problem</label>
                    <input type="text" name="general-problem" id="general-problem" placeholder="Masukkan general problem Anda" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Pilih Hari Konseling</label>
                    <select id="day-selection" name="day-selection" class="form-control" required>
                      <option disabled selected value>Pilih hari</option>
                      <option value="senin">Senin</option>
                      <option value="selasa">Selasa</option>
                      <option value="rabu">Rabu</option>
                      <option value="kamis">Kamis</option>
                      <option value="jumat">Jumat</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Online / Offline</label>
                    <select id="online-offline" name="online-offline" class="form-control" required>
                      <option disabled selected value>Pilih mode</option>
                      <option value="online">Online</option>
                      <option value="offline">Offline</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Pilih Sesi Konseling</label>
                    <select id="session-selection" name="session-selection" class="form-control" required>
                      <option disabled selected value>Pilih sesi</option>
                      <!-- Add options for sesi here -->
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12 text-center">
                <div class="col-md-4 mx-auto text-center"> <!-- Added mx-auto class here -->
                   <center><button type="submit" id="submit" class="btn btn-primary btn-block">Submit Survey</button></center> 
                </div>
            </div>
            

		</form>
	</div>	
</div>
@endsection