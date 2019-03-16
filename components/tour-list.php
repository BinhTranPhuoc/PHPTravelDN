<?php
  $connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
  mysql_select_db("final", $connect) or die("Database not found!");
  mysql_query("SET NAMES 'utf8'");
  $query = mysql_query("select * from tour", $connect);



  while ($row = mysql_fetch_array($query)) {?>
  <div class="col-sm-4">
      <div class="panel polaroid item_blue">
        <div class="item_img">
          <img src="<?php echo $row["image"] ?>" class="img-responsive" alt="Image">
        </div>
        <div class="item-content">
          <h4><a href="view-detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h4>
          <div class="content_description">
            <p><?php echo $row['content'] ?></p>
          </div>
          <div class="content-infor">
            <div class="btn btn-primary">
            <span class="glyphicon glyphicon-thumbs-up"></span> Like
            </div>
            <div type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-comment"></span> comment
            </div>
            <a href="view-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
            Chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  <?php }
?>
