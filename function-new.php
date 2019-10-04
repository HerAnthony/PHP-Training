<?php
    function makeNav ($conn, $loggedIn){
        //This creates the navigation from the navigation tables
        $sql = "SELECT pagename, pagetitle FROM test.navigation";
        $result = $conn->query($sql);
        echo "<ul>";
        while ( $row = $result->fetch_assoc() ) {
          echo "<li><a href='" . $row['pagename'] . "'>" .$row['pagetitle']. "</a></li>";
        }
        
        echo "<li><a href='login.php'>Log In</a></li>";
        echo "</ul>";
    } // end of makeNav function
        
        function makeContent($conn, $thisPagename) {
            /*This creates the content from the content table based on the
            supplied $thisPagename  variable
            It will then looop through all the matching content
            records and export those individually.
            */
            $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()){
                echo $row['contenttitle'];
                echo $row['content'];
                }
            }
            //end of makeContent
            function makeTitle($conn, $thisPagename) {
            /*
            This will echo  out the curreny page title from the content table
            based on the pae name in $thisPagename
            */
            $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo $row['pagename'];
            }
            //end of makeTitle
?>