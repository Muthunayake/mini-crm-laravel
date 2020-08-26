<div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="enter first name" required 
    @if(isset($employee)) value="{{$employee['first_name']}}" @else value="{{old('first_name')}}" @endif>
</div>
<div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="enter last name" required 
    @if(isset($employee)) value="{{$employee['last_name']}}" @else value="{{old('last_name')}}" @endif>
</div>
<div class="form-group">
    <label for="company">Company</label>
    <select class="form-control" id="company_id" name="company_id">
        @forelse ($companies as $company)
            <option 
            @if(isset($employee) && $employee['company_id']==$company['id']) selected @endif
            @if(empty($employee) && old('company_id')==$company['id']) selected @endif
            value="{{$company['id']}}">{{$company['name']}}</option>
        @empty
            <option value="">Select Comapny</option>
        @endforelse   
        
    </select>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="enter email" 
    @if(isset($employee)) value="{{$employee['email']}}" @else value="{{old('email')}}" @endif>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="enter phone" maxlength="10" minlength="10"
    @if(isset($employee)) value="{{$employee['phone']}}" @else value="{{old('phone')}}" @endif>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary float-right">Save</button>
</div>