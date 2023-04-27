<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['judul']?></title>
    <!-- Load Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-T5Hr0V2cK1R5g1GYYZ/O0+YBGGq3gEwabjKbJyvSjX9PH3Cf6+JU6jZv6z2QbEl+gArzWQ/8NCJjDcbIKdIsg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
<body>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Silahkan Login</h1>
        <div class="row justify-content-center">

        <div class="row">
            <div class="col md-6">
                <!--  -->
                
            </div>
        </div>

            <div class="col-md-6">
                <form  action="<?= BASEURL ?>/Login/login" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label" required>Email</label>
                        <input type="text" name="email" class="form-control rounded-3" id="floatingInput"required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" name="password" required>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="role" class="form-label" required>Sebagai: </label>
                            <select class="form-control input-border-bottom" name="role" required>
                                <option value="Laboran">Laboran</option>
                                <option value="mhs">Mahasiswa</option>
                                
                            </select>
                        </div>
					</div>
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 py-2 mb-2 btn btn-outline-dark rounded-3" >Login</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>