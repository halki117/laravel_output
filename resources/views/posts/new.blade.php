@extends('layouts.app')

@section('content')
    <p>新規作成</p>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <input type="submit" value="送信するよ" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection