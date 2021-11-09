@extends('layout.app')

@section('content')
    <form action="{{ route('integration.update', auth()->user()->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-5">
                <label>Token</label>
                <input type="text" name="token_braip" id="token_braip" class="form-control" value="{{ auth()->user()->token_braip ?? '' }}">
            </div>
            <div class="col-md-2 mt-2">
                <input type="submit" class="btn btn-primary" value="braip">
            </div>
        </div>
    </form>
@endsection
@section('js')

@endsection
