<?php
                $conn=mysqli_connect('localhost','root','','Project');

                $query="select id from dashes ORDER BY id";
                $query_run=mysqli_query($conn,$query);
                $data=mysqli_num_rows($query_run);
                echo '<h3>'.$data.'</h3>';
   ?>