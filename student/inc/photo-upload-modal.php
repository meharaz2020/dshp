<div class="modal fade" id="photouploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><div id="upload-demo" style="max-width:350px"></div></center>
       
                
        <div class="col-md-12" style="margin-left: 10px;">
                <strong>Select Image:</strong>
                <br>
                <input type="file" id="upload" accept="image/x-png,image/gif,image/jpeg" required>
                <hr>
                <button class="btn btn-success upload-result btn-md">Update</button>
                <br><br>
                
        </div>

        <script type="text/javascript">


        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });


        $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle,square
            },
            boundary: {
                width: 300,
                height: 300
            }
        });


        $('#upload').on('change', function () { 
          var reader = new FileReader();
            reader.onload = function (e) {
              $uploadCrop.croppie('bind', {
                url: e.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(this.files[0]);
        });


        $('.upload-result').on('click', function (ev) {
          $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
          }).then(function (resp) {
            $.ajax({
              url: "../backend/profile-photo-upload.php",
              type: "POST",
              data: {"image":resp},
              success: function (data) {
                //html = '<img src="' + resp + '" />';
                //$("#upload-demo-i").html(html);
                location.reload();
              }
            });
          });
        });


        </script>
    </div>
  </div>
</div>
