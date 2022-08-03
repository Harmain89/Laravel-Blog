<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_Update</title>
</head>
<style>
    h2 {
        padding-left: 20px;
    }
</style>
<body>
    
    <h2>
        {{ $data['id'] }}
    </h2>
    <h2>
        {{ $data['name'] }}
    </h2>
    <h2>
        {{ $data['slug'] }}
    </h2>
    <h2>
        {{ $data['description'] }}
    </h2>
    <h2>
        {{ $data['meta_title'] }}
    </h2>
    <h2>
        {{ $data['meta_description'] }}
    </h2>
    
</body>
</html>