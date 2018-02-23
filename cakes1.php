

<html>
<head>
     
      <link rel="icon" href="home.png"/>
    
      <title>Cake name</title>
<style>

   @import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400";
 body{
	          margin: 0px;
			padding: 0px;
            color: aliceblue;
            font-family: "Source Sans Pro", Helvetica, sans-serif;
            font-size: 25px;
            
		   }
     #navdiv ul {
	
              width: 100%;
              height: 70px;
              background: #0d2733;
              line-height: 70px;
              color: white;
              margin-right: 15px;
              
          }
          #navdiv ul a{
              text-decoration: none;
              color: white;
              padding: 20px;
              
          }
          #navdiv{
              opacity: 7;
              filter: (opacity=70);
          }
          #navdiv ul li{
              list-style-type: none;
              display: inline-block;
              float: right;
              
          }
              *{
                 margin: 0px;
	             padding: 0px; 
              }
                 
          #navdiv ul li:hover{
              background: #173C4D;
              transition: all 0.40s;
          }
          #navdiv h1{
              
              width: 300px;
              font-size: 30px;
              float: left;
              cursor: pointer;
              margin-left: 15px;
          }
          
          footer{
              
              position: relative;
              width: 100%;
              height: 260px;
              background: #383737;
              margin-top: -70px;

              line-height: 50px;
              font-size: 20px;
              font-family: Gill Sans MT;
              
              
              }
          #icons h2{
              margin-top: 30px;
            
          }

               
               #icons ul li{
              list-style-type: none;
              display: inline-block;
              padding: 15px;
            
              }
          
          #icons img:hover{
              background: white;
              transition: all 0.40s;

          }
          #icons img{
              width: 60px;
              height: 60px;
              position: relative;
              
          }
        #copy img{
              width: 30px;
              height: 30px;
              position: relative;
              
          }
          #copy p{
              margin-left: 10px;
              margin-right: 10px;
          }
    
.wrap {
    width: 100%;
}

.floatleft {
    float:left; 
    width: 50%;
    color: black;
    height: 400px;
    font-size: 18px;
    margin-top: 10px;
    font-family: "Source Sans Pro", Helvetica, sans-serif;
}

.floatright {
float: right;
    
    height: 400px;
    width: 50%;
    color: black;
    font-size: 18px;
    font-family: "Source Sans Pro", Helvetica, sans-serif;
    
}
    input[type=text],select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
    #formcontainer {
    width: 80%;
    padding: 12px 20px;
    margin-left: 50px;
    margin-top: 30px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   
    }
    input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    
    margin-right: 35px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-left: 140px;
    font-size: 18px;
}

</style>
</head>

<body>
 <?php
       session_start();
            $_SESSION['cakename'] = 'Choclate truffle';
            $_SESSION['price'] = 'Rs. 700';
echo "<div id='main'>    
	   <div id='navdiv'>
           
	               <ul>
                   <h1>Craft Memories</h1>
                   <li><a href='faq.html'>FAQ</a></li>
			       <li><a href='personalize.html'>Personalize</a></li>
                   <li><a href='bouquets.html'>Bouquets</a></li>
                   <li><a href='cakes.html'>Cakes</a></li>
                   <li><a href='index.html'>Home</a></li>
	           </ul>
		    
		</div>
  
<div class='wrap'>
    <div class='floatleft'>
    <h1 style='margin-left: 19px;'>Choclate Truffle</h1>
    <img src='cakeimages/cake1.jpg' style='width: 300px;margin-left: 20px; margin-top: 5px; border-radius: 10px;'>
    <h2 style='margin-left: 19px;'>Rs. 700</h2>
    <p style='margin-left: 20px;'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </p>
    </div>
    <div class='floatright'>
    <h1 style='text-align: center; margin-top: 10px;'>Customize your order here!</h1>
        
        <div id='formcontainer'>

           

        <form action='cakeorder.php' method='post'>
            <label for='flavour'>Flavour</label>
                <select id='flavour' name='flavour'>
                    <option value='vanila'>Vanilla</option>
                    <option value='butterscotch'>Butterscotch</option>
                    <option value='strawberry'>Strawberry</option>
                </select> <br>
            <label for='quantity'>Quantity</label>
                <select id='quantity' name='quantity'>
                    <option value='0.5kg'>1/2 Kg</option>
                    <option value='1kg'>1 Kg</option>
                    <option value='2kg'>2 Kg</option>
                </select>
            <label for='cakepic'>Type</label> <br>
                    <input type='radio' name='typeof' value='egg'>
                    <label class='container'>Egg</label>
                    <span class='checkmark'></span> &nbsp;
                
                    <input type='radio' name='typeof' value='eggless'>
                    <label class='container'>Eggless</label>
                    <span class='checkmark'></span> <br>
              <input type='submit' name='order' value='Order now'>
        </div>
    
    </div>
    <div style='clear: both;'>
    </div>
        
                

</div>";
?>
</body>
</html>
