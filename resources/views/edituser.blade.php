<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System - Edit user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
      .table td, .table th {
        vertical-align: middle;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <a href="/" class="btn btn-warning btn-lg mb-4 ">Go back</a>
      
          <div class="contact box-shadow-large offset-top-171 shadow">
            <form action="/user/edit/{{ $user->id }}" method="post" class="p-4">
              @csrf

              @method('PUT')

              <div class="form-group">
                <label for="name">Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control @error('name') is-invalid @enderror"
                  value="{{ $user->name }}"
                >

                @error('name')
                  <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
              </div>

              <div class="form-group mt-4">
                <label for="email">Email</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  class="form-control @error('email') is-invalid @enderror"
                  value="{{ $user->email }}"
                >

                @error('email')
                  <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
              </div>

              <div class="form-group mt-4">
                <label for="phone">Phone number</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  class="form-control @error('phone') is-invalid @enderror"
                  value="{{ $user->phone }}"
                >

                @error('phone')
                  <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary btn-lg mt-4">Edit user</button>
            </form>
          </div>
        </div>            
      </div>
    </div>
  </body>
</html>