<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CarRadio | Add Advertisement</title>
  </head>
  <body>
    <div class="container p-5">
        <h4 class="text-center">CarRadio.lk</h4>
        <h1 class="text-success text-center">Add your Advtertiment</h1>
        <form>
            <div class="form-group pt-4">
              <label for="formGroupExampleInput">First Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group pt-4">
              <label for="formGroupExampleInput2">Last Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group pt-4">
                <label for="formGroupExampleInput2">Brand</label>
            <select class="form-control form-control-sm">
                <option>Select</option>
                <option>Toyota</option>
                <option>Suzuki</option>
                <option>BMW</option>
              </select>
            </div>
            <div class="form-group pt-4">
                <label for="formGroupExampleInput2">Model</label>
            <select class="form-control form-control-sm">
                <option>Small select</option>
                <option>Small select</option>
                <option>Small select</option>
              </select>
            </div>
            <div class="form-group pt-4">
                <label for="formGroupExampleInput">Model Year</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>
            <div class="form-group pt-4">
              <label for="formGroupExampleInput2">Milege</label>
              <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group pt-4">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Condition</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                      <option selected>Choose...</option>
                      <option value="1">New</option>
                      <option value="2">Used</option>
                      <option value="3">Reconditional</option>
                    </select>
                  </div>
            </div>
            <div class="form-group pt-4">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Fuel Type</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                      <option selected>Choose...</option>
                      <option value="1">Diesel</option>
                      <option value="2">Petrol</option>
                      <option value="3">Electrical</option>
                    </select>
                  </div>
            </div>
            <div class="form-group pt-4">
                <label for="formGroupExampleInput">Price</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>
              <div class="form-group pt-4">
                <label for="exampleFormControlFile1"> Attach Images</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="text-center pt-4">
                <button class="btn btn-success" type="submit">POST</button>
              </div>
          </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>