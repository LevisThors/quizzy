<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUIZZY | {{$currentAccount->username}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="{{ asset('css/main4.css') }}" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  </head>
<body class="bg-dark">
<main >
    <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <a class="navbar-brand" href="/">QUIZZY</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>  
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" id="my-quizzes-button" aria-current="page" style="cursor: pointer;">My Quizzes <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" id='my-questions-button' href="#">My Questions</a>
                </li>
                @if(Auth::id() === 1)
                <li class="nav-item"> 
                    <a class="nav-link" href="#"  id='admin-approvals-button'>Approvals</a>
                </li>
                @else
                <li class="nav-item"> 
                    <a class="nav-link" href="#">My Account</a>
                </li>
                @endif
            </ul>
            <p class="me-5 fs-5 mb-0 mt-0">Hello, {{ $currentAccount->name }}</p>
            <a type="button" class="btn btn-outline-dark me-2" href='/create-quiz'>Create Quiz</a>
            <form class="d-flex me-3" method="POST" action="/logout">
                @csrf
                <button type='submit' id="register-btn" class="btn btn-outline-danger">Log out</button>
            </form>
            
        </div>
    </nav>
    @if(Auth::id() !== 1)
    <div id='dissapear-quiz'>
    @foreach($currentQuizzes as $quiz)
        <div class="card m-3">
            
            <div class="card-body">
                <h5 class="card-title">{{$quiz->title}}</h5>
                <p class="card-text">{{$quiz->description}}</p>

                <div style="display: flex; flex-direction: row;">
                    <a href="/edit-page/{{$quiz->id}}" class="btn me-2 btn-outline-dark">Edit</a>
                    <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div id='dissapear-question'>
        @foreach($currentQuestions as $question)
            <div class="card m-3">
                
                <div class="card-body">
                    <h5 class="card-title">{{$question->question}}</h5>
                    <p class="card-text"><strong>FOR</strong>: {{$currentQuizzes->where('id', $question->quiz_id)->first()->title}}</p>
    
                    <div style="display: flex; flex-direction: row;">
                        <a href="/edit-question/{{$question->id}}" class="btn me-2 btn-outline-dark" >Edit</a>
                        <form action="/delete-question/{{$question->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        @else
        <div id='dissapear-quiz'>
            @foreach($allQuizzes as $quiz)
                @if($quiz->approved)
                <div class="card m-3">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{$quiz->title}}</h5>
                        <p class="card-text">{{$quiz->description}}</p>
        
                        <div style="display: flex; flex-direction: row;">
                            <a href="/edit-page/{{$quiz->id}}" class="btn me-2 btn-outline-dark">Edit</a>
                            <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        
            <div id='dissapear-question'>
                @foreach($allQuestions as $question)
                    <div class="card m-3">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$question->question}}</h5>
                            <p class="card-text"><strong>FOR</strong>: {{$allQuizzes->where('id', $question->quiz_id)->first()->title}}</p>
            
                            <div style="display: flex; flex-direction: row;">
                                <a href="/edit-question/{{$question->id}}" class="btn me-2 btn-outline-dark" >Edit</a>
                                <form action="/delete-question/{{$question->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id='dissapear-approvals'>
                @foreach($allQuizzes->where('approved', 0) as $quiz)
                    <div class="card m-3">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$quiz->title}}</h5>
                            <p class="card-text">{{$quiz->description}}</p>
            
                            <div style="display: flex; flex-direction: row;">
                                <form action="/approve/{{$quiz->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn approve-button btn-outline-success">Approve</button>
                                </form>
                                <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        @endif

        


</main>
<script src="{{ asset('js/admin-page.js') }}"></script>



</body>
</html>