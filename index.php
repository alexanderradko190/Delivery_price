<!DOCTYPE html>
<html>
<head>
    <title>Расчет стоимости доставки</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Расчет стоимости доставки</h3>
<form method="POST" action="create.php">
    <div class="input_block">
        <div>Откуда:</div><input type="text" name="townFrom"/>
    </div>
    <br>
    <div class="input_block">
        <div>Куда:</div><input type="text" name="townTo"/>
    </div>
    <br>
    <div class="input_block">
        <div>Вес:</div><input type="number" name="weight"/>
    </div>
    <br>
    <div class="input_block">
        <div>Дата отправления:</div><input type="date"  name="date"/>
    </div>
    <br>
    <div class="input_block">
        <div>Быстро</div><input type="radio" checked name="speed" value="fast">
    </div>
    <br>
    <div class="input_block">
        <div>Медленно</div><input type="radio" name="speed" value="slow">
    </div>
    <br>
    <div class="input_block">
        <div>Транспортная компания</div>
    <select name="transport">
        <option>
            Компания 1
        </option>
        <option>
            Компания 2
        </option>
        <option>
            Компания 3
        </option>
    </select>
    </div>
    <br>

    <input type="submit" value="Отправить">
</form>
</body>
</html>




