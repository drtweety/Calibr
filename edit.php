<?php

  require_once "header.php";

  require_once "app/classes/DB.php";
  require_once "app/classes/Posts.php";
  require_once "app/classes/UserInfo.php";

  if(!isset($_GET['id'])){
    die();
  }else if(!isset($_SESSION['username'])){
    echo '
      <div class="container container-10-margin">
        <div class="alert alert-danger" role="alert">You must be logged in to view this page! <a href="#" class="alert-link" data-toggle="modal" data-target="#loginModal">Click here to log in.</a></div>
      </div>
    ';
  }else{


?>
  <script type="text/javascript" src="scripts/getchildren.js"></script>

  <!-- Script for WYSIWYG editor-->
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8a09i3xybfqx77x70s7ap7bi4n1a2330gqidx5dwk21heikz"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height: 500,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
  });
  </script>
  <div class="container container-10-margin">
    <form class="" action="preview.php" method="post">

        <!--Grade Selection Field-->
      <p>
        <div class="form-group">
          <label for="grade-selector">Grade:</label>
          <select class="form-control" name="grade-selector" id="grade-selector" disabled><!--Enable after document load-->
            <option value="0" selected disabled>Select Grade</option>
            <option value="12">Grade 12</option>
            <option value="11">Grade 11</option>
          </select>
        </div>
      </p>
        <!--End Grade Selection Field-->
        <!--Subject Selection Field-->
      <p>
        <div class="form-group">
          <label for="subject-selector">Subject:</label>
          <select class="form-control" name="subject-selector" id="subject-selector" disabled>
            <option value="0" selected disabled>Select Subject</option>
          </select>
        </div>
      </p>
        <!--End Subject Selection Field-->
        <!--Chapter Selection Field-->
      <p>
        <div class="form-group">
          <label for="chapter-selector">Chapter:</label>
          <select class="form-control" name="chapter-selector" id="chapter-selector" disabled>
            <option value="0" selected disabled>Select Chapter</option>
          </select>
        </div>
      </p>
        <!--End Chapter Selection Field-->
        <!--Topic Selection Field-->
      <p>
        <div class="form-group">
          <label for="topic-selector">Topic:</label>
          <select class="form-control" name="topic-selector" id="topic-selector" disabled>
            <option value="0" selected disabled>Select Topic</option>
          </select>
        </div>
      </p>
        <!--End Topic Selection Field-->

      <!--Title field-->
      <p>
        <div class="form-group">
          <label for="post-title">Title:</label>
          <input type="text" name="title" class="form-control">
        </div>
      </p>

      <!--Text area-->
      <p>
        <textarea name="text"></textarea>
      </p>

      <!--Next and previous entry fields-->
      <!--This Feature will be added later
      <p>
        <div class="form-group">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="previous-entry" class="form-control" placeholder="Previous Entry(Optional)">
              </div>
              <div class="col-md-6">
                <input type="text" name="next-entry" class="form-control" placeholder="Next Entry(Optional)">
              </div>
            </div>
          </div>
        </div>
      </p>
      -->
      <p>
        <input type="submit" name="submit" value="Preview & Submit" class="btn btn-primary btn-lg btn-block">
      </p>
    </form>
  </div>
<?php
  }
?>
