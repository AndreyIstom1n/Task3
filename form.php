<link rel="stylesheet" href="style.css"></link>
<form action="" method="POST">
  <p><input type="text" name="fio" placeholder="Ваше имя"></p>

  <p><input type="email" name="email" placeholder="Ваша почта"></p>

  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  
  <br>Пол
  <p><input type="radio" name="r1[]" value="male"> Мужской</p>
  <p><input type="radio" name="r1[]" value="female"> Женский</p>

  <br> Количество конечностей
  <p><input type="radio" name="r2[]" value="2">2</p>
  <p><input type="radio" name="r2[]" value="3">3</p>
  <p><input type="radio" name="r2[]" value="4">4</p>
  <p><input type="radio" name="r2[]" value="many">4+</p>

  <p><select multiple="multiple" name="abilities[]">
    <option value="Immortality">Бессмертие</option>
    <option value="Passing through walls">Прохождение сквозь стены</option>
    <option value="Levitation">Левитация</option>
    </select>

  <p><textarea name="biography"></textarea></p>

  <p><input type="checkbox" name="cb"></p>
  
  <input type="submit" value="ok" />

</form>
