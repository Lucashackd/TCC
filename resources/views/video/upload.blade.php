<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar vídeo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    div {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="file"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="title">Título do vídeo:</label>
      <input type="text" name="title" id="title" required>
    </div>
    <div>
      <label for="description">Descrição do vídeo:</label>
      <textarea name="description" id="description" rows="4" required></textarea>
    </div>
    <div>
      <label for="video">Upload Video:</label>
      <input type="file" name="video" id="video" accept="video/*" required>
    </div>
    <div>
      <label for="thumbnail">Upload Thumbnail:</label>
      <input type="file" name="thumbnail" id="thumbnail" accept="image/*" required>
    </div>
    <div style="max-height: 150px; overflow-y: auto; border: 1px solid #ccc; padding: 10px; border-radius: 4px;">
      <label for="flag">Select Flags:</label>
      @foreach($flags as $flag)
      <div style="display: flex; align-items: center; margin-bottom: 5px;">
        <input type="checkbox" name="flags[]" id="flag{{$flag->id}}" value="{{$flag->id}}" style="margin-right: 10px;">
        <label for="flag{{$flag->id}}">{{$flag->title}}</label>
      </div>
      @endforeach
    </div>
    <button type="submit">Upload</button>
  </form>
</body>

</html>