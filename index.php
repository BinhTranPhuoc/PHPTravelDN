<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quảng bá du lịch Đà Nẵng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css4/bootstrap.min.css">
  <link rel="stylesheet" href="css3/bootstrap.min.css">
  <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="css/font-family.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js3/jquery.min.js"></script>
  <script src="js3/bootstrap.min.js"></script>
  <script src="js3/popper.min.js"></script>
  <script src="js4/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        
<!-- hearder -->

<?php include('components/header.php') ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php include('components/slide.php') ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- container 1-->
<div class="container text-center">
  <h3 class="title1">Bài Viết Nổi Bật</h3>
  <div class="row">
    <?php include('components/tour-list.php') ?>
  </div>
    <div id="paging-navbar clearfix">
      <div class="col-md-12">
        <ul class="pagination">
          <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">2</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div><br />
<!-- // container 1-->

<!-- footer -->
<?php include('components/footer.php') ?>
<!-- //footer -->
</body>
</html>