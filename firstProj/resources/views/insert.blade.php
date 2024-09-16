<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<form method="post" action="{{url('/insert')}}">
    @csrf
<div class="mb-3">
  <label  class="form-label">Employee Name</label>
  <input type="text" class="form-control" name="EmpName">
</div>
<div class="mb-3">
  <label  class="form-label">Age</label>
  <input type="text" class="form-control" name="EmpAge">
</div>
<input type="submit" value="insert" class='btn btn-success'>

<form>