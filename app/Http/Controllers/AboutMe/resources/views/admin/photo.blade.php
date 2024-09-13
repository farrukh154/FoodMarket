<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3>Projects</h3>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @forelse($photo as $item)
          <div class="col-6">
            <form action="{{route('photo.update', $item->id)}}" method="POST" class="p-3" enctype="multipart/form-data">
              @csrf
                <label for="">Фотография</label>
                <input type="file" class="form-control" name="image" value="{{$item->image}}">
                <button class="btn btn-success w-25 my-3" style="margin-left: 75% !important">Send</button> 
            </form>
          </div>
          @empty
  
          @endempty
        </div>
      </div>
    </div>
  </section>