
<div class="main">
      <ul id="og-grid" class="og-grid">
            <?php
              /* Attempt MySQL server connection. Assuming you are running MySQL
              server with default setting (user 'root' with no password) */
              $link = mysql_connect("localhost", "amn_stocker", "Token2016");
                                       
             
              mysql_select_db( "amn_stocker", $link);
              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysql_connect_error());
                }
                //declaring variable
                $input = $_POST["search_text"];
                $category = $_POST["category"];

             // Attempt select query execution
              // $sql = "SELECT * FROM images WHERE keywords LIKE '%$input%'  AND genre LIKE '%$category%' ";
            //  $sql = "SELECT * FROM users WHERE  keywords LIKE '%$input%'  AND genre LIKE '%$category%'   NOT IN (SELECT * FROM images) ";
               $sql= "SELECT keywords FROM images WHERE keywords LIKE '%$input%' NOT IN (SELECT  '%$input%' FROM users)";
 
              if($result = mysql_query($sql,$link)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){
                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."kb";
                        $size = round(filesize($src_water) * .0009765625)."kb";
                        $size_medium = round(filesize($src_medium) * .0009765625)."kb";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."mb";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='Small' > Small<br>
                                          <input type='radio' name='size' value='Medium' checked> Medium<br>
                                          <input type='radio' name='size' value='Large'> Large
                                      </form>";
                      $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";




                      ?>
                      <li>
                        <a href="" data-largesrc="<?php echo $src_water ?>" data-title="<?php echo $title ?>"
                            data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
                             data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
                              data-description="<?php echo $description  ?>" data-copywrite="<?php echo $copywrite ?>"
                            data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
                          data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
                             data-download="<?php echo $download ?>"
                             data><img src="<?php echo $src ?>" alt="not in folder"/>
                          </a>
                        </li>
                        <?php
                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
  </div>
  <script src="Grid/js/grid.js"></script>
  <script>
    $(function(){
      Grid.init();
    });
  </script>