<?php
include "header.php";
?>
    <main role="main">

         <div class="container">
          <div class="row mt50">
          <div class="col-md-12">
         <h2 class="text-center">Галерея ColorBox</h2>
        </div>
        <div class="col-md-10">
          <a class="gal" href="img/Koala.jpg" title="КОАЛА"><img src="img/Koala.jpg" width="200" height="200" alt="">КОАЛА-1</a>
          <a class="gal" href="img/Desert.jpg" title="Десерт "><img src="img/Desert.jpg"  width="200" height="200" alt=""></a>
          <a class="gal" href="img/Jellyfish.jpg" title=" Пустыня"><img src="img/Jellyfish.jpg" width="200" height="200"  alt=""></a>
        </div>

         <div class="col-md-6">
          <a href="#inline_content" class="btn btn-lg btn-danger inline"> Инлайн Контент</a>
               <div style="display:none;">
                <div id="inline_content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque totam explicabo cumque dolorum fuga modi necessitatibus dolore, ex voluptatem qui! Voluptatum illo ut at, officiis, sequi sapiente a ab veniam.
                  </p>
                </div>
                 
               </div>
        </div>
    </div>
    </div>

        
<?php 
include "footer.php";
?>

    