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
            <form method="POST" action="{{route('orders.update', request()->id   )}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{$order->name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" value="{{$order->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Message</label>
                 <textarea name="message"  id="" cols="30" rows="10" class="form-control">{{ $order->message}}</textarea>
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