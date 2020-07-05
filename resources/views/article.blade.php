@extends('layouts.master')

@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Article</h3><br/>
                <a href="artikel/create" class="btn btn-primary">
                  Create New Article
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 5%">Id</th>
                      <th style="width: 25%">Judul</th>
                      <th>Isi</th>
                      <th style="width: 25%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($articles as $article)
                    <tr>
                      <td>{{$article->id}}</td>
                      <td>{{$article->judul}}</td>
                      <td>{{$article->isi}}</td>
                      <td>
                            <span>
                                <a href="{{asset('artikel/'.$article->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a> &nbsp; 
                                <form action="/artikel" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure want to delete this data?');"><i class="fa fa-trash"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush