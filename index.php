<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <style>
        .product-box {
            width: 250px;
            height: 400px;
            border: 1px solid black;
            border-radius: 5px;
            margin-top: 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgb(98, 150, 163);

        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: rgb(98, 150, 163);
        }
        .product-box img{
            width: 95%;
            height: 200px;
            border-radius: 10px;
        }
        button{
            width: 120px;
            height: 30px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover{
            background: #ccc;
        }
        .main{
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="product-box">
            <img src="demo.jpeg" alt="">
            <div class="info">
                <p>Ksh. <span class="price">350</span></p>
                <h3 class="pro-name">Demo Car</h3>
                <form action="pay-with.php" method="POST">
                    <input type="hidden" value="350" name="amount">
                    <button type="submit">BUY</button>
                </form>
            </div>
        </div>
        <div class="product-box">
            <img src="demo2.jpeg" alt="">
            <div class="info">
                <p>Ksh. <span class="price">780</span></p>
                <h3 class="pro-name">Demo2 Car</h3>
                <form action="pay-with.php" method="POST">
                    <input type="hidden" value="780" name="amount">
                    <button type="submit">BUY</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>