@extends('layouts.index')
@section('content')
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="{{asset('frame/img/bgst.jpg')}}" alt="Fillah Alfatih" width="200" class="rounded-circle img-thumbnail">
        <h1 class="mt-1 display-4">Afifah Fauziah</h1>
        <p class="lead">Student | Fullstack Developer</p>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#ffffff"
              fill-opacity="10"
              d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,80C672,64,768,64,864,96C960,128,1056,192,1152,186.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>

            <div class="row justify-content-center fs-5 text-center">
                <div class="col-lg-4 col-xs-12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad maxime rem unde reprehenderit animi quam, quia consectetur a perferendis deserunt.</p>
                </div>

                <div class="col-lg-4 col-xs-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ad vel accusantium unde labore neque inventore quibusdam doloremque voluptas deserunt!</p>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#e2edff"
              fill-opacity="10"
              d="M0,96L48,122.7C96,149,192,203,288,192C384,181,480,107,576,80C672,53,768,75,864,101.3C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
        </svg>
    </section>
    <!-- End About -->

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Projects</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('frame/img/projects/1.jpg')}}" class="card-img-top" alt="projects 1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('frame/img/projects/2.jpg')}}" class="card-img-top" alt="projects 2">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('frame/img/projects/3.jpg')}}" class="card-img-top" alt="projects 3">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('frame/img/projects/4.jpg')}}" class="card-img-top" alt="projects 4">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('frame/img/projects/5.jpg')}}" class="card-img-top" alt="projects 5">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#ffffff"
              fill-opacity="10"
              d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,181.3C420,181,480,235,540,261.3C600,288,660,288,720,272C780,256,840,224,900,218.7C960,213,1020,235,1080,245.3C1140,256,1200,256,1260,250.7C1320,245,1380,235,1410,229.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
            ></path>
        </svg>
    </section>
    <!-- End Projects -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <!-- Input Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>

                        <!-- Input Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>

                        <!-- Input Messages -->
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#0d6efd"
              fill-opacity="10"
              d="M0,128L30,149.3C60,171,120,213,180,224C240,235,300,213,360,192C420,171,480,149,540,160C600,171,660,213,720,197.3C780,181,840,107,900,101.3C960,96,1020,160,1080,197.3C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
            ></path>
        </svg>
    </section>
    <!-- End Contact -->
@endsection