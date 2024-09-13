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
              <form method="POST" action="{{route('mybooking')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" value="{{$booking->title}}"  name="title" class="form-control" id="" placeholder="Enter title">
                    </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" value="{{$booking->description}}"  name="description" class="form-control" id="" placeholder="Enter description1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Button_txt</label>
                    <input type="text" value="{{$booking->button_txt}}"  name="button_txt" class="form-control" id="" placeholder="Enter button_txt">
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