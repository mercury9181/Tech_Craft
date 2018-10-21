<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .modal-backdrop {
background-color: transparent;
}
.modal-backdrop-transparent {
position: fixed;
top: 0;
right: 0;
bottom: 0;
left: 0;
background-color: transparent;
opacity: 0;
width: 100%;
height: 100%;
z-index: -1000;
}

.modal-backdrop-blue {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: blue;
  opacity: 0.6;
  width: 100%;
  height: 100%;
  z-index: 1040;
}
.modal-transition {
  transition: all 0.4s ease;
}

    </style>
  </head>
  <body>


    <!-- Button trigger modal -->
    <button id="orange-button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#orange-modal" data-color="orange">
      orange modal
    </button>
    <button id="blue-button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#blue-modal" data-color="blue">
      blue modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="orange-modal" tabindex="-1" role="dialog" aria-labelledby="orange-modal-label" data-color="orange">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="orange-modal-title">Orange modal</h4>
          </div>
          <div class="modal-body">
            Content
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="blue-modal" tabindex="-1" role="dialog" aria-labelledby="blue-modal-label" data-color="blue">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="blue-modal-title">Blue modal</h4>
          </div>
          <div class="modal-body">
            Content
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div id="modal-backdrop" class="modal-backdrop-transparent modal-transition"></div>

  </body>
</html>

<script type="text/javascript">

$('[id$="-button"]').on("click", function (e) {
  var color = $(this).attr('data-color');
  var colorBackdrop = 'modal-backdrop-' + color;
  // alert(color);
  $('#modal-backdrop').addClass(colorBackdrop);
});
$('.btn-close, .modal').on("click", function (e) {
  var color = $('.in').attr('data-color');
  var activeBackdrop = 'modal-backdrop-' + color;
  $('#modal-backdrop').removeClass(activeBackdrop);
});

</script>
