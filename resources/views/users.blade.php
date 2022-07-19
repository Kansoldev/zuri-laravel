<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
      .table td, .table th {
        vertical-align: middle;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
      <a href="/create" class="btn btn-info btn-lg mb-5 float-right" style="clear: right;">Add new user</a>

      <h2 class="mb-4" style="float: left; clear:both;">Users</h2>

      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col" class="text-center">Actions</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($users as $user)
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td class="d-flex" style="justify-content: space-evenly">
                <a href="/user/{{ $user->id }}" class="btn btn-primary">Edit</a>

                <form action="/delete/user/{{ $user->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button name="delete" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>