<HTML>
<head>
<body>
<a href="{{'/create'}}"><button>Create</button></a>
<table border="1px solid black">
    <tr>
        <th>id</th>

        <th>name</th>
        <th>address</th>
        <th>DOB</th>
        <th>image</th>


    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->dob}}</td>
            <td><img src="{{asset('storage/image/'.$student-> image)}}" height="50px" width="50px"/></td>
        </tr>
    @endforeach
</table>
</body>
</head>
</HTML>
