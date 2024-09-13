<section class="content my-5">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('skills.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" value="{{$skills->title}}"  name="title" class="form-control" id="" placeholder="Enter title">
                    </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Description1</label>
                      <input type="text" value="{{$skills->description1}}"  name="description1" class="form-control" id="" placeholder="Enter description1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description2</label>
                    <input type="text" value="{{$skills->description2}}"  name="description2" class="form-control" id="" placeholder="Enter description2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description3</label>
                    <input type="text" value="{{$skills->description3}}"  name="description3" class="form-control" id="" placeholder="Enter description3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description3</label>
                    <input type="file" value="{{$skills->image}}"  name="image" class="form-control" id="" placeholder="Enter description3">
                  </div>
                
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
  </section>