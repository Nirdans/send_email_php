                     <?php        
                               //envoyer mail de confirmation client
                          $_SESSION [ 'email' ]="youremail@email.com";
                          $_SESSION['nom'] = "Your Name";
                          $_SESSION['prenom'] = "Tour last name";
                          //$_POST['motif']= 'the text of body ';

                             //$SESION['email'] est la variable qui vous a permis de recuperer le mail de l'interesser à qui vous souhaité envoyé un mail
                                $header="MIME-Version: 1.0\r\n";
                                $header.='From:"NIRDANS-NET || Freelance Plateforme"<contact@nirdans-net.com>'."\n";
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
                                if ( mail($_SESSION['email'], "COMPTE DESACTIVER", $message, $header) ) {
                                    echo "<script>alert(\"Mail de Désactivation envoyé avec succès.\")</script>";
                                    

                                }else {
                                    echo "<script>alert(\"Mail de Désactivation non envoyé Veuillez Contactez Votre Technicien Informatique.\")</script>";
                                }
                                ?>
                                ?>
