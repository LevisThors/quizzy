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
    <title>Quizzy | Edit Quiz</title>
</head>
<body class="bg-dark w-50">
    <form action="/edit-quiz/{{ $id }}" method="POST">
      @csrf
        <div class="form-group">
          <label for="quizImage">Quiz Image</label>
          <input name="image" type="text" class="form-control" id="quizImage" value="{{$quiz->image}}">
        </div>
        <div class="form-group">
          <label for="quizTitle">Quiz Title</label>
          <input name="title" type="text" class="form-control" id="quizTitle" value="{{$quiz->title}}">
        </div>
        <div class="form-group">
          <label for="quizDescription">Quiz Description</label>
          <textarea name="description" class="form-control" id="quizDescription" rows="3" >{{$quiz->description}}</textarea>
        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
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