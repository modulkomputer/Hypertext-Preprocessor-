<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>

<body>
  <h2>Pengulangan for PHP 1 </h2>
  <table border="1" clesspacing="0" cellpadding="5">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?php echo "$i, $j"; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>