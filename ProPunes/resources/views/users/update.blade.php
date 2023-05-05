<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>

  <body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgb(219, 248, 224) 100%);
}
.navbar .getstarted {
    max-width: 100%;
	background: #106eea;
	margin-left: 30px;
	border-radius: 4px;
	font-weight: 400;
	color: #fff;
	text-decoration: none;
	padding: .5rem 1rem;
	line-height: 2.3;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 500;
}
.navbar-light .navbar-brand {
	color: #000;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #000;
}
.navbar-light .navbar-nav .nav-link {
	color: #000;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #000;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}

.signup{
    width: 360px;
    height: min-content;
    padding: 20px;
    border-radius: 12px;
    border:  1px solid rgb(158, 202, 144);
    background-color: #ffff;
}

.signup h1{
    font-size: 30px;
    margin-bottom: 25px;
}

.signup form{
    font-size: 20px;
}

.signup form .form-group{
    margin-bottom: 12px;
}

.signup form input[type="submit"]{
    font-size: 20px;
    margin-top: 15px;
}

.form-control:focus{
    border-color: #84bb82;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(158, 202, 144);
}

.signup form .needs-validation{
    border-color: #84bb82;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(158, 202, 144);
}

.login-signup{
    margin-top: 10px;
    font-size: 18px;
}

.login-signup a{
    color: red;
    text-decoration: none;
}

.form-select:focus{
    border-color: #84bb82;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(158, 202, 144);
}
    </style>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <span class="text-success"><b>PRO</b></span>PUNES</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Ballina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">Rreth Nesh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Kontakti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#jobs">Punët</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#login">Kyçu</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
      <div class="signup">
          <h1 class="text-center">Edit llogari</h1>

          <form class="needs-validation" method="post" action="{{ route('users.update', $user->id) }}" >
            @csrf
            <div class="form-group">
              <label class="form-label" for="id">Numri personal</label>
              <input class="form-control" value="{{ $user->id }}" type="number" id="id" name="id" required>
              <div class="invalid-feedback">
                Ju lutem shënoni numrin personal!
              </div>
            </div>
            
            <div class="form-group">
              <label class="form-label" for="email">Email</label>
              <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
              <div class="invalid-feedback">
                Ju lutem shënoni email!
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="name">Emri</label>
              <input class="form-control" type="text" value="{{ $user->name }}" id="name" name="name" required>
              <div class="invalid-feedback">
                Ju lutem shënoni emrin!
              </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="lastname">Mbiemri</label>
                <input class="form-control" type="text" value="{{ $user->surname }}" id="surname" name="surname" required>
                <div class="invalid-feedback">
                  Ju lutem shënoni mbiemrin!
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="fjalëkalimin">Fjalëkalimi</label>
                <input class="form-control" type="password" id="Fjalëkalimi" name="password" required>
                <div class="invalid-feedback">
                  Ju lutem shënoni fjalëkalimin!
                </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="dropdown">Përcakto rolin</label>
              <select name="role" class="form-select" value="{{ $user->role }}" name ="dropdown">
                      <option value='punedhenes' > Punedhenes </option>
                      <option value='punekerkues'> Punekerkues </option>
                </select>
              </div>
            <input class="btn btn-success w-100" type="submit" value="Update">
          </form>
      </div>
  </body>
</html>