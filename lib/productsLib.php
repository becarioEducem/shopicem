<?php 
    //Obtenim 5 productes de l'API de fakestoreapi i retornem un array d'arrays amb les dades dels productes
    function getProducts(){
        $res = file_get_contents("https://fakestoreapi.com/products?limit=5");
        $res = json_decode($res, true);
        return $res;
    }
    
    //TODO: CAL ACABAR LA FUNCIÓ
    //TODO: @PARAM1 = ARRAY DE PRODUCTES QUE CAL QUE PRESENTI LA GRID
    //TODO: @PARAM2 = ARRAY AMB ELS VALORS DELS CODIS DE PRODUCTE
    function getHTMLProductsGrid(){
        $grid = "  <table class=\"table table-hover border border-primary rounded\"><thead><tr class=\"table-primary\">
                    <th>Id</th>
                    <th>Títol</th>
                    <th>Descripció</th>
                    <th>Imatge</th>
                    <th>Preu</th>
                    <th>Código Dto.</th>
                    </thead></tr><tbody>";
        //TODO: CALDRÀ RECUPERAR LES DADES DE CADA PRODUCTE PER ANAR GENERANT LES FILES DE LA TAULA
        //TODO: INVESTIGAR VIA DEPURACIÓ EL FORMAT DE LES DADES RETORNADES PER GETPRODUCTS()
        $grid  .= "</tbody></table>";
        return $grid ;
    }