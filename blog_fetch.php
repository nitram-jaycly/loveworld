<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 include('classes/conn_blog.php');
 
 $query = "SELECT * FROM tbl_posts ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
    <div class="single-blog-post featured-post" style="padding-bottom: 50px;">
        <div class="single-video-post">
            <a href="'.$row["post_link"].'"><img src="'.$row["post_images"].'" alt=""></a>
        </div>
        <div class="post-data">
            <a href="#" class="post-catagory">Finance</a>
            <a href="'.$row["post_link"].'" class="post-title">
                <h6>'.$row["post_title"].'</h6>
            </a>
            <div class="post-meta">
                <p class="post-author"><b>By - <a href="#">'.$row["post_author"].'</a></b></p>
                <p class="post-excerp">'.$row["post_description"].'</p>
                <hr />
            </div>
        </div>
    </div> 
  ';
 }
}

?>