<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                          <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
          </ul>
        </nav>
      <div class="row" style="display : flex">
        @foreach($list_produk as $produk)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{url('public')}}/images/p1.png" alt="">
              <a href="{{url('detail', $produk->id)}}" class="add_cart_btn">
                <span>
                  See detail
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
              {{$produk->nama}}
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> {{$produk->harga}}
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="btn_box" style="align-content: center">
      <a href="product" class="view_more-link">
        View More
      </a>
    </div>
  </section>