<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Wizard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" />
    <link rel="stylesheet" href="../css/style3.css" />
    <!-- Link to the external CSS file -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <form id="formUtama" action="submit-registration" method="POST">
            @csrf
            <div id="step1">
                <h2>Daftar akun ULP</h2>
                <p>
                    sudah punya akun? <a><u>masuk yuk!</u></a>
                </p>
                <br />
                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                
                <a class="back"><img src="../images/back.svg" alt="back" class="back" /></a>
                <input type="email" id="email" name="email" placeholder="Masukan Email" required />
                <div id="emailError" class="invalid"></div>

                <p>
                    <img src="../images/info-rounded.svg" alt="" class="seru" />pastikan
                    email kamu aktif
                </p>
                <div class="d-flex justify-content mb-3 mt-2">
                    <div class="divider"></div>
                    <div class="or-text">or</div>
                    <div class="right-divider "></div>
                  </div>
                  <div class="google-container d-flex">
                    <a href="/auth/google" style="color: blue">
                        <img src="../images/google.png" alt="gg" class="google-logo" />
                        Sign In With Google
                    </a>
                  </div>
                  <button id="next-button" onclick="nextStep(event)">Berikutnya</button>
                </form>
            </div>
          </div>
        </div>
      </div>

        
    <div class="container">
            <div id="step2" style="display: none">
                <h2>Yuk, isi identitasmu dulu!</h2>
                <!-- Your Step 2 Content -->
                <br />
                <br />
                
                <a class="back" onclick="prevStep()"><img src="../images/back.svg" alt="back"class="back" /></a>
                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                
                <input type="text" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" required />
                <input type="text" id="tempatTanggalLahir" name="tempatTanggalLahir"
                    placeholder="Tempat, tanggal lahir" required />
                <input type="text" id="agama" name="agama" placeholder="Agama" required />
                <input type="text" id="jenisKelamin" name="jenisKelamin" placeholder="Jenis Kelamin" required />
                <input type="text" id="noWa" name="noWa" placeholder="No Wa" required />
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Tinggal" required />
                <label for="status">
                    <select id="status" name="status" class="form-control" required>
                        <option disabled selected value="">Pilih</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Umum">Umum</option>
                    </select>
                </label>
                <button id="next-button" onclick="nextStep(event)">Berikutnya</button>
            </div>

            <div id="step3" style="display: none">
                <h2>Yuk isi identitasmu dulu!</h2>
                <br />
                <br />
                <a class="back" onclick="prevStep()">
                    <img src="../images/back.svg" alt="back" class="back" />
                </a>
                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                <input type="text" id="nim" name="nim" placeholder="NIM" required />
                <div id='nimError' class="invalid"></div>
                <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" required />
                <input type="text" id="fakultas" name="fakultas" placeholder="Fakultas" required />
                <input type="text" id="tahunMasuk" name="tahunMasuk" placeholder="Tahun Masuk" required />
                <button id="next-button" onclick="nextStep(event)">Berikutnya</button>`;
            </div>

            <div id="step4" style="display: none">
                <h2>Yuk isi identitasmu dulu!</h2>
                <h2>Buat Password</h2>
                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none" id="alert-success">
                    Registrasi Berhasil! Silahkan Login
                  </div>
                <!-- Your Step 4 Content -->
                <br />
                <br />
                <a class="back" onclick="prevStep()"><img src="../images/back.svg" alt="back"
                        class="back" /></a>
                <input type="password" id="Password" name="password" placeholder="Password" required />
                <input type="password" id="KonfirmasiPassword" name="KonfirmasiPassword"
                    placeholder="Konfirmasi Password" required oninput="checkPasswordMatch()" />
                <div id="passwordError" class="invalid"></div>
                <div id="passwordMatchError" class="invalid"></div>

                <p>
                    <img src="../images/info-rounded.svg" alt="" />password minimal 8
                    karakter
                </p>
                <button id="submitForm" class = 'submit-button' type="submit">Daftar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

 
    <script>
        let currentStep = 1;
        const form = document.querySelector('form');
        const formData = new FormData(form);
        
        function nextStep(event) {
            event.preventDefault();
            console.log('next step tertekan')
            let status = document.getElementById('status').value;
            let inputs = document.querySelectorAll(`#step${currentStep} input`);
            let allInputsFilled = true;
        
            inputs.forEach(input => {
                console.log(input.value);
                if (input.value == "") {
                    allInputsFilled = false;
                }
            });
            console.log(allInputsFilled);
            if (!allInputsFilled) {
                var alertMessages = document.querySelectorAll('#alert-messages');
                alertMessages.forEach(function(alert) {
                    alert.style.display = "block";
                });
                return;
            }
        
            inputs.forEach(input => {
                formData.append(input.name, input.value);
            });
            formData.append('status', status);
            console.log(Object.fromEntries(formData.entries()));
        
            document.getElementById(`step${currentStep}`).style.display = "none";
            var alertMessages = document.querySelectorAll('#alert-messages');
                alertMessages.forEach(function(alert) {
                    alert.style.display = "none";
                });
            currentStep++;
            document.getElementById(`step${currentStep}`).style.display = "block";
            if (currentStep === 3) {
                let status = document.getElementById("status").value;
                console.log(status);
                let object = Object.fromEntries(formData.entries())

                if (status === "Mahasiswa") {
                    let step3Content = `
                        <h2>Yuk isi identitasmu dulu!</h2>
                        <br />
                        <br />
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                        <a class="back" onclick="prevStep()">
                            <img src="../images/back.svg" alt="back" class="back" />
                        </a>
                        <input type="text" id="nim" name="nim" placeholder="NIM" required value="${object.nim !== undefined ? object.nim : ''}" />
                        <div id='nimError' class = 'invalid'></div>
                        <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" required value="${object.jurusan !== undefined ? object.jurusan : ''}" />
                        <input type="text" id="fakultas" name="fakultas" placeholder="Fakultas" required value="${object.fakultas !== undefined ? object.fakultas : ''}" />
                        <input type="text" id="tahunMasuk" name="tahunMasuk" placeholder="Tahun Masuk" required value="${object.tahunMasuk !== undefined ? object.tahunMasuk : ''}" />
                        <button id = 'next-button' onclick="nextStep(event)">Berikutnya</button>`;
                    document.getElementById("step3").innerHTML = step3Content;
                } else if (status === "Umum") {
                    let step3Content = `
                        <h2>Yuk isi identitasmu dulu!</h2>
                        <br />
                        <br />
                        <a class="back" onclick="prevStep()">
                            <img src="../images/back.svg" alt="back" class="back" />
                        </a>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-messages" style="display: none">
                    Mohon isi semua kolom
                    <button type="button" class="btn-close" aria-label="Close" id="button-alert"></button>
                </div>
                        <input type="text" id="nik" name="nik" placeholder="NIK" required value="${object.nik !== undefined ? object.nik : ''}" />
                        <div id='nikError' class = 'invalid'></div>
                        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required value="${object.pekerjaan !== undefined ? object.pekerjaan : ''}" />
                        <input type="text" id="asalInstansi" name="asalInstansi" placeholder="Asal Instansi" required value="${object.asalInstansi !== undefined ? object.asalInstansi : ''}" />
                        <input type="text" id="statusPernikahan" name="statusPernikahan" placeholder="Status Pernikahan" required value="${object.statusPernikahan !== undefined ? object.statusPernikahan : ''}" />
                        <button id = 'next-button' onclick="nextStep(event)">Berikutnya</button>`;
                    document.getElementById("step3").innerHTML = step3Content;
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
                let errorPass = document.getElementById("passwordMatchError");
                errorPass.innerHTML = "Password dan konfirmasi password harus sama.";

            } else {
                document.getElementById("passwordMatchError").innerHTML = "";
            }
        }
        
        
        console.log('debug')
        document.getElementById('submitForm').addEventListener('click', function(event) {
            event.preventDefault();
            console.log('debug')
            var password = document.getElementById("Password").value;
        
            formData.append('password', password);
            console.log("FormData sebelum dikirim:", formData);
        
            var confirmPassword = document.getElementById("KonfirmasiPassword").value;
        
            if (password !== confirmPassword) {
                document.getElementById("passwordMatchError").innerHTML =
                    "Password dan konfirmasi password harus sama.";
                return; // Stop form submission if passwords don't match
            }
        
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
            if (!csrfToken) {
                console.error('CSRF token not found!');
                return;
            }
        
            console.log(JSON.stringify(formData));
        
            axios.post('/submit-registration', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(response => {
                    document.getElementById('alert-success').style.display = 'block';
                    setTimeout(() => {
                        window.location.href = '/login';
                    }, 1000); // Jeda 2 detik
                })
                .catch(error => {
                    console.log(error);
                        const errors = error.response.data.errors;
                        Object.keys(errors).forEach(key => {
                            console.log(key);
                            const errorContainer = document.getElementById(`${key}Error`);
                            console.log(error.response.data.errors[key]);
                            errorContainer.innerText = error.response.data.errors[key];
                        });
                        let key = Object.keys(errors)
                        console.log(key[0]);
                        if (key[0] === 'email') {
                            document.getElementById(`step4`).style.display = "none";
                            document.getElementById(`step1`).style.display = "block";
                            currentStep = 1;
                        } else if (key[0] === 'nim' || key[0] === 'nik') {
                            document.getElementById(`step4`).style.display = "none";
                            document.getElementById(`step3`).style.display = "block";
                            currentStep = 3;
                        }
                        document.getElementById(`alert1`).style.display = 'block';
                });
        });


        document.addEventListener('DOMContentLoaded', function() {
    var alertMessages = document.querySelectorAll('#alert-messages');
    alertMessages.forEach(function(alert) {
        var btnClose = alert.querySelector('.btn-close');
        btnClose.addEventListener('click', function() {
            alert.style.display = 'none';
        });
    });
});

    </script>
</body>

</html>
