                              <?php        
                               //envoyer mail de confirmation client

//$cli_mail est la variable qui vous a permis de recuperer le mail de l'interesser à qui vous souhaité envoyé un mail
        
                               


                                $header="MIME-Version: 1.0\r\n";
                                $header.='From:"Programme 1000 milliardaire || cashyinvestments SARL"<contact@cashyinvestments.com>'."\n";
                                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                                $header.='Content-Transfer-Encoding: 8bit';
                                $message='
                                <html>
                                <body>
                              <div align="center">
                                <p>
                                '..'
                                Félicitation pour votre insription dans ce programme, qui non seulement vous permettra d\'avoir des gains en fonction des niveaux mais également d\'être actionnaire à 0.01% dans cashyinvestment au bout de 3 ans.
                               
                                </p>
                                        <p>L\'équipe vous remercie</p><br/>
                                        <p>Admin cashy investments SARL</p><br/>
                                    </div>
                                </body>
                                </html>
                                ';
                                if ( mail($cli_mail, "CONFIRMATION DE COMPTE ACTIVER", $message, $header) ) {
                                    # code...

                                }else {
                                    # code...
                                }
                                ?>