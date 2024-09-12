@extends('layout.master')
@section('body')
    <section>
        <div class="container">
            <h4 class="text-center text-primary">Updata Form </h4>
            <form action="{{ url('/updata/') }}/{{ $editdata->id }}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $editdata->name }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name  = "email"class="form-control" id="exampleInputPassword1"
                        value="{{ $editdata->email }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $editdata->password }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $editdata->phone }}">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
