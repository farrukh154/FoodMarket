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
              <form method="POST" action="{{route('headerme')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" value="{{$header->title}}"  name="title" class="form-control" id="" placeholder="Enter title">
                    </div>
                    <label for="exampleInputEmail1">button_txt</label>
                    <input type="text" value="{{$header->button_text}}"  name="button_text" class="form-control" id="" placeholder="Enter button_txt">
                  </div>
                  <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" value="{{$header->image}}" name="image" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                   <textarea name="description"  id="" cols="30" rows="10" class="form-control">{{ $header->description}}</textarea>
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