@extends('layouts.login')

@section('content')
<img src="{{asset('images/'.'dawn.png') }}">
{!! Form::open(['url' => 'newpost']) !!}
{!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '何をつぶやこうか...?']) !!}
<button  class="btn btn-success pull-right"><img src="images/post.png">
</button>
{!! Form::close() !!}

<div class='container'>
        <h2 class='page-header'>投稿一覧</h2>
        @foreach ($list as $list)
        <table class='table table-hover'>
            <img src="" alt="">
            <tr>
                <td>{{ $list->posts }}</td>
                <td>{{ $list->created_at }}</td>
            </tr>

              <td><a class="btn btn-danger" href="{{$list->id}}/update">編集</a></td><img src="" alt="">

              <td><a class="btn btn-danger" href="{{$list->id}}/delete" onclick="return confirm('本当に削除しますか？')">削除</a></td><img src="" alt="">
        </table>
        @endforeach
</div>
@endsection
