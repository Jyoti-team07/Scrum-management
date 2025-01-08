<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Scrum Management</title>
  </head>
  <body>

    <div class="container pt-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#TaskModal" data-bs-whatever="@mdo">Task Add</button>
          <form class="d-flex" method="post" action="{{ route('task.create') }}">
            @csrf
            <div class="modal fade" id="TaskModal" tabindex="-1" aria-labelledby="TaskModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Task Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">task title:</label>
                        <input type="text" class="form-control" id="task_title-name" name="task_title">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task des:</label>
                        <textarea class="form-control" id="message-text" name="task_des"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task status:</label>
                        <input class="form-control" id="message-text" name="task_status"></input>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task estimated hour:</label>
                        <input class="number" id="message-text" name="task_estimated_hour"></input>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task actual hour:</label>
                        <input class="number" id="message-text" name="task_actual_hour"></input>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task user stories id :</label>
                        <input class="number" id="message-text" name="task user stories id "></input>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">task users id :</label>
                        <input class="number" id="message-text" name="task_users_id "></input>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </nav>
    </div>

    <div class="container pt-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#UserModal" data-bs-whatever="">User Add</button>
          <form class="d-flex" method="post" action="{{ route('user.create') }}">
            @csrf
            <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="UserModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="task_title-name" name="users_name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Role:</label>
                        <input class="form-control" id="message-text" name="users_role"></input>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </nav>
    </div>

    <div class="container pt-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#sprintsModal" data-bs-whatever="">sprints Add</button>
          <form class="d-flex" method="post" action="{{ route('sprint.create') }}">
            @csrf
            <div class="modal fade" id="sprintsModal" tabindex="-1" aria-labelledby="sprintsModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sprints Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="task_title-name" name="users_name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Role:</label>
                        <input class="form-control" id="message-text" name="users_role"></input>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </nav>
    </div>

    <div class="container pt-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex">
            <button class="btn btn-outline-success" type="submit">Task</button>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </nav>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>