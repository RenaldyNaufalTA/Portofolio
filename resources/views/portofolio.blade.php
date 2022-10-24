<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio | Renaldy</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="bg-body">
    {{-- Navbar --}}
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01"
            aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
    {{-- end Navbar --}}
    {{-- content --}}
    <div class="head"></div>
    <div class="header text-center ">
        <img src="images/renaldy.jpg" class="mainfoto rounded-circle mb-4" alt="profil">
        <h3 class="mb-2">Renaldy Naufal Tsabitul Azmi</h3>
        <h5>Pelajar|------</h5>
    </div>
    </div>
    {{-- about --}}

    <section class="about" id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h4>About</h4>
                    <hr>
                </div>
            </div>
            <div class="row text-justify">
                <div class="col-sm-5 offset-sm-1">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde totam perspiciatis debitis
                        omnis officiis repellat illo minus eligendi magni suscipit impedit similique recusandae vero,
                        blanditiis tempora officia, dolorum ex!</p>
                </div>
                <div class="col-sm-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste libero impedit ad cum
                        eveniet porro maxime minus magnam, molestiae repudiandae quia consequatur illo? Assumenda neque
                        ducimus architecto quo alias?</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end About --}}
    {{-- portofolio --}}
    <section class="portofolio" id="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center"><br><br>
                    <h4>Portofolio</h4>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/laptop1.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/laptop2.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/laptop3.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
                <div class="col-sm-4 mt-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/danau.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
                <div class="col-sm-4 mt-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/danau.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
                <div class="col-sm-4 mt-4">
                    <a href="" class="img-thumbnail">
                        <img src="images/danau.jpg" alt="night" class="img-thumbnail img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end portofolio --}}
    {{-- Gallery --}}
    {{-- <section class="gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center"><br><br>
                    <h4>Gallery</h4>
                    <hr>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- end Gallery --}}

    {{-- comment --}}
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center"><br><br>
                    <h4>Comment</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <form action="">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-md btn-primary " style="border-radius: 10px; font-size: 15px;"
                            type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- end comment --}}
    {{-- footer --}}
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright 2021 | built by <a href="http://">Renaldy</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- App\Models\Siswa::create([
'nisn' => '003213232',
'nama' => 'Cathy',
'alamat' => 'Gunung Anyar Tambak no.15',
'jk' => 'Perempuan',
'email' => 'cathy@gmail.com',
'foto' => 'cathy.png',
'about' => 'Eos cupiditate in quas asperiores consectetur provident quibusdam illo molestias ipsum dolor ad rem error ab magni eaque cumque quod eum, incidunt modi iste! Doloribus, accusantium repudiandae a tempora quasi assumenda ratione! Quasi quia odio maiores dignissimos culpa exercitationem veniam saepe, hic blanditiis, ut itaque, consequuntur perspiciatis error deserunt nesciunt. Totam nihil pariatur incidunt rerum, saepe quibusdam. Aliquam, ullam.'
]); --}}

{{-- App\Models\Projek::create([
'id_siswa' => 1,
'nama_projek' => 'Web Kasir',
'deskripsi' => 'Eos cupiditate in quas asperiores consectetur provident quibusdam illo molestias ipsum dolor ad rem error ab magni eaque cumque quod eum, incidunt modi iste! Doloribus. Aliquam, ullam.',
 'tanggal' => '2022-08-09'
]); --}}