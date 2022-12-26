<?php
$conn=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));

function getProduct()                 
{
    global $conn;

    $get_pro="select * from items";

    $run_pro=mysqli_query($conn,$get_pro);

               while($row_pro=mysqli_fetch_array($run_pro))
                    {
                     $image=$row_pro['image'];
                    //  $description=$row_pro['description'];
                     $name=$row_pro['name'];
                     $price=$row_pro['price'];
                     $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-3\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$image\" alt=\"$image\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$name</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>

                <h4>
                  
                    <span class=\"price\">₽ $price </span>
                </h4>
                <button type=\"submit\" class=\"btn btn-outline-dark my-3\" name=\"add\">Перейти к товару</button>
            </div>
        </div>
    </form>
  </div>
    ";
                     echo $element;
                  }
}


?>

