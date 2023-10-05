<?php 
$posts = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM posts ORDER BY id ASC"), MYSQLI_ASSOC);
mysqli_close($connection);
empty($posts) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($posts as $post){ 
                                echo 
                                    '<div class="row" style = "padding:10px;max-width:70%">
                                        <div class="card w-60 mx-auto">
                                        <form method="post" action="viewTopic.php">
                                            <button class="btn btn-link" type = "submit">'.$post['topic'].'</button>
                                            <input type="hidden" name="topic" value="'.$post['topic'].'"/>
                                        </form>
                                                <div class="card-body"> 
                                                <h1 class="card-title">'.$post['title']. '</h1>
                                                <p class = "card-text">'.$post['description'].'</p>
                                                <form method="post" action="viewPost.php">
                                                    <button class="btn btn-link" type = "submit">View Discussion</button>
                                                    <input type="hidden" name="id" value="'.$post['id'].'"/>
                                                </form>
                                                </div>
                                                <div class="card-footer text-muted"><span>2 days ago</span><span class = "float-end">Posted by: '.$post['user'].'</span></div>
                                    </div>
                                    </div>';
                            }

                        }else {
                            echo '<script>alert("Unable to display posts")</script>';
                            }
?>