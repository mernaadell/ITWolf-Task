@extends("panel.index")
@section("inner-content")

    <!-- Content Header (Page header) -->
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <h1>Bloggers</h1>
                    </div>
                    <div class="col-xs- col-sm-6 col-md-6 col-lg-6" style="margin-top: 20px">
                        <form action="{{route('admin.bloggers.search')}}" class="form-inline ml-auto">
                            @csrf
                            <input type="text" class="form-control mr-2" placeholder="Search"
                                   value="{{ request()->input('name') }}" name="name">
                            <button class="btn btn-outline-dark btn-circle btn-sm "><i
                                    class="fas fa-search fa-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top: 20px">
                        <form action="{{route('admin.bloggers.create')}}">
                            @csrf
                            <button class="btn btn-outline-dark  float-right"><i class="fas fa-plus"></i> Add New Blogger
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </section>
    </div>
    <div class="card-body">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">


                            <div class="card-body">
                                <table id="example2" class="table  table-striped table-hover">


                                    <thead>
                                    <tr>
                                        <th>Blogger Name</th>
                                        <th>Blogger Email</th>
                                        <th>Blogger Type</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bloggers as $blogger)
                                        <tr>


                                            <td>{{$blogger->name}}</td>

                                            <td>{{$blogger->email}}</td>

                                            <td>{{$blogger->user_type}}</td>
                                            <td>
                                                <form action="{{route('admin.bloggers.edit',$blogger->id)}}">
                                                    @csrf
                                                    <button class="btn " style="background-color: #2c3034;color: white">
                                                        Edit
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.bloggers.destroy',$blogger->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tfoot>
                                    <tr>
                                        <th>Blogger Name</th>
                                        <th>Blogger Email</th>
                                        <th>Blogger Type</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>

                                </table>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection


