<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
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
    <link rel="stylesheet" href="css/style.css" />
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
      <br />
      <br />
      <h3 style="text-align: justify">
        Selamat Datang Di<br />
        Unit Layanan Psikologi!
      </h3>
      <p>Belum punya akun?<a href="/register"><u> Daftar disini</u></a></p>
      <br />
      <a class="back" href="/"><img src="images/back.svg" alt="back" class="back" /></a>
      <form action="/login" method="post">
        @csrf
        @if(session()->has("loginError"))
          <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
            {{ session("loginError") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <br>
        @endif
  
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email"
          required
          class="form-control @error('email') is-invalid @enderror"
        />
        @error("email")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
  
        <br />
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Password"
          required
          class="form-control @error('password') is-invalid @enderror"
        />
        @error("password")
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
  
        <p>lupa password? <a href="">klik disini</a></p>
        <button id="login-button">Login</button>
        <div class="d-flex justify-content mb-3 mt-3">
          <div class="divider"></div>
          <div class="or-text">or</div>
          <div class="right-divider "></div>
        </div>
        
        <div class="google-container d-flex">
          <a href="{{ url('auth/google') }}" class="text-decoration-none">
            <img src="images/google.png" alt="gg" class="google-logo" />
            Sign In With Google
          </a>
        </div>
      </form>

      
    </div>
  </body>
  
</html>
