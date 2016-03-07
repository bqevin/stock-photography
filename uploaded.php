<?php
session_start();
function getExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
}

if(isset($_FILES['image_file']))
{
    $thumb_size = 250; //max image size in Pixels
    $max_height = 180;
    $small_size = 500; //max image size in Pixels
    $medium_size = 1000; //medium image size in Pixels
    $destination_folder_thumbs = 'assets/images/thumbnails/';
    $destination_folder_small = 'assets/images/small/';
    $destination_folder_medium = 'assets/images/medium/';
    $destination_folder_original = 'assets/images/original/';
    $watermark_png_file_land = 'assets/images/watermark/watermark_land.png'; //watermark png file
    $watermark_png_file_port = 'assets/images/watermark/watermark_port.png'; //watermark png file
    $watermark_png_file_thumb = 'assets/images/watermark/watermark_thumb.png'; //watermark png file
    $destination_folder_thumbnails = "assets/images/thumbs/";


    $image_name = $_FILES['image_file']['name']; //file name
    $image_size = $_FILES['image_file']['size']; //file size
    $image_temp = $_FILES['image_file']['tmp_name']; //file temp
    $image_type = $_FILES['image_file']['type']; //file type
    switch(strtolower($image_type)){ //determine uploaded image type
          //Create new image from file
          case 'image/png':
          $image_resource =  imagecreatefrompng($image_temp);
          break;
          case 'image/gif':
          $image_resource =  imagecreatefromgif($image_temp);
          break;
          case 'image/jpeg':
          ini_set('memory_limit', '-1');
          $image_resource = imagecreatefromjpeg($image_temp);
          break;
          default:
          $image_resource = false;
        }

    if($image_resource){
      //Copy and resize part of an image with resampling

      list($img_width, $img_height) = getimagesize($image_temp);

      $thumb_height=250;
      $small_width=450;

      $thumb_width = ($img_width/$img_height)*$thumb_height;
      $tmp_thumb=imagecreatetruecolor($thumb_width,$thumb_height);

      $small_height = ($img_height/$img_width)*$small_width;
      $tmp_small=imagecreatetruecolor($small_width,$small_height);

      imagecopyresampled($tmp_thumb,$image_resource,0,0,0,0,$thumb_width,$thumb_height,$img_width,$img_height);
      imagecopyresampled($tmp_small,$image_resource,0,0,0,0,$small_width,$small_height,$img_width,$img_height);

      $filename1 = $destination_folder_thumbnails. $_FILES['image_file']['name'];
      $filename2 = $destination_folder_small. $_FILES['image_file']['name'];

      imagejpeg($tmp_thumb,$filename1,100);
      imagejpeg($tmp_small,$filename2,100);

        //Construct a proportional size of new image
        $image_scale_medium       = min($medium_size / $img_width, $medium_size / $img_height);

        $new_image_width_medium    = ceil($image_scale_medium * $img_width);

        $new_image_height_medium   = ceil($image_scale_medium * $img_height);


        $new_canvas_medium         = imagecreatetruecolor($new_image_width_medium , $new_image_height_medium);

        if(imagecopyresampled($tmp_thumb, $image_resource , 0, 0, 0, 0 ,$thumb_width,$thumb_height, $img_width, $img_height))
        {

            if(!is_dir($destination_folder_thumbnails)){
              mkdir($destination_folder_thumbnails);//create dir if it doesn't exist
            }

        //center watermark
            $watermark_left = ($thumb_width/2)-(150); //watermark left
            $watermark_bottom = ($thumb_height/2)-(150); //watermark bottom

            $watermark = imagecreatefrompng($watermark_png_file_thumb); //watermark image
            imagecopy($tmp_thumb, $watermark, $watermark_left, $watermark_bottom, 0, 0,300,300); //merge image


              //Or Save image to the folder
            imagejpeg($tmp_thumb, $destination_folder_thumbnails.'/'.$image_name , 90);
          }


if(imagecopyresampled($tmp_small, $image_resource , 0, 0, 0, 0 ,$small_width,$small_height, $img_width, $img_height))
          {

              if(!is_dir($destination_folder_small)){
                mkdir($destination_folder_small);//create dir if it doesn't exist
              }

        if($small_width > $small_height){
          //center watermark
              $watermark_left = 0; //watermark left
              $watermark_bottom = 30; //watermark bottom

        
         $watermark = imagecreatefrompng($watermark_png_file_land); //watermark image
              imagecopy($tmp_small, $watermark, $watermark_left, $watermark_bottom, 0, 0,450, 500); //merge image  
               //Or Save image to the folder
              imagejpeg($tmp_small, $destination_folder_small.'/'.$image_name , 90);
                
                }else{
              
              //center watermark
              $watermark_left = 0; //watermark left
              $watermark_bottom = 30; //watermark bottom

        
         $watermark = imagecreatefrompng($watermark_png_file_port); //watermark image
              imagecopy($tmp_small, $watermark, $watermark_left, $watermark_bottom, 0, 0,450, 500); //merge image  
               //Or Save image to the folder
              imagejpeg($tmp_small, $destination_folder_small.'/'.$image_name , 90);
                
                }
            }





      if(imagecopyresampled($new_canvas_medium, $image_resource, 0, 0, 0, 0, $new_image_width_medium, $new_image_height_medium, $img_width, $img_height))
        {

            if(!is_dir($destination_folder_medium)){
              mkdir($destination_folder_medium);//create dir if it doesn't exist
            }
            imagejpeg($new_canvas_medium, $destination_folder_medium.'/'.$image_name , 90);
          }


      if(!is_dir($destination_folder_original)){
        mkdir($destination_folder_original);//create dir if it doesn't exist
      }
          $source = $_FILES['image_file']['tmp_name'];
          $target = $destination_folder_original . $image_name;
          move_uploaded_file($source, $target);
  }
}

?>
<?php
    $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
              
              mysql_select_db( "mjedevel_ia", $link); 
        if($link === false){
            die("ERROR: Could not connect. " . mysql_connect_error());
        }

        // Escape user inputs for security
        $image_title = mysql_real_escape_string($_POST['title'],$link);
        $image_genre = mysql_real_escape_string($_POST['genre'],$link);
        $image_price = mysql_real_escape_string($_POST['price'],$link);
        $image_author = $_SESSION['email'];
        $image_category = mysql_real_escape_string($_POST['category'],$link);
        $image_description = mysql_real_escape_string($_POST['description'],$link);
        $image_keywords = mysql_real_escape_string($_POST['keywords'],$link);
        $release =  $_FILES['release']['name'];
        $image_src =  $_FILES['image_file']['name'];
        $image_size = $_FILES['image_file']['size']; //file size



// attempt insert query execution
$sql = "INSERT INTO images (title,price,author,category,description,keywords,Release_form,url,genre)
 VALUES ('$image_title', '$image_price','$image_author','$image_category','$image_description','$image_keywords','$release','$image_src','$image_genre')";
   if(mysql_query($sql,$link)){
          header("Location: check.php");
      }else{
          echo "ERROR: Could not able to execute $sql. " . mysql_error($link);
        }


// close connection
  mysql_close($link);
  ?>
