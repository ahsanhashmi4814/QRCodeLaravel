<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generated</title>
</head>
<body>
    <h1>Image uploaded successfully!</h1>
    <img src="{{ $imageUrl }}" alt="Uploaded Image" width="200"><br>

    <h2>Scan this QR Code to view the image:</h2>
    <img src="{{ asset($qrCodePath) }}" alt="QR Code" width="200">
</body>
</html>
