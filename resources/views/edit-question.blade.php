<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{ asset('css/create-quiz.css') }}" rel="stylesheet" >
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>Quizzy | Update Question</title>
</head>
<body class="bg-dark w-50">
    <form action="/edit-question-post/{{ $id }}" method="POST">
      @csrf
      <div id="question-container">
        <div class="form-group">
          <label for="question">Question</label>
          <input name='question' type="text" class="form-control" id="question" value="{{ $question->question }}"></input>
          <label for="image">Image</label>
          <input name='image' type="text" class="form-control" id="image" value="{{ $question->image }}"></input>
          <label for="position">Position</label>
          <input name='position' type="number" class="form-control" id="position" value="{{ $question->position }}"></input>

          <div class="answer-cont">
            <label for="answers" >Answers</label>
            <input name='answer1' type="text" class="form-control mb-1" id="answer" value="{{ json_decode($question->answers)[0]->text }}"></input>
            <input name='answer2' type="text" class="form-control mb-1" id="answer" value="{{  json_decode($question->answers)[1]->text }}"></input>
            <input name='answer3' type="text" class="form-control mb-1" id="answer" value="{{  json_decode($question->answers)[2]->text }}"></input>
            <input name='answer4' type="text" class="form-control mb-1" id="answer" value="{{  json_decode($question->answers)[3]->text}}"></input>
            <label for="answers" >Correct Answer</label>
            <input name='correct_answer' type="text" class="form-control mb-1" id="answer" value="{{ $question->correct_answer }}"></input>
          </div>
          <label for="parent_quiz">Parent Quiz</label>
            <select name="parent_quiz" id="parent_quiz" class="form-control">
                @foreach($quizzes as $quiz)
                    <option value='{{ $quiz->id }}'>{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <div>
            <a href="/" class="btn btn-primary" id='add-question-button'>Finish</a>
          </div>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
<script src="{{ asset('js/create-quiz.js') }}"></script>
</body>
</html>