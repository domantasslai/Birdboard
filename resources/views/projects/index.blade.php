<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Birdboard</title>
  </head>
  <body>
      <ul>
        @foreach ($projects as $project)
          <li>{{ $project->title }}</li>
        @endforeach
      </ul>
  </body>
</html>
