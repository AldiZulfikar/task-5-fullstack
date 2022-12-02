@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tambah Article</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-article-admin-tambah')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Gambar article</label>
                      <input type="file" name="image" class="form-control-file" required id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" name="title" class="form-control" required id="exampleFormControlInput1">
                    </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($category as $data)
                         <option value="{{$data -> id}}">{{$data->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Content</label>
                      <textarea name="content" class="form-control summernote" required id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-article-admin')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-article-admin')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection