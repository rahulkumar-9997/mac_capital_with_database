<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body style="margin:0; padding:20px; font-family: Arial, sans-serif; line-height:1.6; background:#f1f1f1;">
    <div style="max-width:600px; margin:auto; background:#ffffff; padding:20px;">
        <h2 style="text-align:center; background:#4282AA; color:#ffffff; padding:10px;">
            {{ $data['pagetitle'] }}
        </h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone/Mobile No.:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>