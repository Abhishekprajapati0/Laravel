@extends('layout.master')
@section('body')
    <section>
        <div class="container">
            <h4 class="text-center text-primary">Login From</h4>
            <form action="{{ url('/loging') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name  = "email"class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection
