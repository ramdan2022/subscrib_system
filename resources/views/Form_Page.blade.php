<!DOCTYPE html>
<html>

<style>
    .div_form {
        text-align: center;
        padding-top: 50px;

    }

    label {
        display: inline-block;
        width: 150px;
        font-size: x-large;

    }

    .input_design {
        padding-bottom: 20px;
    }

    .ID {
        padding-bottom: 20px;
        font-size: 20px;


    }

    .errors {
        color: red;
        font-size: 20px;
    }

    .success {
        color: green;
        font-size: 30px;
    }
</style>
</head>


<div class="div_form">

    <!-- check if there is error from validation  form input -->
    @if($errors->any())
    @foreach($errors->all() as $error)
    <p class="errors">{{$error}}</p>
    @endforeach
    @endif

    <!-- in case success -->
    @if(session(key: 'message')){
    <p class="success">{{session()->get('message')}}</p>;


    @endif


    <!-- form -->
    <form action="{{url('/store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="input_design">
            <label for="name">Name</label>
            <input type="text" class="ID" name="name"><br>
        </div>

        <div class="input_design">
            <label for="email">Email</label>
            <input type="email" class="ID" name="email"><br>
        </div>


        <div class="input_design">
            <label for="password">password</label>
            <input type="password" name=" password">
        </div>



        <div class="input_design">
            <button type="submit">Submit</button>
        </div>

    </form>