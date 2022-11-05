<style>
    input[type=number], select {
        width: 45%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        box-sizing: border-box;
}

input[type=submit] {
  width: 45%;
  background-color: #f06c5b;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #f06c5b;
}
</style>

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of food items with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">



                  @foreach($data as $data)

                  <form action="{{url('/addcart',$data->id)}}" method="post">

                    @csrf

                    <div class="item">
                      
                        <div  style="background-image: url('/foodimage/{{ $data->image }}')" class='card'>
                    <div class="price"><h6>৳{{ $data->price }}</h6></div>
                            <div class='info'>
                                <h1 class='title'>{{ $data->title }}</h1>
                                <p class='description'>{{ $data->description }}</p>
                              <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                 </div>

                                </div>
                            </div>

                        
                        <input type="number" name="quantity" min="1" value="1" style="margin: 3%">
                        <input type="submit" value="Add to cart">
                        
                        
                                                     
                    </div>

                    </form>

                        
                    @endforeach





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->