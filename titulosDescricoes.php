 <?php 

       // $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $explode = explode('/', $url);
        $end = count($explode);
        $end =  $explode[$end - 2];
        $paginaPrincipal = false;

        if($end == "index.php"){
            $paginaPrincipal = true;
        }else{
            $paginaPrincipal = false;
        }


        switch ($end) {
            case "index.php":               
                 $tituloHeader = "Vivo Combo com TV, Internet Banda Larga e Telefonia Fixa";
                 $tituloPagina = "CONHEÇA OS PLANOS";
                 $descricao = "Vivo | Assine já - Vivo HDTV, Vivo Internet Fibra, Vivo Speedy, Vivo Fixo ou nosso Vivo combo disponível para Ribeirão Preto e região";
                break;

                  case "":               
                  $tituloHeader = "Vivo Combo com TV, Internet Banda Larga e Telefonia Fixa";
                 $tituloPagina = "CONHEÇA OS PLANOS";
                 $descricao = "Vivo | Assine já - Vivo HDTV, Vivo Internet Fibra, Vivo Speedy, Vivo Fixo ou nosso Vivo combo disponível para Ribeirão Preto e região";
                break;

            case "internet-fibra-sao-caetano-do-sul":
                 $tituloHeader = "Internet Fibra São Caetano do Sul - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO CAETANO DO SUL";          
                 $descricao = "Internet Fibra São Caetano do Sul | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-presidente-prudente":
                 $tituloHeader = "Internet Fibra Presidente Prudente - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA PRESIDENTE PRUDENTE";          
                 $descricao = "Internet Fibra Presidente Prudente | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sao-jose-do-rio-preto":
                 $tituloHeader = "Internet Fibra São José do Rio Preto - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO JOSÉ DO RIO PRETO";          
                 $descricao = "Internet Fibra São José do Rio Preto | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-taubate":
                 $tituloHeader = "Internet Fibra Taubaté - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA TAUBATÉ";          
                 $descricao = "Internet Fibra Taubaté | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sao-jose-dos-campos":
                 $tituloHeader = "Internet Fibra São José dos Campos - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO JOSÉ DOS CAMPOS";          
                 $descricao = "Internet Fibra São José dos Campos | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-jacarei":
                 $tituloHeader = "Internet Fibra Jacareí - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA JACAREÍ";          
                 $descricao = "Internet Fibra Jacareí | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-campinas":
                 $tituloHeader = "Internet Fibra Campinas - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA CAMPINAS";          
                 $descricao = "Internet Fibra Campinas | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-ribeirao-preto":
                 $tituloHeader = "Internet Fibra Ribeirão Preto - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA RIBEIRÃO PRETO";          
                 $descricao = "Internet Fibra Ribeirão Preto | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-guarulhos":
                 $tituloHeader = "Internet Fibra Guarulhos - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA GUARULHOS";          
                 $descricao = "Internet Fibra Guarulhos | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-araraquara":
                 $tituloHeader = "Internet Fibra Araraquara - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA ARARAQUARA";          
                 $descricao = "Internet Fibra Araraquara | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-bauru":
                 $tituloHeader = "Internet Fibra bauru - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA BAURU";          
                 $descricao = "Internet Fibra bauru | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-aruja":
                 $tituloHeader = "Internet Fibra Arujá - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA ARUJÁ";          
                 $descricao = "Internet Fibra Arujá | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-piracicaba":
                 $tituloHeader = "Internet Fibra Piracicaba - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA PIRACICABA";          
                 $descricao = "Internet Fibra Piracicaba | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-indaiatuba":
                 $tituloHeader = "Internet Fibra Indaiatuba - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA INDAIATUBA";          
                 $descricao = "Internet Fibra Indaiatuba | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sorocaba":
                 $tituloHeader = "Internet Fibra Sorocaba - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SOROCABA";          
                 $descricao = "Internet Fibra Sorocaba | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-osasco":
                 $tituloHeader = "Internet Fibra Osasco - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA OSASCO";          
                 $descricao = "Internet Fibra Osasco | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-suzano":
                 $tituloHeader = "Internet Fibra Suzano - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SUZANO";          
                 $descricao = "Internet Fibra Suzano | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-maua":
                 $tituloHeader = "Internet Fibra Mauá - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA MAUÁ";          
                 $descricao = "Internet Fibra Mauá | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-jundiai":
                 $tituloHeader = "Internet Fibra Jundiaí - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA JUNDIAÍ";          
                 $descricao = "Internet Fibra Jundiaí | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-varzea-paulista":
                 $tituloHeader = "Internet Fibra Várzea Paulista - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA VÁRZEA PAULISTA";          
                 $descricao = "Internet Fibra Várzea Paulista | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-santo-andre":
                 $tituloHeader = "Internet Fibra Santo André - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SANTO ANDRÉ";          
                 $descricao = "Internet Fibra Santo André | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sao-vicente":
                 $tituloHeader = "Internet Fibra São Vicente - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO VICENTE";          
                 $descricao = "Internet Fibra São Vicente | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-santos":
                 $tituloHeader = "Internet Fibra Santos - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SANTOS";          
                 $descricao = "Internet Fibra Santos | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-mogi-das-cruzes":
                 $tituloHeader = "Internet Fibra Mogi das Cruzes - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA MOGI DAS CRUZES";          
                 $descricao = "Internet Fibra Mogi das Cruzes | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sao-bernardo-do-campo":
                 $tituloHeader = "Internet Fibra São Bernardo do Campo - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO BERNARDO DO CAMPO";          
                 $descricao = "Internet Fibra São Bernardo do Campo | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-votorantim":
                 $tituloHeader = "Internet Fibra Votorantim - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA VOTORANTIM";          
                 $descricao = "Internet Fibra Votorantim | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-diadema":
                 $tituloHeader = "Internet Fibra Diadema - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA DIADEMA";          
                 $descricao = "Internet Fibra Diadema | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-ribeirao-pires":
                 $tituloHeader = "Internet Fibra Ribeirão Pires - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA RIBEIRÃO PIRES";          
                 $descricao = "Internet Fibra Ribeirão Pires | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-itaquaquecetuba":
                 $tituloHeader = "Internet Fibra Itaquaquecetuba - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA ITAQUAQUECETUBA";          
                 $descricao = "Internet Fibra Itaquaquecetuba | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-praia-grande":
                 $tituloHeader = "Intenet Fibra Praia Grande - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTENET FIBRA PRAIA GRANDE";          
                 $descricao = "Intenet Fibra Praia Grande | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-americana":
                 $tituloHeader = "Internet Fibra Americana - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA AMERICANA";          
                 $descricao = "Internet Fibra Americana | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-itatiba":
                 $tituloHeader = "Internet Fibra Itatiba - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA ITATIBA";          
                 $descricao = "Internet Fibra Itatiba | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "internet-fibra-sao-paulo":
                 $tituloHeader = "Internet Fibra São Paulo - Vivo Internet Fibra Combo";     
                 $tituloPagina = "INTERNET FIBRA SÃO PAULO";          
                 $descricao = "Internet Fibra São Paulo | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-assine-agora-ligue-gratis":
                 $tituloHeader = "FIBRA 300 MEGAS! ASSINE AGORA E GARANTA UM SUPER DESCONTO - Vivo Internet Fibra Combo";     
                 $tituloPagina = "FIBRA 300 MEGAS! ASSINE AGORA E GARANTA UM SUPER DESCONTO";          
                 $descricao = "FIBRA 300 MEGAS! ASSINE AGORA E GARANTA UM SUPER DESCONTO | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "super-hd-38-canais":
                 $tituloHeader = "Super Hd 38 Canais - Vivo Internet Fibra Combo";     
                 $tituloPagina = "SUPER HD 38 CANAIS";          
                 $descricao = "Super Hd 38 Canais | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "ultra-hd-59-canais":
                 $tituloHeader = "ULTRA HD 59 CANAIS - Vivo Internet Fibra Combo";     
                 $tituloPagina = "ULTRA HD 59 CANAIS";          
                 $descricao = "ULTRA HD 59 CANAIS | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "ultimate-hd-83-canais":
                 $tituloHeader = "ULTIMATE HD 83 CANAIS - Vivo Internet Fibra Combo";     
                 $tituloPagina = "ULTIMATE HD 83 CANAIS";          
                 $descricao = "ULTIMATE HD 83 CANAIS | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-15-mega":
                 $tituloHeader = "Vivo Fibra 15 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 15 MEGA";          
                 $descricao = "Vivo Fibra 15 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-35-mega":
                 $tituloHeader = "Vivo Fibra 35 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 35 MEGA";          
                 $descricao = "Vivo Fibra 35 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-50-mega":
                 $tituloHeader = "Vivo Fibra 50 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 50 MEGA";          
                 $descricao = "Vivo Fibra 50 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-100-mega":
                 $tituloHeader = "Vivo Fibra 100 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 100 MEGA";          
                 $descricao = "Vivo Fibra 100 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-200-mega":
                 $tituloHeader = "Vivo Fibra 200 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 200 MEGA";          
                 $descricao = "Vivo Fibra 200 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "vivo-fibra-300-mega":
                 $tituloHeader = "Vivo Fibra 300 Mega - Vivo Internet Fibra Combo";     
                 $tituloPagina = "VIVO FIBRA 300 MEGA";          
                 $descricao = "Vivo Fibra 300 Mega | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "combo":
                 $tituloHeader = "Combo - Vivo Internet Fibra Combo";     
                 $tituloPagina = "COMBO";          
                 $descricao = "Combo | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            case "cadastro-concluido":
                 $tituloHeader = "Cadastro Concluído - Vivo Internet Fibra Combo";     
                 $tituloPagina = "CADASTRO CONCLUÍDO";          
                 $descricao = "Cadastro Concluído | Vivo internet - Vivo Fibra - Vivo Combo";
                break;

            //case "":
             //    $tituloHeader = "";     
              //   $tituloPagina = "";          
             //    $descricao = "";
              //  break;

          

           
        }

     ?>