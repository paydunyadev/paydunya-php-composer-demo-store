<?php

require('vendor/autoload.php');

\Paydunya\Setup::setMasterKey("uo9OJtRc-4DsC-51DX-A3iA-5qS6f9rC0gPF");
\Paydunya\Setup::setPublicKey("test_public_uDqJfjr1LAZICgu6T8Dh4igeQUH");
\Paydunya\Setup::setPrivateKey("test_private_FYgpAlU0bl6B1qKuCLlspRLotVJ");
\Paydunya\Setup::setMode("test");
\Paydunya\Setup::setToken("OMlUPHJ6v9OXapZETNXd");

//Configuration des informations de votre service/entreprise
\Paydunya\Checkout\Store::setName("La boutique de Sandra");
\Paydunya\Checkout\Store::setTagline("L'élégance n'a pas de prix");
\Paydunya\Checkout\Store::setPhoneNumber("774262038");
\Paydunya\Checkout\Store::setPostalAddress("Dakar Plateau - Etablissement kheweul");

// Vous pouvez mettre ici localhost pour vos tests de redirection en local
\Paydunya\Checkout\Store::setCancelUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");
\Paydunya\Checkout\Store::setReturnUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/confirm.php");