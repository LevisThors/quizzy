<!doctype html>
<html lang="en">

<head>
    <title>Quizzy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
</head>

<body class="h-100">

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1>QUIZZY</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#">Mail</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Portfolio</a></li>
                            </ul>
                        </li>
                    </ul>
                    @if (Auth::check())
                        <form class="d-flex" method="POST" action="/logout">
                            @csrf
                            <a id="sign-in-btn" class="btn btn-outline-secondary" href="/account">My Account</a>
                            <button type='submit' id="register-btn" class="btn btn-outline-danger">Log out</button>
                        </form>
                    @else
                        <form class="d-flex">
                            <a id="sign-in-btn" class="btn btn-outline-secondary" href="/sign-in">Sign In</a>
                            <a id="register-btn" class="btn btn-secondary" href="/register">Register</a>
                        </form>
                    @endif
                </div>
            </div>
        </nav>
    </header>


    <main class="bg-dark h-100">
        <div id="hero" class="bg-dark text-secondary px-4 py-5 text-center h-100 ">
            <div class="py-5 ">
                <h1 class="display-5 fw-bold text-white">Quizzy</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Get ready to put your brain to the test and have a blast with our amazing
                        quizzes! From trivia on your favorite movies and TV shows to challenging brainteasers and
                        everything in between, we have something for every knowledge-hungry individual. So come on in
                        and satisfy your thirst for trivia. The fun (and learning) is just a click away!</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        @if (Auth::check())
                            <a type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"
                                href='#quiz-go'>Start Quizz</a>
                            <a type="button" class="btn btn-outline-light btn-lg px-4" href='/create-quiz'>Create
                                Quizz</a>
                        @else
                            <a type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"
                                href="/register">Start Quizz</a>
                            <a type="button" class="btn btn-outline-light btn-lg px-4" href="/register">Create
                                Quizz</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div id="carouselId" class="carousel slide mb-5" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="/img/banner.png" class="w-80 d-block m-auto" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h3>{{ $quizzes[0]->title }}</h3>
            <p>{{ $quizzes[0]->description }}</p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/banner.png" class="w-80 d-block m-auto" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h3>{{ $quizzes[1]->title }}</h3>
            <p>{{ $quizzes[1]->description }}</p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/banner.png" class="w-80 d-block m-auto" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div id="quiz-go" class="ps-2" style="display:flex; flex-direction:column;">
            @foreach ($quizzes as $quiz)
                @if ($loop->iteration % 3 == 1)
                    <div class="card-group d-flex justify-content-around pb-5">
                @endif
                <div class="card me-2 rounded border-0" style="overflow: hidden">
                    <img class="card-img-top" src="{{ $quiz->image }}" alt="Card image cap">
                    <div class="card-body style-card-me">
                        @if (Auth::check())
                            <a href="{{ route('single-quiz', ['id' => $quiz->id]) }}">
                                <h5 class="card-title">{{ $quiz->title }}</h5>
                            </a>
                        @else
                            <a href="/register">
                                <h5 class="card-title">{{ $quiz->title }}</h5>
                            </a>
                        @endif
                        <p class="card-text">{{ $quiz->description }}</p>
                    </div>
                    <div class="card-footer style-card-footer-me">
                        <small class="text-muted">Questions:
                            {{ $questions->where('quiz_id', $quiz->id)->count() }}</small>
                        <small class="text-muted author">Author:
                            {{ $user->where('id', $quiz->user_id)->first()->username }}</small>
                    </div>
                </div>

                @if ($loop->iteration % 3 == 0)
        </div>
        @endif
        @endforeach
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
