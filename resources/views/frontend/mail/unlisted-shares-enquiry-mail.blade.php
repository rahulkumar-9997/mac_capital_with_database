<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p><strong>Script Name:</strong> {{ $data['script_name'] }}</p>
    <p><strong>Face Value:</strong> {{ $data['face_value'] }}</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>