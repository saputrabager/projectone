@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="searchpanel">
                <form method="POST" action="{{ route('result') }}">
                    {{ csrf_field() }}
                    <input class="form-search" type="text" name="req-city" placeholder="Pilih kota ...">
                    <input class="form-search" type="text" name="req-type" placeholder="Pilih type ...">
                    <select class="form-search" id="sel1" name="req-pay" style="height: 26px">
                        <option value="none">Pilih cara bayar ...</option>
                        <option value="month">Bulanan</option>
                        <option value="year">Tahunan</option>
                    </select>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
                </form>
            </div>
        </div>
        <div class="col-md-2">
            <div class="user-info">
                <img src="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="newpost">
        <a href="{{ route('newpost') }}" title="create new post"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
    </div>
</div>
@endsection
