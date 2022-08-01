                     <?php        
                               //envoyer mail de confirmation client

                             //$cli_mail est la variable qui vous a permis de recuperer le mail de l'interesser à qui vous souhaité envoyé un mail
                                $header="MIME-Version: 1.0\r\n";
                                $header.='From:"AMANOU-TECH || Freelance Plateforme"<contact@amanou-tech.com>'."\n";
                                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                                $header.='Content-Transfer-Encoding: 8bit';
                                $message='
                                <html>
                                <body>
                              <div align="center">
                                <p>
                               
                                 <span>'.$_SESSION['nom'].' '.$_SESSION['prenom'].'<span> votre compte  a été désactivé.</p>
                                 <br/><h5>MOTIF:</h5>
                                 <p>'.$_POST['motif'].'</p>
                               
                                
                                        <p>Cordialement L\'équipe AMANOU-TECH</p><br/>
                                        
                                    </div>
                                </body>
                                </html>
                                ';
                                if ( mail($_SESSION['emails'], "COMPTE DESACTIVER", $message, $header) ) {
                                    echo "<script>alert(\"Mail de Désactivation envoyé avec succès.\")</script>";
                                    $produit_valider= $sql-> collaborator_valider(0,$_SESSION['slug']);
                                    if ($produit_valider) {
                                        echo "<script>alert(\"Collaborateur Désactiver .\")</script>";  
                                        echo '<script>window.location.href="gestion_collaborator.php"</script>';       
                                    }  

                                }else {
                                    echo "<script>alert(\"Mail de Désactivation non envoyé Veuillez Contactez Votre Technicien Informatique.\")</script>";
                                }
                                ?>
                                ?>
