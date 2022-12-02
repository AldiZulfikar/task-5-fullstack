@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah article | {{$article -> title}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-article-admin', $article->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                      <img src="{{ asset('upload/' . $article->image) }}" width="200" alt=""><br>
                      <label for="exampleFormControlFile1">Gambar article</label>
                      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$article->title}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Category</label>
                      <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="{{$article->category_id}}">{{$article->category->name}}</option>
                        @foreach ($category as $data)
                           <option value="{{$data -> id}}">{{$data->name}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Content</label>
                      <textarea name="content" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$article->content}}</textarea>
                  </div>
                    
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-article-admin')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection