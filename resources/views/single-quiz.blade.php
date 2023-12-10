<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/main3.css') }}" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>Quizzy | {{ $quiz->title }}</title>
</head>
<body class="bg-dark">

    <div class="cover bg-dark">
      <a class="answer-btn" id='start-quiz-button' onclick="checkQuiz({{ $quiz->id }})">Start Quiz</a>
      <a class="answer-btn" id='go-back-button' href="/">Go Back</a>
    </div>
  <div id="main">
    <div class="sdw p-4 mb-5 bg-white">
        <h2></h2>
    </div>
    
      <div class="image-container">
          <img src="" class="quiz-image" alt="...">
      </div>
      <div class="answers-container">
          <a class="answer-btn" role="button"><span>aaaa</span></a>
          <a class="answer-btn" role="button"><span>aaaa</span></a>
      </div>
      <div class="answers-container">
        <a class="answer-btn" role="button"><span>aaa</span></a>
        <a class="answer-btn" role="button"><span>aaa</span></a>
      </div>
  </div>
    
  <footer>
      
  </footer>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>