<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <div class="container m-auto mt-5 d-flex">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Continent</th>
                    <th>Country</th>
                    <th>Capital</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students_table as $student)
                <tr>
                    <td>{{$student->Name}}</td>
                    <td>{{$student->Age}}</td>
                    <td>{{$student->Address}}</td>
                    <td>{{$student->Course}}</td>
                    <td>{{$student->Year}}</td>
                    <td>{{$student->Continent}}</td>
                    <td>{{$student->Country_name}}</td>
                    <td>{{$student->Capital}}</td>
                    <td>
                        <form action="{{route('edit-student',$student->id)}}" method="get">
                            @csrf
                            <button type="submit">
                                EDIT
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('delete-student',$student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
    <a href="{{route('create-student')}}">Create</a>
    </div>

</body>
</html>