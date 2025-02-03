<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="photo">Select an image:</label>
        <input type="file" name="photo" required>
        <button type="submit">Upload & Generate QR</button>
    </form>
</body>
</html>
