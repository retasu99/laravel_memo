@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center h-100">
    <form method="post" action="{{ url('login') }}">
        @csrf
        <div class="card rounded login-card-width shadow">
            <div class="card-body">

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul class="mb-0 mt-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif

                <div class="rounded-circle mx-auto border-gray border d-flex mt-3 icon-circle">
                    <img src="{{ asset('images/animal_stand_zou.png')  }}" class="w-75 mx-auto p-2" alt="icon"/>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-3 h2">{{ config('app.name') }}</div>
                </div>
                <div class="row mt-3">
                    <div class="offset-2 col-8 offset-2">
                        <label class="input-group w-100">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                </span>
                            <input type="text" name="email" class="form-control" placeholder="メールアドレス" value="{{ old('email') }}" autocomplete="off" />
                        </label>
                        <label class="input-group w-100">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </span>
                            <input type="password" name="password" class="form-control" placeholder="パスワード" autocomplete="off" />
                        </label>
                        <button type="submit" class="form-control btn btn-success">
                            ログイン
                        </button>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-center">
                        アカウントをお持ちではありませんか？
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route("user.register") }}" class="text-success">アカウントを作成</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection