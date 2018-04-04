<?php
include "header.php";
?>
    <main role="main">

         <div class="container">
          <div class="row mt50">
          <div class="col-md-12">
         <h2 class="text-center"> MENU SuperFish</h2>
        </div>

        <div class="col-md-6">
          <h2 class="text-center"> вертикальное меню </h2>
        </div>
        <ul class="sf-menu sf-vertical">
          <li><a href="#"> punkt1 </a></li>
          <li><a href="#"> punkt2 </a>
            <ul>
              <li><a href="#"> Pod-punkt2.1 </a></li>
              <li><a href="#"> Pod-punkt2.2 </a></li>
              <li><a href="#"> Pod-punkt2.3 </a></li>
            </ul>
          </li>
          <li><a href="#"> punkt3 </a></li>
          <li><a href="#"> punkt4 </a></li>
          <li><a href="#"> punkt5 </a></li>
        </ul>

        <div class="col-md-6">
          <h2 class="text-center"> горизонтальное меню </h2>
        </div>
        <ul class="sf-menu">
          <li><a href="#"> punkt1 </a></li>
          <li><a href="#"> punkt2 </a>
            <ul>
              <li><a href="#"> Pod-punkt2.1 </a></li>
              <li><a href="#"> Pod-punkt2.2 </a></li>
              <li><a href="#"> Pod-punkt2.3 </a></li>
            </ul>
          </li>
          <li><a href="#"> punkt3 </a></li>
          <li><a href="#"> punkt4 </a></li>
          <li><a href="#"> punkt5 </a></li>
        </ul>

<div class="col-md-6">
          <h2 class="text-center"> Menu NAVBAR </h2>
        </div>
        <ul class="sf-menu sf-navbar">
          <li><a href="#"> punkt1 </a></li>
          <li><a href="#"> punkt2 </a>
            <ul>
              <li><a href="#"> Pod-punkt2.1 </a></li>
              <li><a href="#"> Pod-punkt2.2 </a></li>
              <li><a href="#"> Pod-punkt2.3 </a></li>
            </ul>
          </li>
          <li><a href="#"> punkt3 </a></li>
          <li><a href="#"> punkt4 </a></li>
          <li><a href="#"> punkt5 </a></li>
        </ul>

        


        </div>
    </div>

        
        
    
        

            <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing mt50">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

            <div class="row mt50">
          <div class="col-md-6">
            <h2 class="text-center">Widget Slider</h2>
             <label for="amount">Выбор цены</label>
             <input type="text" id="amount">
            <div id="slider"></div>
          </div>
          </div>
        </div>

        <div class="col-md-6">
             <h2 class="text-center">Widget Dialog</h2>
             <div id="dialog">
               <form>
                <div class="form-group">
                   <label for="name" class="col-md-2">Имя</label>
                    <input type="name" class="col-md-10" id="name">
                 </div>
                 <div class="form-group">
                   <label for="password" class="col-md-2">пароль</label>
                    <input type="password" class="col-md-10" id="password">
                 </div>
                 <div class="form-group">
                   <label for="email" class="col-md-2">Почта</label>
                    <input type="email" class="col-md-10" id="email">
                 </div>
                 <button class="btn btn-lg btn-warning"> создать пользователя</button>
                 
               </form>
             </div>
             <button class="btn btn-lg btn-info" id="opdialog"> Регистрация</button>

              <div class="row mt50">
                <div class="col-md-6">
                  <h2> Widget Selectmenu</h2>
                  <form>
                    <div class="form-group">
                   <label for="spisok">Список</label>
                   <select name="spisok" id="spisok">
                     <option value="">option1</option>
                     <option value="">option2</option>
                     <option value="">option3</option>
                     <option value="">option4</option>
                   </select>
                   </div>
                  </form>
                </div>
                </div>
              </div>  

      </div>


          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
<?php 
include "footer.php";
?>

    