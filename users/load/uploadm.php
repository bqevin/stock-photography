              <form class="form-login" action="uploaded.php" method="post" enctype="multipart/form-data">
                          <h2 class="form-login-heading">Model Upload</h2>
                  <div class="login-wrap">   

                      <input type="text" name="title"  class="form-control" placeholder="Image Title" required/>

                              <br>
                      <input type="number" name="price"  class="form-control" placeholder="Image Price" required>
                      <input type="hidden" name="genre"  value="models" >
                              <br>


                      select image<input type="file" name="image_file" class="form-control" placeholder="Image Location" autofocus required>
                              <br>

                      <label for="comment">Description</label>
                      <textarea class="form-control" rows="4" name="description"></textarea>
                              <br>
                               <label for="keyword">Keywords</label>
                      <textarea class="form-control" rows="2" placeholder="eg..people,2016" name="keywords"></textarea>
                  </div>
                              <br>
                      <button  class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> Upload</button>
                              <hr>
                </div>
          </form>
