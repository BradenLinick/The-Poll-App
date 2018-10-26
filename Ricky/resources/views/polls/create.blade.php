@extends('layouts.app')

@section('content')

<body>
    <div class="container-fluid">
        <div class="container">
          <form action="{{ action('PollController@store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-header">Create Poll</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Question</label>
                    <input type="text" name="question" class="form-control" />
                    <br>
                    <label>Answer 1</label>
                    <input type="text" name="option[0]" class="form-control" />
                    <br>
                    <label>Answer 2</label>
                    <input type="text" name="option[1]" class="form-control" />
                    <br>

                    <div class="col-sm-4" id="container">
                        <label>Choice number (max. 100)</label><br />
                    
                        <input type="text" id="member" name="member" value=""><br />
                        <button type="submit" id="filldetails" onclick="addFields()">Choices update</a>
    
                    </div>
                    
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div style="padding:20px 0px"></div>
            <div class="row">

            
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-success">Create Poll</button>
                </div>
            </div>
        </div>

        <div style="padding:60px 0px"></div>

      </form>


    </div>

    <script>
        function addFields() {
            var number = document.getElementById("member").value;
            var container = document.getElementById("container");
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i = 2; i < number; i++) {
                container.appendChild(document.createTextNode("Answer " + (i + 1)));
                var input = document.createElement("input");
                input.type = "text";
                input.name = `option[${i}]`;
                container.appendChild(input);
                container.appendChild(document.createElement("br"));
            }
        }
    </script>


</body>

@endsection