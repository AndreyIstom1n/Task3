<link rel="stylesheet" href="style.css"></link>
<form action="" method="POST">
  <p><input type="text" name="fio" placeholder="Ваше имя"></p>

  <p><input type="email" name="email" placeholder="Ваша почта"></p>
  <br>Ваш год рождения
  <select name="year">
    <?php 
    for ($i = 1900; $i <= 2023; $i++) {
      printf('<option value="%d">%d Год</option>', $i, $i);
    }
    ?>
  </select>
  <br>
  <br>Ваш пол
  <p><input type="radio" name="r1[]" value="male"> Мужской</p>
  <p><input type="radio" name="r1[]" value="female"> Женский</p>
  <p><input type="radio" name="r1[]" value="other">Другой</p>

  <br> Количество ваших конечностей
  <p><input type="radio" name="r2[]" value="2">2</p>
  <p><input type="radio" name="r2[]" value="3">3</p>
  <p><input type="radio" name="r2[]" value="4">4</p>
  <p><input type="radio" name="r2[]" value="many">4+</p>
  <br> Ваши сверхспособности
  <p><select multiple="multiple" name="abilities[]">
    <option value="Immortality">Бессмертие</option>
    <option value="Passing through walls">Прохождение сквозь стены</option>
    <option value="Levitation">Левитация</option>
    </select>
  </p>
  <br>Ваша биография
  <p><textarea name="biography"></textarea></p>
  <br>С контрактом ознакомлен(а)
  <p><input type="checkbox" name="cb"></p>
  <input type="submit" value="Подтверждаю" />
</form>
