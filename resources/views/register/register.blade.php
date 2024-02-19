<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Wizard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
    />
    <link rel="stylesheet" href="../css/style3.css" />
    <!-- Link to the external CSS file -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div id="step1">
        <h2>Daftar akun ULP</h2>
        <p>
          sudah punya akun? <a><u>masuk yuk!</u></a>
        </p>
        <br />
        <br />
        <a class="back"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
        <form action="">
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Masukan Email"
            required
          />
          <p>
            <img src="../images/info-rounded.svg" alt="" class="seru" />pastikan
            email kamu aktif
          </p>
        </form>
        <div class="divider"></div>
        <div class="or-text">or</div>
        <div class="right-divider"></div>
        <div class="container-login">
          <div class="container-login">
            <div class="container-login">
              <label for="">
                <img src="../images/google.png" alt="gg" class="google-logo" />
                Sign In With Google
              </label>
              <button onclick="nextStep()">Berikutnya</button>
            </div>
          </div>
        </div>
      </div>

      <div id="step2" style="display: none">
        <h2>Yuk, isi identitasmu dulu!</h2>
        <!-- Your Step 2 Content -->
        <br />
        <br />
        <a class="back" onclick="prevStep()"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
        <form action="">
          <input
            type="text"
            id="namaLengkap"
            name="namaLengkap"
            placeholder="Nama Lengkap"
            required
          />
          <input
            type="text"
            id="tempatTanggalLahir"
            name="tempatTanggalLahir"
            placeholder="Tempat, tanggal lahir"
            required
          />
          <input
            type="text"
            id="agama"
            name="agama"
            placeholder="Agama"
            required
          />
          <input
            type="text"
            id="jenisKelamin"
            name="jenisKelamin"
            placeholder="Jenis Kelamin"
            required
          />
          <input
            type="text"
            id="noWa"
            name="noWa"
            placeholder="No Wa"
            required
          />
          <input
            type="text"
            id="alamatTinggal"
            name="alamatTinggal"
            placeholder="Alamat Tinggal"
            required
          />
          <label for="registrationType">
            <select
              id="registrationType"
              name="registrationType"
              class="form-control"
              required
            >
              <option disabled selected value="">Pilih</option>
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="Umum">Umum</option>
            </select>
          </label>
          <button onclick="nextStep()">Berikutnya</button>
        </form>
      </div>

      <div id="step3" style="display: none">
        <h2>Yuk isi identitasmu dulu!</h2>
        <!-- Your Step 3 Content -->
        <br />
        <br />
        <a class="back" onclick="prevStep()"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
        <form action="">
          <input type="text" id="nim" name="nim" placeholder="NIM" required />
          <input
            type="text"
            id="jurusan"
            name="jurusan"
            placeholder="Jurusan"
            required
          />
          <input
            type="text"
            id="fakultas"
            name="fakultas"
            placeholder="Fakultas"
            required
          />
          <input
            type="text"
            id="tahunMasuk"
            name="tahunMasuk"
            placeholder="Tahun Masuk"
            required
          />
          <button onclick="nextStep()">Berikutnya</button>
        </form>
      </div>

      <div id="step4" style="display: none">
        <h2>Yuk isi identitasmu dulu!</h2>
        <h2>Buat Password</h2>
        <!-- Your Step 4 Content -->
        <br />
        <br />
        <a class="back" onclick="prevStep()"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
        <form action="">
          <input
            type="text"
            id="Password"
            name="Password"
            placeholder="Password"
            required
          />
          <input
            type="text"
            id="KonfirmasiPassword"
            name="KonfirmasiPassword"
            placeholder="Konfirmasi Password"
            required oninput="checkPasswordMatch()"
          />

          <p>
            <img src="../images/info-rounded.svg" alt="" />password minimal 8
            karakter
          </p>
        </form>
        <button onclick="submitForm()">Daftar</button>
      </div>
    </div>

    <script>
      let currentStep = 1;

      function nextStep() {
        document.getElementById(`step${currentStep}`).style.display = "none";
        currentStep++;
        document.getElementById(`step${currentStep}`).style.display = "block";

        if (currentStep === 3) {
          let registrationType =
            document.getElementById("registrationType").value;

          if (registrationType === "Mahasiswa") {
            // Show Mahasiswa form
            document.getElementById("step3").innerHTML = `
                <h2>Yuk isi identitasmu dulu!</h2>
                <br />
                <br />
                <a class="back" onclick="prevStep()"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
        <form action="">
    <input type="text" id="nim" name="nim" placeholder="NIM" required />
    <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" required />
    <input type="text" id="fakultas" name="fakultas" placeholder="Fakultas" required />
    <input type="text" id="tahunMasuk" name="tahunMasuk" placeholder="Tahun Masuk" required />
 
    <button onclick="nextStep()">Berikutnya</button>
</form>

            `;
            document.getElementById("mahasiswaForm").style.display = "block";
            document.getElementById("umumForm").style.display = "none";
          } else if (registrationType === "Umum") {
            // Show Umum form
            document.getElementById("step3").innerHTML = `
                <h2>Yuk isi identitasmu dulu!</h2>
                <br />
                <br />
                <a class="back" onclick="prevStep()"
          ><img src="../images/back.svg" alt="back" class="back"
        /></a>
                <form action="">
            <input type="text" id="nik" name="nik" placeholder="NIK" required />
            <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required />
            <input type="text" id="asalInstansi" name="asalInstansi" placeholder="Asal Instansi" required />
            <input type="text" id="statusPernikahan" name="statusPernikahan" placeholder="Status Pernikahan" required />
            
            <button onclick="nextStep()">Berikutnya</button>
        </form>

            `;
            document.getElementById("umumForm").style.display = "block";
            document.getElementById("mahasiswaForm").style.display = "none";
          }
        }
      }

      function prevStep() {
        document.getElementById(`step${currentStep}`).style.display = "none";
        currentStep--;
        document.getElementById(`step${currentStep}`).style.display = "block";
      }

      function checkPasswordMatch() {
      var password = document.getElementById("Password").value;
      var confirmPassword = document.getElementById("KonfirmasiPassword").value;

      if (password !== confirmPassword) {
        document.getElementById("passwordMatchError").innerHTML = "Password dan konfirmasi password harus sama.";
      } else {
        document.getElementById("passwordMatchError").innerHTML = "";
      }
    }

    function submitForm() {
      // Your form submission logic here
      // You can also check password match again before submitting
      var password = document.getElementById("Password").value;
      var confirmPassword = document.getElementById("KonfirmasiPassword").value;

      if (password !== confirmPassword) {
        document.getElementById("passwordMatchError").innerHTML = "Password dan konfirmasi password harus sama.";
        return; // Stop form submission if passwords don't match
      }

      alert("Form submitted!");
    }
  </script>
    </script>
  </body>
</html>
