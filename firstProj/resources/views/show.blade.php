<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@foreach ($data as $emp)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$emp->id}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$emp->Emp_name}}</h6>
    <p class="card-text">{{$emp->Age}}</p>
    <a href="#" class="card-link btn btn-success">Edit</a>
    <a href="delete/{{$emp->id}}" class="card-link btn btn-danger" >Delete</a>
  </div>
</div>


@endforeach