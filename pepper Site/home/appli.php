<!DOCTYPE html>
<html>
<head>
    <style>
        .drop{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .drop select{
        margin-bottom: 30px;
        position: relative; 
        width: 100%;
        padding: 10px;
        outline: 0;
        border: 1px solid #fff;
        color: #fff;
        background: transparent;
        border-radius: 20px;
        
        
        }
    </style>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-wodth, initial-scale=1.0">
    <title>Order now</title>

    <link rel="stylesheet" href="app.css">
    <script src="https://kit.fontawesome.com/f10e1dd3e9.js" crossorigin="anonymous"></script>
</head>
<body>
    
    

        
    <div class="hero">
        <p>Fill all the<br> Details here</p>
        <form action="conn.php" method="post">
            <div class="row">
                <div class="drop">
                    <select name="colour">
                    <option value="white" style="color: black;" selected>  White Pepper</option>
                    <option value="black" style="color: black;"> Black Pepper</option> 
                    </select>   
    
                </div>
                <div class="drop">
                    <select name="weight">
                        <option value="50" style="color: black;" selected>50 g</option>
                        <option value="100" style="color: black;">100 g</option> 
                        <option value="250" style="color: black;">  250 g</option>
                        <option value="500" style="color: black;"> 500 g</option> 
                        <option value="1000" style="color: black;">1 kg</option> 
                        </select>  
    
                </div>


            </div>

            <div class="row">
                <div class="input-group">
                    <input type="text" id="fname" name="fname" required>
                    <label for="fname"><i class="fa-regular fa-user" ></i>  First Name</label>
    
                </div>
                <div class="input-group">
                    <input type="text" id="lname" name="lname" required>
                    <label for="lname"><i class="fa-regular fa-user"></i>  Last Name</label>
    
                </div>


            </div>
            
            <!-- <div class="input-group">
                <input type="text" id="country" name="country" required>
                <label for="country"><i class="fa-regular fa-globe"></i>Country</label>

            </div> -->
            <div class="input-group">
                <textarea name="address" rows="3" coloms="20" required></textarea>
                <label for="adress"><i class="fa-solid fa-location-dot"></i>  Address</label>

            </div><div class="input-group">
                <input type="email" id="email" name="email" required>
                <label for="email"><i class="fa-regular fa-envelope"></i>  Email</label>

            </div><div class="input-group">
                <input type="text" id="number" name="number" required>
                <label for="number"><i class="fa-solid fa-phone"></i>Whatsapp Number</label>

            </div>
        
            <button  type="submit">SUBMIT <i class="fa-regular fa-paper-plane"></i></button>
        
        
        
        </form>



    </div>

</body>


    





</html>