<nav aria-label="breadcrumb" class="mt-2 mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
    </ol>
  </nav>
<div class="row">
  <div class="col"><h3 class="text-uppercase">{{$title}}</h3></div>
  <div class="col-auto">
    @include('backend.templates.action_group',['controllerName'=>$controllerName,'buttons'=>$buttons])
  </div>
</div>