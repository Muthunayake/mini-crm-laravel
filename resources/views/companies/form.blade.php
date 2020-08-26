<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required
    @if(isset($company)) value="{{$company['name']}}" @else value="{{old('name')}}" @endif>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="enter email" 
    @if(isset($company)) value="{{$company['email']}}" @else value="{{old('email')}}" @endif>
</div>
<div class="form-group">
    <label for="web_site">Web Site</label>
    <input type="url" class="form-control" id="web_site" name="web_site" placeholder="enter web site"
    @if(isset($company)) value="{{$company['web_site']}}" @else value="{{old('web_site')}}" @endif>
</div>
<div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" class="form-control" id="logo" name="logo">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary float-right">Save</button>
</div>