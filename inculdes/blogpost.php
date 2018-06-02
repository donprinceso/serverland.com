<?php

class blogpost {
    public $id;
    public $title;
    public $post;
    public $author;
    public $tags;
    public $datePosted;
    
    
    public function __construct($id=null, $title=null, $post=null, $author=null, $tags=null, $datePosted=null) {
        global $con;
        if(!empty($id)){
        $this->id = $id;
        }
        if(!empty($title)){
        $this->title = $title;
        }
        if(!empty($post)){
        $this->post = $post;
        }
        if(!empty($datePosted)){
        $splitDate = explode("-", $datePosted);
        $this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
        }
        // get the author form the database 
        if(!empty($author)){
        $query= mysqli_query($con,"SELECT name FROM people WHERE id=".$author);
        $row = mysqli_fetch_assoc($query);
        $this->author = $row["name"];
        }
       // $query= mysqli_query($con,"SELECT * FROM blog_post_tags WHERE blog_post_tags.blog_post_id=".$id);
                
        $postTags="NO Tags";
        if(!empty($id)){
        $query = mysql_query($con,"SELECT tags * FROM blog_post_tags LEFT JOIN (tags) ON (blog_post_tags.tag_id = tags.id) WHERE blog_post_tags.blog_post_id = " . $id);  
        $tagsArray=array();
        $tagsIdArray=array();
        while($row = mysqli_fetch_assoc($query)){
            array_push($tagsArray, $row["name"]);
            array_push($tagsIdArray, $row["id"]);
        }
        
        if(sizeof($tagsArray)>0){
            foreach ($tagsArray as $tags)
                {
                if($postTags=="NO Tags")
                    {
                    $postTags=$tags;
                }
            else {
             $postTags=$postTags.",".$tags;
            }
            }
        }
        }
        $this->tags=$postTags;
    }

}
