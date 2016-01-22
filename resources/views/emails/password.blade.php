<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password vergeten</title>
</head>
<body>
	<h1>U bent uw wachtwoord vergeten...</h1>
	Klik hier om een nieuw te maken:
	{{ url('password/reset/'.$token) }}
</body>
</html>

