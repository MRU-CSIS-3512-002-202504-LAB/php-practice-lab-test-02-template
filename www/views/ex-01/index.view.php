<?php require path_to('views/partials/head.partial.php') ?>

<!-- 

TODO: EX-01

Make these changes to this view:
  - Ensure clicking on the dog/cat will take the user
    back to the /ex-01 resource, but with the proper
    query string present.
  - Ensure that the image tag displays the desired path to
    the image that is set in the controller.

-->

<div class="container">
  <div id="animal-container">
    <p><a href="#">🐱</a></p>
    <p><a href="#">🐶</a></p>
  </div>
  <div id="pic-container">
    <img src="#" alt="">
  </div>
</div>

<?php require path_to('views/partials/foot.partial.php') ?>