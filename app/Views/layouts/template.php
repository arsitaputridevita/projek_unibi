<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

 <style>
    .icon {
    font-size: 12px;
    /* Ukuran ikon */
    color: #ffff;
    /* Warna ikon */
    text-decoration: none;
    /* Menghilangkan garis bawah */
    transition: color 0.3s, border-color 0.3s;
    /* Efek transisi saat hover */
    border: 3px solid transparent;
    /* Border awal transparan */
    border-radius: 6px;
    /* Membuat sudut border bulat */
    padding: 5px;
    /* Memberikan jarak antara ikon dan border */
    background-color: #204A5A;
    /* Warna latar belakang ikon */
}

.icon:hover {
    color: lightgreen;
    /* Warna ikon saat hover */
    border-color: lightgreen;
    /* Warna border saat hover */
    transform: scale(1.2);
    /* Membesarkan ikon saat hover */
}

.navbar {
    background-color: #204A5A;
    /* Ganti dengan warna yang diinginkan */
}

.container {
    background-color: white;
    /* Warna latar belakang kartu */
    border-radius: 8px;
    /* Membuat sudut kartu melengkung */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    /* Bayangan untuk kedalaman */
    overflow: hidden;
    /* Menghilangkan elemen yang meluap dari kartu */
    width: 150%;
    /* Lebar kartu */
    height: 50%;
    margin: 20px;
    /* Margin di sekitar kartu */
    transition: transform 0.3s;
    /* Transisi untuk efek hover */
    min-height: 200px;
    display: flex;
    flex-direction: column;
    gap: 3px; /* Jarak antar tombol */
    align-items: flex-start; /* Agar switch rata di kiri */
        }
.card-body {
    padding: 10px;
    /* Padding di dalam body kartu */
    text-align: center;
    /* Menyelaraskan teks ke kiri */
    background-color: white;
    height: 100%;
    min-height: 100px;
}

.btn {
    background-color: #204A5A
;
    /* Warna latar belakang tombol */
    color: white;
    /* Warna teks tombol */
    padding: 5px 5px;
    /* Padding di dalam tombol */
    border: none;
    /* Menghilangkan border default */
    border-radius: 5px;
    /* Sudut melengkung untuk tombol */
    text-decoration: none;
    /* Menghilangkan garis bawah pada tautan */
    transition: background-color 0.3s;
    /* Transisi untuk efek hover tombol */
    }

.k {
    font-size: 10px;
    /* Ukuran ikon */
    color: #ffff;
    /* Warna ikon */
    text-decoration: none;
    /* Menghilangkan garis bawah */
    transition: color 0.3s, border-color 0.3s;
    /* Efek transisi saat hover */
    border: 3px solid transparent;
    /* Border awal transparan */
    border-radius: 6px;
    /* Membuat sudut border bulat */
    padding: 7px;
    /* Memberikan jarak antara ikon dan border */
    background-color: #204A5A;
    /* Warna latar belakang ikon */
}
        
        .switch-container {
            display: flex;
            align-items: center;
            gap: 20px; /* Jarak antara switch dan teks */
            width:auto;
        }
        .switch {
            width: 50px;
            height: 25px;
            position: relative;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 25px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 19px;
            width: 19px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: lightgreen;
        }
        input:checked + .slider:before {
            transform: translateX(24px);
        }
        .garis-lurus {
            height: 2px; /* Ketebalan garis */
            background-color: #204A5A; /* Warna garis */
            width: 100%; /* Panjang garis */
        }
 </style>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light" class="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <tr>
            <td>
            <a href="/lowongan" class="icon" >
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                </svg>
            </a>
            </td>
            <td>
                <a href="/lowongan/create" class="icon" >
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                </svg>
            </a>
            </td>
        </tr>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    </nav>
    <body>
        
        <!-- <h1>Hello, world!</h1> -->
        <?= $this->renderSection('content');?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        -->
    </body>
    </html>