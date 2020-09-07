@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<form action="/savings" method="post">
@csrf
<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div>
    <h2>Saving</h2>
    <div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount" class="form-control @error('amount') is-invalid @enderror" style="width: 300px;" />
    @error('amount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="period">Period</label>
    <select name="period" class="form-control" style="width:300px;">
    <option></option>
    <option value="3">3 months</option>
    <option value="6">6 months</option>
    <option value="9">9 months</option>
    <option value="1">1 year</option>
    </select>
    </div>
    <div class="form-group">
        <input type="submit" value="Register" />
    </div>
</div>
</form>
</div>
@endsection