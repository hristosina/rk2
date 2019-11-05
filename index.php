<html>
 <head>
 </head>
 <body>
 <h1>Задание 1 </h1> 
 <?php
  for ($year=1900; $year<=2100; $year=$year++)
	  ?>
 <list size="1">
 <form action="" method="POST">
  <option size="1" name="enter"> <?php echo $year ?> </option> 
 <input type="submit" value="Выбранный год"
  <?php
   $enter=($_POST['enter']);
    echo $enter;
	  ?>
 </form>
 <h1> Задание 2</h1>
 <form action="" method="POST">
  <p>Введите A: <input type="text" name="a" /> </p>
  <p>Введите B: <input type="text" name="b" /> </p>
  <p>Введите C: <input type="text" name="c" /> </p>
  <input type="submit" value="Найти корни"
  </form>
  <?php
    $a=($_POST['a']);
	$b=($_POST['b']);
	$c=($_POST['c']);
	$d=$b^2-4*$a*$c;
	$s=((-$b-sqrt($d))/2*$a);
	$k=((-$b+sqrt($d))/2*$a);
	if ($d<0)
	echo "Корней нет";
   else
	echo "Корни уравнения: $s и $k";
  ?> 
 </body>
</html>
