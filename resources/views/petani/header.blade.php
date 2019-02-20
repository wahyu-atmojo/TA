<div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="index.html">Tanitani</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                  <form action="{{action('BiodataController@index')}}" method="get">
                    <div class="input-group form">
                         <input type="text" class="form-control" name="search" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="submit">Search</button>
                         </span>
                    </div>
                    </form>
                  </div>
                </div>
             </div>
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>