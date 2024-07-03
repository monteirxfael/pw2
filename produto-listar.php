<?php
    include("cabecalho.php");
?>


    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
               

               <?php

                   

               for ($i = 0; $i < 5; $i++) {
                     echo '<tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                       </tr>';
                    }
               ?>

            </tbody>
        </table>

    </div>

    <?php
    include("rodape.php");
?>