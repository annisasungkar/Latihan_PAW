<html>
    <head>
        <title>Latihan 1</title>
        <style> .warna-baris {
            background-color: silver;
        }
        .warna-2 {
            background-color: yellow;
        }
        </style> 
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($i = 1; $i <= 5; $i++) :
                // : digunakan untuk mengganti {} ?>
                <?php if($i % 2 == 1) : ?>
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr class="warna-2">
                <?php endif; ?>
                
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; 
                    // ?= sama dengan php echo ?></td>
                <?php endfor;
                // setiap perulangan ditutup dengan end...; ?>
                    </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>
