
<html>
<head>
      <title>Order Conformation</title>

<style>
    
     @import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400";
 body{
	          margin: 0px;
			padding: 0px;
            color: gray;
            font-family: "Source Sans Pro", Helvetica, sans-serif;
            font-size: 25px;
            
		   }
    .btn {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
   
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-left: 150px;
    font-size: 18px;
}
       input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
       input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
    #formcontainer {
    width: 50%;
    padding: 12px 20px;
    margin-left: 350px;
    margin-top: -20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   
    }
</style>
<body>
    <?php
    session_start();
        
    echo "<h2 style='margin-left: 540px; margin-top: 20px;'>Your Order details</h2>";
    echo "<h3 style='margin-left: 500px;'>Cake name is ".$_SESSION['cakename']."</h3>";
    echo "<h3 style='margin-left: 600px;'>Price ".$_SESSION['price']."</h3>";
        
echo"<div id='formcontainer'>

    <form action='carddetails.php' method='post'>
            
            <label for='cakepic'>Debit Card number</label> 
            <input type='text' id='cardno' name='cardno' placeholder='Card number'>
            <label for='cakepic'>Expiry date</label> 
            <input type='text' id='cardno' name='expiry' placeholder='MM/YYYY'>
            <label for='cakepic'>CVV</label> 
            <input type='text' id='cvv' name='cvv' placeholder='CVV'> <br>
            <label for='cakepic'>Card Holder name</label> 
            <input type='text' id='holdername' name='holdername' placeholder='Card holder name'> <br> 
            
            <input class='btn' type='submit' name='Pay' value='Pay'/>
    </form>
    </div>";
    ?>
</body>