<?php 
require('../server/db_connect.php');

$topics = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM topics"), MYSQLI_ASSOC);
mysqli_close($connection);
empty($topics) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($topics as $topic){ 
                                echo 
                                    '<li>
                                        <form method="post" action="viewTopic.php">
                                            <button class="btn btn-link" type = "submit">'.$topic['topic'].'</button>
                                            <input type="hidden" name="topic" value="'.$topic['topic'].'"/>
                                        </form>
                                     </li>';
                            }
                        }else {
                            echo '<h5 class ="text-muted" style = "text-align:center;">No posts in this topic yet. </h5>';
                            }

?>