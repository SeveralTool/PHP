    
    <?php
    
    $CurrentDate = date('Y-m-d'); //FECHA ACTUAL
    $Days = 10; //NUMERO DE DIAS QUE QUIERES AGREGAR
    
    $newDate = strtotime("+$Days days", strtotime($CurrentDate)); // AGREGA LOS DIAS CORRESPONDIENTES
    $newDate = date('Y-m-d', $newDate); // ASIGNA UN FORMATO DATE A newDate
    
    ?>
    
    //SeveralTool
