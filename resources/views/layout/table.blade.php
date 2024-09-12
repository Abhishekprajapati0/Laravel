@extends('layout.master')
@section('body')
    <section>
        <h4 class="text-center text-danger ">Users Data</h4>
        <center>
            <form action="{{ url('/search') }}" method="">
                <input type="search" placeholder="search data" name= "search" class="border-none mt-1 ">
                <button type="submit" class="btn btn-primary btn-sm">Search</button>

            </form>
        </center>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $datas)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>{{ $datas->phone }}</td>
                            <td>
                                <a href="{{ url('/edit') }}/{{ $datas->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('/data/delete') }}/{{ $datas->id }}"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </section>
@endsection
