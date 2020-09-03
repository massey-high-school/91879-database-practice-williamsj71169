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
    
    
    <!--- START OF genre Search -->

    <form method="post" action="genre_search.php" enctype="multipart/form-data">

        <select name="genre" required>
            <option value="" disabled selected>Genre...</option>
            <option value="Sci Fi">Science Fiction</option>
            <option value="Non Fiction">Non Fiction</option>
            <option value="Humour">Humour</option>
            <option value="Historical Fiction">Historical Fiction</option>
            
        </select>
        
        <input class="submit" type="submit" name="find_genre" value="Search" />

    </form>

    <!---  END OF genre Search-->

    <hr/>
    
    <!---  start of ratings form-->
    
    <form method="post" action="rating_search.php" enctype="multipart/form-data">
        
        <select class="half width" name="amount">
            <option value="exactly" selected>Exactly...</option>
            <option value="more" selected>At least...</option>
            <option value="less" selected>At most...</option>          
        </select>
    
        <select class="half width" name="stars">
            <option value=1>&#9733;</option>
            <option value=2>&#9733;&#9733;</option>
            <option value=3>&#9733;&#9733;&#9733;</option>
            <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
            <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            
        </select>
        
            <input type="submit" class="submit" name="find_rating" value="Search"/>
    
    </form>
    
    <!---  end of ratings form-->


    </div> <!--- / side bar-->
    <div class="box footer">
        CC Jessika Williams 2020
    </div>    <!-- / footer -->

    </div>  <!-- / wrapper  -->
    
</body>        
