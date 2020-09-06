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
    <div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount" class="form-control @error('amount') is-invalid @enderror" style="width: 300px;" />
    @error('amount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="period">Period</label>
    <input type="text" id="period" name="period" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="total_amount">Service</label>
    <input type="text" id="total_amount" name="total_amount" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
        <input type="submit" value="Register" />
    </div>
</div>
</form>
</div>
@endsection