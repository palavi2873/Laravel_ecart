<x-app-layout>
    <x-slot name="header">
        <div class="header-bar">
            <form action="/search" method="post">
                @csrf
                <input
                type="text"
                name="identify"
                class="search-box"
                placeholder="Search for products..."
                >

                <button class="btn btn-primary">Search</button>
            </form>
        </div>

    </x-slot>
    <div class=" container allproduct">
        <div class="row p-3">
            <div class="col-md-3 mb-3">
                <div class="card">
                  <input type="hidden" name="id" id="1">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/688097/87/mod01/fnd/IND/fmt/png/Essentials-Tape-Women's-Full-Zip-Cotton-Hoodie"
                    class="card-img-top" style="height:200px; object-fit:cover;">
                    <p>$2300</p><button>Add to cart</button><button>Buy now</button>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                   <input type="hidden" name="id" id="2">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/688097/87/mod02/fnd/IND/fmt/png/Essentials-Tape-Women's-Full-Zip-Cotton-Hoodie"
                    class="card-img-top" style="height:200px; object-fit:cover;">
                    <p>$2300</p><button>Add to cart</button><button>Buy now</button>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                  <input type="hidden" name="id" id="3">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/688097/87/mod03/fnd/IND/fmt/png/Essentials-Tape-Women's-Full-Zip-Cotton-Hoodie"
                    class="card-img-top" style="height:200px; object-fit:cover;">
                    <p>$2300</p><button>Add to cart</button><button>Buy now</button>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                  <input type="hidden" name="id" id="4">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/688097/87/fnd/IND/fmt/png/Essentials-Tape-Women's-Full-Zip-Cotton-Hoodie"
                    class="card-img-top" style="height:200px; object-fit:cover;">
                    <p>$2300</p><button>Add to cart</button><button>Buy now</button>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-md-3 mb-3">
              <div class="card">
               <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/626705/68/mod03/fnd/IND/fmt/png/PUMA-x-KIDSUPER-Women's-Top" class="card-img-top" style="height:200px; object-fit:cover;">
               <p>$2123</p><button>Add to cart</button><button>Buy now</button>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
               <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/626705/68/mod02/fnd/IND/fmt/png/PUMA-x-KIDSUPER-Women's-Top" style="height:200px; object-fit:cover;">
               <p>$2123</p><button>Add to cart</button><button>Buy now</button>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
               <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/626705/68/mod01/fnd/IND/fmt/png/PUMA-x-KIDSUPER-Women's-Top" style="height:200px; object-fit:cover;">
               <p>$2123</p><button>Add to cart</button><button>Buy now</button>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
               <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/626705/68/fnd/IND/fmt/png/PUMA-x-KIDSUPER-Women's-Top" style="height:200px; object-fit:cover;">
               <p>$2123</p><button>Add to cart</button><button>Buy now</button>
              </div>
            </div>

        </div>  
    </div>

</div>

</x-app-layout>