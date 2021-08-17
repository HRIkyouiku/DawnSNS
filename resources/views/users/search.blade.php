@extends('layouts.login')

@section('content')
{!! Form::open(['url'=>'/search']) !!}
{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['required','placeholder' => 'ユーザー名','class' => 'input']) }}
<button type="submit" class="btn btn-primary">検索</button>
{!! Form::close() !!}

<? if (!empty($searchname)){?>
    <div class="searchlog">
        <p>検索ワード:{{$searchname}}</p>
    </div>
<? } ?>

<table class='table table-hover'>
    @foreach ($list as $list)
    <tr>
        <td><img src="{{asset('images/'.$list->images) }}"></td>
        <td>{{ $list->username }}</td>
        <td><a class="btn btn-primary" href="/post/{{$list->id}}/update-form">follow</a></td>
    </tr>
    @endforeach
</table>
@endsection
