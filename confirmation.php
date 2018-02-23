
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
    margin-left: 360px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   
    }
</style>
    
<body>
    <?php
    session_start();
    //echo $_SESSION['cakename'];
    echo "<h2 style='margin-left: 368px; margin-top: 20px;'>One last step before we confirm your order</h2>
    <div id='formcontainer'>
        <form action='confirmationnew.php' method='post'>
            <h3>From details</h3>
            <label for='cakepic'>Name</label> <br>
            <input type='text' id='name' name='name' placeholder='Your name'> <br>
             <label for='cakepic'>Contact</label> <br>
            <input type='text' id='contact' name='contact' placeholder='Your contact'> <br>
              <label for='cakepic'>Email</label> <br>
            <input type='text' id='email' name='email' placeholder='Your Email ID'> <br>
            
            
            <label for='cakepic'>Entity</label> <br>
                    <input type='radio' name='entity' value='Disclose'>
                    <label class='container'>Disclose</label>
                    <span class='checkmark'></span> &nbsp;
                
                    <input type='radio' name='entity' value='Dont disclose'>
                    <label class='container'>Dont disclose</label>
                    <span class='checkmark'></span> <br>
            <h3>To details to be filled here</h3>
            <label for='cakepic'>Name</label>
            <input type='text' id='username' name='dname' placeholder='Name of the person your gifting to'> <br>
            
            <label for='cakepic'>Address</label>
            <textarea rows='6' cols='80' name='address' placeholder='Please enter the address here'></textarea>
           
                
            <label for='cakepic'>Message</label>
            <textarea rows='6' cols='80' name='message' placeholder='Say something about your order so that we can serve you better'></textarea>
            
            <h3>More details</h3>
            <label for='cakepic'>Delivery time</label> <br>
                    <input type='radio' name='dtime' value='Business'>
                    <label class='container'>Business hours</label>
                    <span class='checkmark'></span> &nbsp;
                
                    <input type='radio' name='dtime' value='Fixed'>
                    <label class='container'>Fixed hours</label>
                    <span class='checkmark'></span> <br>
            
                    <input type='radio' name='dtime' value='Midnight'>
                    <label class='container'>Midnight</label>
                    <span class='checkmark'></span> <br>
             <label for='cakepic'>Payment method</label> <br>
                    <input type='radio' name='payment' value='COD'>
                    <label class='container'>COD</label>
                    <span class='checkmark'></span> &nbsp;
                
                    <input type='radio' name='payment' value='Credit/Debit'>
                    <label class='container'>Credit/Debit card</label>
                    <span class='checkmark'></span> <br>

            
           <!---<label for='cakepic'>Debit Card number</label> 
            <input type='text' id='cardno' name='cardno' placeholder='Card number'> <br>
            <label for='cakepic'>CVV</label> 
            <input type='text' id='cvv' name='cvv' placeholder='CVV'> <br>
            <label for='cakepic'>Card Holder name</label> 
            <input type='text' id='holdername' name='holdername' placeholder='Card holder name'> <br> -->
            
            <input class='btn' type='submit' name='confirm' value='Confirm'/>
        </form>
    </div>";
    ?>
</body>