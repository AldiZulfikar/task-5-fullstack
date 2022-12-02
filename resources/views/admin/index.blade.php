@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.header')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-12 col-sm-12">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">AZ</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Hello!</p>
                <h4 class="mb-0">Wellcome Back!</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">{{$user->name}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection