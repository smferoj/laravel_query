<p> Insert Data </p>

<form action="{{url('data-add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="email" name="email" placeholder="email">
    <br>
    <input type="text" name="phone" placeholder="phone">
    <br>
    <input type="text" name="description" placeholder="description">
    <br>
    
    <input type="submit" name="submit" value="submit">
</form>