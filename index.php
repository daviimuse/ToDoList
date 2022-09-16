<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Online ToDo List </title>
    <link rel="stylesheet" href="frontEnd/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" ></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(function(){
        $("#navbar").load("navbar.html"); 
      });
    </script>
  </head>
  <body>
      <section id="navbar"></section>
<!-- Task List -->
      <section id="taskList">
        <div class="list-group list-group-light">
          <li class="list-group-item">
            <input class="form-check-input" type="checkbox" value="" id="checkboxExample1" />
            <label class="form-check-label" for="checkboxExample1">TaskTitle1</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input" type="checkbox" value="" id="checkboxExample2" />
            <label class="form-check-label" for="checkboxExample2">TaskTitle2</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input" type="checkbox" value="" id="checkboxExample3" />
            <label class="form-check-label" for="checkboxExample3">TaskTitle3</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input" type="checkbox" value="" id="checkboxExample4" />
            <label class="form-check-label" for="checkboxExample4">TaskTitle4</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input" type="checkbox" value="" id="checkboxExample5" />
            <label class="form-check-label" for="checkboxExample5">TaskTitle5</label>
          </li>
        </div>
      </section>

<!-- Task Modal -->
      <section id="taskModal">
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add Task</button>
          <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
            <div class="modal-dialog modal-lg ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Task Infos</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>

                <label class="form-label" for="taskName">Task Title:</label>
                <input type="text" id="taskName" class="form-control"/>
                
                <div class="form-outline datetimepicker">
                  <input type="text" class="form-control" value="22/12/2020, 14:12:56" id="datetimepickerExample">
                  <label for="datetimepickerExample" class="form-label">Select Date and Time</label>
                </div>

                <!-- <div id="tagsBtn" class="modal-body">
                  <div class="btn-group dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">Tags</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">ExampleTag1</a></li>
                      <li><a class="dropdown-item">ExampleTag2</a></li>
                      <li><a class="dropdown-item">ExampleTag3</a></li>
                    </ul>
                  </div> -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Add Task</button>
                </div>

              </div>
            </div>
          </div>
      </section>
  </body>
</html>
