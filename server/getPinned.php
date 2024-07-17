<?php
include('../server/db_connect.php');
?>
<?php 
$posts = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM posts WHERE user = 'CPT_Shank';"), MYSQLI_ASSOC);
mysqli_close($connection);
empty($posts) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($posts as $post){ 
                                echo 
                                    '
                                    <tr>
                                    <td scope="row">
                                        <div class="text-muted"><span>'.$post['user'].'</span></div>
                                    </td>
                                    <td>
                                      <h4 class="card-title">'.$post['title']. '</h4>
                                      <p class = "card-text">'.$post['description'].'</p>
                                      <form method="post" action="../client/viewPost.php">
                                          <button class="btn btn-link" type = "submit">View Discussion</button>
                                              <input type="hidden" name="id" value="'.$post['id'].'"/>
                                      </form>
                                      
                                  
                                  </td>
                                  <td>
                                  <div class="text-muted"><p>2 days ago</p></div>
                                  </td>
                                    <td><button class="btn btn-link" type = "submit">'.$post['topic'].'</button></td> 
                                    <td>120</td>
                                    </tr>';
                            }

                        }else {
                            echo '<script>alert("Unable to display posts")</script>';
                            }
?>