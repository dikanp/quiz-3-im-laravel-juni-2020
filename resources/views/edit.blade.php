@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Article</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/artikel" method ="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" value="{{$article->judul}}" name="judul" placeholder="Judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" value="{{$article->isi}}" name="isi" placeholder="Isi Pertanyaan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>
@endsection