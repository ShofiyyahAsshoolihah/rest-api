<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Shofiyyah Asshoolihah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/portprofile.jpg" class="rounded-circle img-thumbnail" style="width: 250px; height: 250px; object-fit: cover; border 5px">
          <h1 class="display-4">Shofiyyah Asshoolihah</h1>
          <h3 class="lead">College | Programmer | Youtuber</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 text-justify">
            <p>Hello! I’m Shofiyyah Asshoolihah, a 6th-semester Information Systems student at UIN Imam Bonjol Padang. I was born and raised in Bengkulu City and graduated from SMAIT IQRA' Bengkulu with a focus on Science (IPA).  My two favorite hobbies: singing and traveling! Whether I'm belting out my favorite tunes or exploring new places for inspiration, these activities keep my life colorful and balanced.</p>
          </div>
          <div class="col-md-5 text-justify">
            <p>Currently, I’m actively involved in my faculty’s Student Senate (Senat Mahasiswa), where I’ve been part of the Information and Communication Division (Divisi Kominfo) since my first semester. My long-term commitment to this role stems from my deep passion for technology, media, and communication. Through this organization, I’ve honed my skills in content creation, digital communication, and team collaboration.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Youtube -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div> 
        </div>
        
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="img/ytprofile.jpg" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5>ShopiWebProgramming</h5>
                <p>0 Subscribers.</p>
                <div class="g-ytsubscribe" data-channelid="UCj8ES4HActRfHaY5JaVo5NQ" data-layout="default" data-count="default"></div>
              </div>
             </div>
             <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8fvoM2UMY-I?rel=0" allowfullscreen></iframe>
                </div>
              </div>
             </div>
            </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                 <img src="img/igprofile2.jpg" width="200" height="200" class="rounded-circle img-thumbnail"  object-fit: cover;>
              </div>
              <div class="col-md-8">
                <h5>@shopiiash</h5>
                <p>566 Followers.</p>
              </div>
            </div>

            <!-- instagram -->
           <div class="row no-gutters mt-3 pb-3">
                <div class="col-md-4 ">
                  <div class="ig-post-container">
                    <img src="img/thumbs/igpost1.jpg" class="img-fluid w-100 ig-post">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="ig-post-container">
                    <img src="img/thumbs/igpost2.jpg" class="img-fluid w-100 ig-post">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="ig-post-container">
                    <img src="img/thumbs/igpost4.jpg" class="img-fluid w-100 ig-post">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">Json</h5>
                <p class="card-text">Latihan menggunakan json.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">Rest-API</h5>
                <p class="card-text">Menampilkan Data Menu Pizza Sho-hut dengan website sederhana.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">Public API</h5>
                <p class="card-text">Menggunakan OMdb API untuk menampilkan daftar film dengan website sederhana.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">API Social Media</h5>
                <p class="card-text">Menghubungkan Youtube dan Instagram menggunakan API untuk ditampilkan di website Portofolio.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">Portofolio</h5>
                <p class="card-text">Menampilkan data diri dengan menggunakan API.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-tittle">Rest-Server</h5>
                <p class="card-text">Latihan membuat Rest-server menggunakan CodeIgniter.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">+62 81234567891 (Shopi)</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Simpang 4 Sungai Bangek</li>
              <li class="list-group-item">Padang, West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>

  </body>
</html>