<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{!! asset('img/ipb.png') !!}"/>
	<title>SAFRONS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style-login.css">


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="kiri col-lg-6">
                <!--h1 style="font-size: 6vw;">SAFRONS</h1-->
                <h1>SAFRONS</h1>
                <h2>Smart Agriculture and Fertilizer Recommendation System</h2>
                    <img class="pic-login-3" src="img/safrons.svg">
            </div>
            
            <div class="col-lg-4 offset-lg-1 col-md-10 offset-md-1 col-sm-12 col-12">
                <div class="card login-form">
                    <h4>Selamat Datang</h4>
                    <h10>Silahkan Masukkan Akun Anda</h10>
                    
                    <div class="form-group col-lg-10 offset-lg-1">
                        <div class="textkolom">
                            <h10>Email</h10>
                        </div>
                        
                        <input type="text" name="" class="form-control" placeholder="Masukkan Email Anda">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-pern-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                    </div>

                    <div class="form-group col-lg-10 offset-lg-1">
                        <div class="textkolom">
                            <h10>Password</h10>
                        </div>
                        
                        <input type="password" name="" class="form-control" placeholder="Masukkan Password Anda">
                        <div class="textinput">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                        </div>
                    </div>
                        
                    <div class="col-md-12 text-center">
                    <a href="/"><button type="button" class="btn btn-primary">MASUK</button></a>
                    </div>

                    <div class="register">
                        <h9>Belum Punya Akun? &emsp; &emsp; &ensp;Lihat Dengan</h9>
                        <a href="register"><button type="button" class="btn btn-secondary">DAFTAR</button></a>
                        <a href="/"><button type="button" class="btn btn-secondary">MODE TAMU</button></a>
                    </div>
                </div>
				<!--<div class="sign-up-div">
					<span>New here? <a href="">Sign Up</a></span>
				</div>-->
			</div>
		</div>
	</div>
</body>
</html>