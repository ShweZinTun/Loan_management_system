@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<form action="/customers" method="post">
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
    <label for="number">Number</label>
    <input type="text" id="number" name="number" class="form-control @error('name') is-invalid @enderror" style="width: 300px;" />
    @error('number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" style="width: 300px;" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="gender">Gender</label><br>
    <input type="radio" id="gender" name="gender" value="male" />Male
    <input type="radio" id="gender" name="gender" value="female"/>Female
    </div>
    <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" id="dob" name="dob" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="nrc">NRC</label>
    <input type="text" id="nrc" name="nrc" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input type="text" id="age" name="age" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="marital_status">Marital Status</label>
    <select name="marital_status" class="form-control" style="width:300px;">
    <option></option>
    <option value="single">Single</option>
    <option value="married">Married</option>
    </select>
    </div>
    <div class="form-group">
    <label for="occupation">Occupation</label>
    <input type="text" id="occupation" name="occupation" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="representative">Representative</label>
    <input type="text" id="representative" name="representative" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="start_date">Start Date</label>
    <input type="date" id="start_date" name="start_date" class="form-control" style="width: 300px;" />
    </div>
    <div class="form-group">
    <label for="period">Period</label>
    <input type="text" id="period" name="period" class="form-control" style="width: 300px;" />
    </div>
    
    <div class="form-group">
        <label>Organisation ID</label>
        <select name="organisation_id" class="form-control" style="width:300px;">
            <option>Select name</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
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