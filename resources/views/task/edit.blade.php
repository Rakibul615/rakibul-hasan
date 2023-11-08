@extends('master')


@section('content')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('update', ['id' => $info->id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="{{$info->title}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description">{{$info->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Completed</label>
                                <div class="col-md-9">
                                    <input type="boolean" name="bool" value="{{$info->completed}}">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update">
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
