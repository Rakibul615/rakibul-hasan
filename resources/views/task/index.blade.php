@extends('master')
@section('content')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Completed</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="bool" value="0">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
