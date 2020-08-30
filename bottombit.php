<div class="box side">
        
    <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>

    <i>Type part of the title / author name if desired</i>

    <hr /> 

    <!--- START OF Title Search -->

    <form method="post" action="title_search.php" enctype="multipart/form-data">

        <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />

        <input class="submit" type="submit" name="find_title" value="Search" />

    </form>

    <!---  END OF Title Search-->


    <!--- START OF author Search -->

    <form method="post" action="author_search.php" enctype="multipart/form-data">

        <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />

        <input class="submit" type="submit" name="find_author" value="Search" />

    </form>

    <!---  END OF author Search-->

    <hr/>
    Genre Search<br />
    Rating Search


    </div> <!--- / side bar-->
    <div class="box footer">
        CC Jessika Williams 2020
    </div>    <!-- / footer -->

    </div>  <!-- / wrapper  -->
    
</body>        
