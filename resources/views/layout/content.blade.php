<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
.btn-group{
    justify-content: center;
    padding-block:15%;
    width: 100%;
    
}
.btn{
    border-radius: 20% ;
}
#teacher{
    background-color: Orange;
}
#student{
background-color: DodgerBlue;
}
#class{
background-color: MediumSeaGreen;;
}
    </style>
</head>
<body>
   
        <div class="btn-group">
            <button class="btn" id="teacher" href="{{ route('teacher') }}"><h2>Teacher</h2></button>
            <button class="btn" id="student" href="{{ route('student') }}"><h2>Student</h2></button>
            <button class="btn" id="class" href="{{ route('class') }}"><h2>Class</h2></button>
            
        </div>
     
</body>
</html>