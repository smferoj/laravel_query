<h2> All Contact Page </h2>
<a href="{{URL::to('/')}}">Home</a>
<a href="{{URL::to('/insert-data')}}">Add New </a>
<table >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach($contacts as $contact)
       <tr>
        <th>{{$contact->id}}</th>
        <th>{{$contact->name}}</th>
        <th>{{$contact->email}}</th>
        <th>{{$contact->phone}}</th>
        <th>{{$contact->description}}</th>
        <th>
            <a href="{{URL::to('edit-contact/'.$contact->id)}}">Edit</a>
            <a href="{{URL::to('delete-contact/'.$contact->id)}}">Delete</a>
        </th>
    </tr>
    @endforeach
</table>