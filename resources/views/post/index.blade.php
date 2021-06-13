<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <table class="table">
        <button type="submit"class="btn btn-primary" style="float: right;"><a style="color: white;"href="/post/create" >Add New Data</a></button>
        <thead>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Desciption</th>
              <th>Action</th>
          </tr>
      </thead>

          <tbody>
            @foreach ($data as $info)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$info->title}}</td>
              <td>{{$info->description}}</td>
              <td>
                 <button type="submit" class="btn btn-info">
                   <a style="color: white;"href="/post/{{$info->id}}/edit" >Edit</a> 
                  </button>
                    <form method="post" action="/post/{{$info->id}}">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
  
          </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Desciption</th>
              <th>Action</th>
          </tr>
        </tfoot>
    </table>
    </body>
</html>
