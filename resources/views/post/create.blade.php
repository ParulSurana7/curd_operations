<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="/post">
@csrf
<div class="form-group">
<label for="title">Title : </label>
<input type="text" name="title" id="title" placeholder="Title" class="form-control">
</div>

<div class="form-group">
<label for="desc">Description : </label>
<textarea row="5"  name="description" id="desc" placeholder="Your Desciption....." class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>