<?php

include 'inculdes/blogpost.php';

function GetBlogPost($id=null,$Tagsid=null){
    $con= mysqli_connect('localhost', 'root', '')or die("Sorry can`t conncet to the database");
    mysqli_select_db($con,"blog_db")or die("we were unable to connect to the database");
    if(!empty($id)){
       $query = $con->query("SELECT * FROM blog_posts WHERE id = " . $id . " ORDER BY id DESC");
    }
    elseif (!empty ($Tagsid))
    {
      $query = mysqli_query($con,"SELECT blog_posts.* FROM blog_post_tags LEFT JOIN (blog_posts) ON (blog_post_tags.postID = blog_posts.id) WHERE blog_post_tags.tagID =" . $tag_ID . " ORDER BY blog_posts.id DESC");
    }
    else
    {
      $query = $con->query("SELECT * FROM blog_posts ORDER BY id DESC");
    }
   // $result= mysqli_query($query);
    $postArray = array();
	while ($row = mysqli_fetch_assoc($query))
	{
		$myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row["author_id"], $row['date_posted']);
		array_push($postArray, $myPost);
	}
	return $postArray;
}
