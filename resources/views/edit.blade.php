<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" href="{{route('post-student')}}">
        @csrf
        @method('PUT')
        <div>

        <div>
            <div style="border: solid 2px; margin: 10px; padding: 20px; width: 400px;">
                <h5 style="text-align: center;">Student Profile</h5>
                <label for="student_name">Student Name</label>
                <input type="text" name="Name" id="Name" class="form-control" value="{{$student -> Name}}">

                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" value="{{$student -> Age}}">

                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$student -> Address}}">
            </div>

            <div>
                <h5 style="text-align: center;">Academic</h5>
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" value="{{$academic -> Course}}">

                <label for="year">Year</label>
                <input type="text" name="year" id="year" class="form-control" value="{{$academic -> Year}}">
            </div>

            <div>
                <h5 style="text-align: center;">Country</h5>
                <label for="continent">Continent</label>
                <input type="text" name="continent" id="continent" class="form-control" value="{{$country -> Continent}}">

                <label for="name">Country</label>
                <input type="text" name="Country_name" id="Country_name" class="form-control" value="{{$country -> Country_name}}">

                <label for="capital">Capital</label>
                <input type="text" name="capital" id="capital" class="form-control" value="{{$country -> Capital}}">
            </div>
        </div>

            <button type="submit" >Submit</button>
        </div>

    </form>

</body>
</html>
