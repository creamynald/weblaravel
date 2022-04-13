@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Register for Administrator</h1>
            <form>
              <img class="mb-4 mx-auto d-block" src="/assets/img/logoPemkabBengkalis.png" alt="" width="72" height="80">
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email Address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-4 text-decoration-none">Already Registered? <a href="/login">Login Now!</a></small>
          </main>
    </div>
</div>
    
@endsection