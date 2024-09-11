<?php
$movie_name=$_REQUEST["film"];
list($title, $year)=file("$movie_name/info.txt");
// gets tittle and year from the info.txt
$review_files=glob("$movie_name/review*.txt");
// gets reviews and adds them all into one variable
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title ?> - Rancid Tomatoes</title>
    <link type="text/css" rel="stylesheet" href="movie.css">
</head>
<body background="background.png">
    <img src="banner.png" alt="Banner">
    <table>
        <tr>
            <td colspan="3" class="heading"> <?=$title ?> (<?=$year ?>) </td>
        </tr>
        <tr> 
            <td><img src="<?=$movie_name?>/overview.jpg" alt="overview image"></td>
            <td colspan="2">
                <dl>

                <?php
                // foreach unpacks all of the term headers and term defonitions.
                foreach (file("$movie_name/overview.txt") as $info_line)
                {
                    list($term,$defn) =explode(":",$info_line);
                    
                    ?>
                    <dt><?=$term ?> </dt>
                    <dd><?=$defn ?> </dd>
                    <?php
                }
                ?>

                    <dt>
                        
                    </dt>
                        <dd></dd>

                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                    <dt>
                        
                    </dt>
                        <dd></dd>
                </dl>

            </td>
        </tr>
        <tr>
            <td colspan=3 class="heading">Reviews</td>
        </tr>
        <?php
        // foreach unpacks all of the reviews, rating, critic, and publication to display correctly.
        foreach($review_files as $reviewfile)
        {
            list($review,$rating,$critic,$publication)=file($reviewfile);
            $tomatoimage=strtolower(trim($rating));
            ?>


        <tr class="review">
                <th>  
                    <?=$critic ?> <br>
                    <?=$publication ?>
                </th>
                <td> <img src="<?=$tomatoimage ?>.gif" alt="<?=$tomatoimage ?>"> </td>
                <td> <?=$review ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    

</body>
</html>