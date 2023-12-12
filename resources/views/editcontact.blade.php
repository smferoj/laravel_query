<p> Edit Data </p>

<form action="{{url('update-contact/'.$edt->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$edt->name}}">
    <br>
    <input type="email" name="email" value="{{$edt->email}}">
    <br>
    <input type="text" name="phone" value="{{$edt->phone}}">
    <br>
    <input type="text" name="description" value="{{$edt->description}}">
    <br>
    
    <input type="submit" name="submit" value="submit">
</form>