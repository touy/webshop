<?php include 'type.php'; ?>

<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 align="center" style="margin-top:30px;">Client Store</h1>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="col-xl-6" style="margin-top:20px; float:left;">
              <img class="responsive" src="images/2.png" alt="" style="width:100%;">
            </div>
            <div class=" col-xl-6" style="float:right; margin-top:40px; align:center;">
              <div class="col-xl-4" style=" float:left;">
                <label for="Storename">Store name:</label> <br>
                <label for="Owner_name">Owner name:</label> <br>
                <label for="Storename">Contact details:</label> <br>
                <label for="Storename">Phone:</label> <br>
                <label for="Storename">GPS Location:</label>
                <label for="Storename">Contact details:</label>
              </div>
              <div class="input_store col-xl-8" style="float:right">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
                <input type="text" name="" value="">
              </div>
              <p style="margin-top:30px;"><i align="left"><input type="checkbox" name="" value="">Active</i></p>
              <div class="col-xl-4" style="float:left;">
                <a href="#" class="button_profile2"> <span class="btn-go-to-store langlao">ບັນທຶກ</span> </a>
              </div>
              <div class="col-xl-8" style="float:right;">
                <textarea name="editor3" id="editor3" rows="10" cols="80" style="width:100%;">
                </textarea>
                <script>
                    CKEDITOR.replace( 'editor3' );
                </script>
              </div>
          </div>

        </div>
      </div>
  </div>
</div>
