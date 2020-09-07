@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<form action="{{route('organisations.update',$organisations->id)}}" method="post">
@csrf
@method('PATH')
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
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" style="width: 300px;" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" style="width: 300px;" />
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" style="width: 300px;" />
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="textarea" id="email" name="email" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="interest_rate">Interest_rate</label>
    <input type="text" id="interest_rate" name="interest_rate" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="period">Period</label>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="3">3 months
    </lable>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="6">6 months
    </lable>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="9">9 months
    </lable>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="1">1 year
    </lable>
    </div>
    </div>
    <div class="form-group">
    <label for="service">Service</label>
    <input type="text" id="service" name="service" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="rule">Rule</label>
    <textarea id="rule" name="rule" class="form-control" rows="5" style="width: 300px;" ></textarea>
    </div>
    <div class="form-group">
        <label>Saving ID</label>
        <select name="saving_id" class="form-control" style="width:300px;">
            <option>Select name</option>
            @foreach($savings as $saving)
            <option value="{{$saving->id}}">{{$saving->id}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <input type="submit" value="Register" />
    </div>
</div>
</form>
</div>
@endsection