<!DOCTYPE html>
<html>
  <head>
    <title>Media {{ $media->id }}</title>
  </head>
  <body>
    <h1>Media {{ $media->id }}</h1>
    <ul>
      <li>Title: {{ $media->title }}</li>
      <li>Description: {{ $media->description }}</li>
      <li>Start Date: {{ $media->start_date }}</li>
    </ul>
  </body>
</html>
