<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <div>
        <h3 style="margin-left: 15%; margin-top: 5%; display:box">
            <a href="shop.html" style="color:black; text-decoration: underline;">ВЕРНУТЬСЯ</a>
            <a href="bag.html" style="color:black; margin-left: 70%;text-decoration: none">КОРЗИНА</a>
        </h3>
    </div>
    <div>
        <div id="carouselExampleControls" class="carousel slide slidesize" data-bs-ride="carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/SUPREME BLACK.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/SUPREME BLACK.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/SUPREME BLACK.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div style="margin-left: 30px;">
            <h2></br></br>Supreme Black Hoodie</h2>
            <h4 style="color:grey; opacity: 50%;">ID: <?php echo 100;?>
            </h4>
            <h2>300$</h2>
        </div>
        <h2>Выберите размер товара</h2>
        <select id="sizeSelect">
            <option value="" disabled selected>Выберите размер</option>
            <option value="S">Маленький (S)</option>
            <option value="M">Средний (M)</option>
            <option value="L">Большой (L)</option>
            <option value="XL">Очень большой (XL)</option>
        </select></br></br>
        <button id="addButton" style="background-color:black; color: white;">Добавить в корзину</button>
        <button id="showImageBtn">Таблица Размеров</button>
        <img id="image" src="images/pr men.png" alt="Таблица Размеров">

    </div>
    </div>
    <script src="1.js"></script>




</body>

</html>