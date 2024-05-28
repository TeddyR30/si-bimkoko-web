<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/apple-icon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <style>
    body {
      background: linear-gradient(to right, white, #CCDFF5);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    .left-section, .right-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 60px;
    }
    .left-section {
      background: linear-gradient(to top right, #ECEFF1, #CCDFF5);
      text-align: center;
    }
    .left-section img {
      margin-bottom: 20px;
    }
    .left-section h2 {
      font-size: 34px;
      margin-bottom: 20px;
    }
    .left-section p {
      font-size: 10px;
      color: #888;
    }
    .right-section h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .right-section .form-control {
      margin-bottom: 15px;
      padding: 10px;
      width: 100%;
      border-radius: 4px;
      border: none;
      box-shadow: none;
      background: rgba(255, 255, 255, 0.8);
    }
    .right-section .form-control:focus {
      background: rgba(255, 255, 255, 1);
    }
    .right-section .btn-primary {
      width: 50%;
      padding: 10px;
      border: none;
      background-color: #17a2b8;
      color: white;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin: 0 auto;
      display: block;
    }
    .right-section .btn-primary:hover {
      background-color: #138496;
    }
    .right-section .text-primary {
      color: #17a2b8;
      text-align: center;
    }
    .right-section .text-primary:hover {
      text-decoration: underline;
    }
    .right-section .footer-links {
      display: flex;
      justify-content: center;
      gap: 5px;
      margin-top: 10px;
      text-align: center;
    }
    .form-wrapper {
      width: 80%;
      max-width: 1200px;
      display: flex;
      border-radius: 8px;
      overflow: hidden;
      background: linear-gradient(to right, white, #CCDFF5);
    }
  </style>
</head>

<body>
  <div class="form-wrapper">
    <!-- Left Section -->
    <div class="left-section">
      <img src="{{ asset('assets/images/logos/apple-icon.png') }}" width="80" alt="">
      <h2>SELAMAT DATANG DI SI-BIMKOKO</h2>
      <p>© 2023 Powered by BK SMANSKA SMAN 1 SUKAGUMIWANG.</p>
    </div>
    <!-- Right Section -->
    <div class="right-section">
      <h2>Login</h2>
      <form method="post" action="{{ route('process') }}">
        @csrf
        <input type="text" class="form-control" id="email" name="email" placeholder="masukan username/id">
        <input type="password" class="form-control" id="password" name="password" placeholder="masukan password">
        <button type="submit" class="btn btn-primary">Login</button>
        <a class="text-primary" href="">Lupa Password?</a>
        <div class="footer-links">
          <p>Belum Punya Akun?</p>
          <a class="text-primary" href="{{ url('/register') }}">Registrasi disini</a>
        </div>
      </form>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
