<section class="container-fluid">
  <div class="row">
    <div class="col-md-2 bg-dark" style="min-height: 550px;">
      <div id="accordian">
        <ul class="list-unstyled side-menu my-3">
                
              <li class="p-1"><a href="#select-1" data-toggle="collapse"><i class="fa fa-user"></i>Customer</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "/" || Request::path() == "customerlist"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-1" data-parent="#accordian">
                    <li><a href="{{url('/')}}">Add Customer</a></li>
                    <li><a href="{{url('/customerlist')}}">Customer List</a></li>
                  </ul>
              </li>
              <li class="p-1"><a href="#select-2" class="" data-toggle="collapse"><i class="fa fa-bandcamp"></i>Product</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "productAdd" || Request::path() == "productlist"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-2" data-parent="#accordian">
                    <li><a href="{{url('/productAdd')}}">Add Product</a></li>
                    <li><a href="{{url('/productlist')}}">Product List</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-3" class="" data-toggle="collapse"><i class="fa fa-meetup"></i>Inventories</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "addInventories" || Request::path() == "findBill"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-3" data-parent="#accordian">
                    <li><a href="{{url('/addInventories')}}">Add Item</a></li>
                    <li><a href="{{url('/findBill')}}">Find Bill</a></li>
                  </ul>
              </li>

             


        </ul>
      </div>
  </div>