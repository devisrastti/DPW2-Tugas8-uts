@extends('template.user')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        User
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">username</label>
                                <input type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">No Hp</label>
                                <input type="no_handphone" class="form-control" name="no_handphone">
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
