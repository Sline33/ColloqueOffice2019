<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_30e02951b20eeb7af504e22b19d45fd783aef7b1df133ddc83897ec620337054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/show_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "paiementok"), "method")) {
            // line 6
            echo "    <div class=\"d-flex justify-content-center\" style=\"margin-top:15px;\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "paiementok"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 8
                echo "            <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "    <div class=\"container\" style=\"padding-left:0px;margin-top:15px;\">
        <h4 style=\"font-size:25px;margin-top:4px;height:23px;\">Mes coordonnées</h4>
    </div>
    <div>
        <div class=\"container borderclient\" style=\"padding-left:15px;padding-bottom:20px;\">
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"padding-top:7px;padding-bottom:30px;padding-right:50px;padding-left:100px;height:280px;margin-bottom:0px;width:487px;\">
                    <div class=\"d-flex\" style=\"margin-top:8px;\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\" ";
        // line 21
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "sexe", array()) == 1)) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\" ";
        // line 25
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "sexe", array()) == 0)) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                        </div>
                    </div>
                    <div style=\"width:352px;\">
                        <input type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "lastname", array()), "html", null, true);
        echo "\" style=\"width:329px;\">
                        <input type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", array()), "html", null, true);
        echo "\" style=\"width:330px;margin:0px;margin-top:7px;\">
                        <input type=\"text\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "society", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:6px;\">
                        </div>
                    <div class=\"d-flex\">
                        <input type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "adress", array()), "html", null, true);
        echo "\" style=\"width:328px;margin-top:6px;height:30px;\">
                        </div>
                    <div class=\"d-flex flex-row\">
                        <input type=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "cp", array()), "html", null, true);
        echo "\" style=\"width:77px;margin-top:6px;margin-right:10px;\">
                        <input type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "town", array()), "html", null, true);
        echo "\" style=\"width:246px;margin-top:6px;\">
                    </div>
                        <input type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phonenumber", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:6px;\">
                    </div>
                <div class=\"col-md-6 d-flex justify-content-around flex-column\" style=\"height:270px;\">
                    <div class=\"\">
                        <input type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:38px;margin-left:22px;\">
                        <input type=\"text\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:7px;margin-left:22px;\">
                    </div>
                    <div class=\"d-flex justify-content-between\" style=\"width:329px;margin-left:22px;\">
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><input type=\"submit\" value=\"Modifier Password\" class=\"btn btn-primary\"></a>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><input type=\"submit\" value=\"Modifier Email\" class=\"btn btn-primary\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\" style=\"margin-top:15px;\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-between\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;margin-bottom:25px;\">
                    <h4>Mes récapitulatifs</h4>
                    <div>
                        <a class=\"btn btn-primary\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recap_new");
        echo "\">Modifier/Payer Commande</a>
                    </div>
                    <div class=\"d-flex\">
                      <p><strong>Paiement En Attente</strong></p>
                      <div class=\"foo blue\"></div>
                      <p><strong>Paiement Effectué</strong></p>
                      <div class=\"foo green\"></div>
                      <p><strong>Commande En Cours</strong></p>
                      <div class=\"foo orange\"></div>
                    </div>
                </div>
            </div>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 75
            echo "            <div class=\"row\">
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;margin-bottom:10px;\">
                    <div class=\"collapseclient\">
                      ";
            // line 78
            if (($this->getAttribute($this->getAttribute($context["ticket"], "facture", array()), "status", array()) == 2)) {
                // line 79
                echo "                        <a class=\"btn btn-success collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
                echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "facture", array()), "number", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Nom: ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
                echo "€
                            </div>
                        </div>
                        </a>
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 101
$context["ticket"], "facture", array()), "status", array()) == 1)) {
                // line 102
                echo "                        <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
                echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : ";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "facture", array()), "number", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Nom: ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: ";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
                echo "€
                            </div>
                        </div>
                        </a>
                        ";
            } else {
                // line 125
                echo "                        <div class=\"d-flex\">
                            <a class=\"btn btn-danger orange collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
                echo "\">
                           <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "facture", array()), "number", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Nom: ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: ";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
                echo "€
                            </div>
                        </div>
                        </a>
                            <a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\" hidden><i class=\"fas fa-cogs\"></i></a>
                        </div>
                        ";
            }
            // line 151
            echo "
                        <div class=\"collapse\" id=\"collapse-";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
                            <div class=\"d-flex\">
                                <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                    ";
            // line 156
            if (($this->getAttribute($context["ticket"], "day1TransportTrain", array()) == true)) {
                // line 157
                echo "                                        <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                                    ";
            } else {
                // line 159
                echo "                                        <p> </p>
                                    ";
            }
            // line 161
            echo "                                    <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                    <p>Midi Pique Nique :
                                     ";
            // line 163
            if (($this->getAttribute($context["ticket"], "day1Breakfast", array()) == 1)) {
                // line 164
                echo "                                        <strong>choix 1</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 165
$context["ticket"], "day1Breakfast", array()) == 2)) {
                // line 166
                echo "                                        <strong>choix 2</strong>
                                     ";
            } else {
                // line 168
                echo "                                        <strong>choix 3</strong>
                                    ";
            }
            // line 169
            echo "<br></p>
                                    <p>Apres-Midi :
                                     ";
            // line 171
            if (($this->getAttribute($context["ticket"], "day1Visite", array()) == 1)) {
                // line 172
                echo "                                        <strong>Visite 1</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 173
$context["ticket"], "day1Visite", array()) == 2)) {
                // line 174
                echo "                                        <strong>Visite 2</strong>
                                     ";
            } else {
                // line 176
                echo "                                        <strong>Visite 3</strong>
                                    ";
            }
            // line 178
            echo "                                    <br></p>
                                     ";
            // line 179
            if (($this->getAttribute($context["ticket"], "day1TransportBus", array()) == true)) {
                // line 180
                echo "                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                               ";
            } else {
                // line 182
                echo "                                        <p> </p>
                                    ";
            }
            // line 184
            echo "                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                     ";
            // line 187
            if (($this->getAttribute($context["ticket"], "day2TransportBus", array()) == true)) {
                // line 188
                echo "                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                   ";
            } else {
                // line 190
                echo "                                        <p> </p>
                                    ";
            }
            // line 192
            echo "                                    <p>Matin 9h-12h:  ";
            if (($this->getAttribute($context["ticket"], "day2Visite", array()) == 1)) {
                // line 193
                echo "                                        <strong>Visite 1</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 194
$context["ticket"], "day2Visite", array()) == 2)) {
                // line 195
                echo "                                        <strong>Visite 2</strong>
                                     ";
            } else {
                // line 197
                echo "                                        <strong>Visite 3</strong>
                                    ";
            }
            // line 199
            echo "                                    <br></p>
                                    <p>Midi Pique Nique :
                                    ";
            // line 201
            if (($this->getAttribute($context["ticket"], "day2Breakfast", array()) == 1)) {
                // line 202
                echo "                                         <strong>choix 1</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 203
$context["ticket"], "day2Breakfast", array()) == 2)) {
                // line 204
                echo "                                         <strong>choix 2</strong>
                                    ";
            } else {
                // line 206
                echo "                                         <strong>choix 3</strong>
                                    ";
            }
            // line 207
            echo "<br></p>
                                    <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                                   ";
            // line 209
            if (($this->getAttribute($context["ticket"], "day2TransportTrain", array()) == true)) {
                // line 210
                echo "                                         <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    ";
            } else {
                // line 212
                echo "                                        <p> </p>
                                    ";
            }
            // line 214
            echo "                                    ";
            if (($this->getAttribute($context["ticket"], "day2Night", array()) == true)) {
                // line 215
                echo "                                          <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                     ";
            } else {
                // line 217
                echo "                                        <p> </p>
                                    ";
            }
            // line 219
            echo "                                   ";
            if (($this->getAttribute($context["ticket"], "day2TransportBusNight", array()) == true)) {
                // line 220
                echo "                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                     ";
            } else {
                // line 222
                echo "                                        <p> </p>
                                    ";
            }
            // line 224
            echo "                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la ";
            // line 227
            if (($this->getAttribute($context["ticket"], "optionVisite", array()) == 1)) {
                // line 228
                echo "                                        <strong>Visite 1</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 229
$context["ticket"], "optionVisite", array()) == 2)) {
                // line 230
                echo "                                        <strong>Visite 2</strong>
                                     ";
            } else {
                // line 232
                echo "                                       <strong>Visite 3</strong>
                                    ";
            }
            // line 233
            echo " du samedi matin.<br></p>

                                    ";
            // line 235
            if (($this->getAttribute($context["ticket"], "optionArtDeco", array()) == false)) {
                // line 236
                echo "                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                                     ";
            } else {
                // line 238
                echo "                                        <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                                    ";
            }
            // line 240
            echo "                                    </p>
                                  ";
            // line 241
            if (($this->getAttribute($context["ticket"], "optionExpo", array()) == true)) {
                // line 242
                echo "                                 <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                         ";
            } else {
                // line 245
                echo "                                        <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                                    ";
            }
            // line 248
            echo "                                        ";
            if (($this->getAttribute($context["ticket"], "optionDecouverte", array()) == true)) {
                // line 249
                echo "                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                        <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                        : Prix 9 €<br></p>
                                          ";
            } else {
                // line 253
                echo "                                        <p> </p>
                                    ";
            }
            // line 255
            echo "                                         ";
            if (($this->getAttribute($context["ticket"], "optionGrandSite", array()) == true)) {
                // line 256
                echo "                                         <p>Vous avez choisi de participer a la Visite guidée
                                        <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                        <br>2019 a 15H : Prix 6 €<br></p>
                                         ";
            } else {
                // line 260
                echo "                                        <p> </p>
                                    ";
            }
            // line 262
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "        </div>
    </div>
</div>
<div>
    <div class=\"container\" style=\"margin-bottom:20px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding:0px;margin-top:5px;\">
                <h4>Mes Factures</h4>
            </div>
        </div>
        ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 280
            echo "        <div class=\"row\">
            <div class=\"col d-flex\" style=\"padding:0px;\">
                <p style=\"margin-bottom:0px;\">Facture : ";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "number", array()), "html", null, true);
            echo " &nbsp;&nbsp;</p>
                <a href=\"http://localhost/ColloqueOffice2019/web/files/";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "number", array()), "html", null, true);
            echo ".pdf\" target=\"_blank\">Télécharger votre facture</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "    </div>
</div>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 287,  603 => 283,  599 => 282,  595 => 280,  591 => 279,  579 => 269,  567 => 262,  563 => 260,  557 => 256,  554 => 255,  550 => 253,  544 => 249,  541 => 248,  536 => 245,  531 => 242,  529 => 241,  526 => 240,  522 => 238,  518 => 236,  516 => 235,  512 => 233,  508 => 232,  504 => 230,  502 => 229,  499 => 228,  497 => 227,  492 => 224,  488 => 222,  484 => 220,  481 => 219,  477 => 217,  473 => 215,  470 => 214,  466 => 212,  462 => 210,  460 => 209,  456 => 207,  452 => 206,  448 => 204,  446 => 203,  443 => 202,  441 => 201,  437 => 199,  433 => 197,  429 => 195,  427 => 194,  424 => 193,  421 => 192,  417 => 190,  413 => 188,  411 => 187,  406 => 184,  402 => 182,  398 => 180,  396 => 179,  393 => 178,  389 => 176,  385 => 174,  383 => 173,  380 => 172,  378 => 171,  374 => 169,  370 => 168,  366 => 166,  364 => 165,  361 => 164,  359 => 163,  355 => 161,  351 => 159,  347 => 157,  345 => 156,  338 => 152,  335 => 151,  329 => 148,  322 => 144,  316 => 141,  310 => 138,  304 => 135,  298 => 132,  292 => 129,  286 => 126,  283 => 125,  275 => 120,  269 => 117,  263 => 114,  257 => 111,  251 => 108,  245 => 105,  238 => 102,  236 => 101,  229 => 97,  223 => 94,  217 => 91,  211 => 88,  205 => 85,  199 => 82,  192 => 79,  190 => 78,  185 => 75,  181 => 74,  166 => 62,  151 => 50,  147 => 49,  141 => 46,  137 => 45,  130 => 41,  125 => 39,  121 => 38,  115 => 35,  109 => 32,  105 => 31,  101 => 30,  91 => 25,  82 => 21,  71 => 12,  67 => 10,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends '::base.html.twig' %}

{% block body %}
{% if app.session.flashBag.has('paiementok') %}
    <div class=\"d-flex justify-content-center\" style=\"margin-top:15px;\">
        {% for msg in app.session.flashBag.get('paiementok') %}
            <p class=\"alert alert-success\">{{ msg }}</p>
        {% endfor %}
    </div>
{% endif %}
    <div class=\"container\" style=\"padding-left:0px;margin-top:15px;\">
        <h4 style=\"font-size:25px;margin-top:4px;height:23px;\">Mes coordonnées</h4>
    </div>
    <div>
        <div class=\"container borderclient\" style=\"padding-left:15px;padding-bottom:20px;\">
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"padding-top:7px;padding-bottom:30px;padding-right:50px;padding-left:100px;height:280px;margin-bottom:0px;width:487px;\">
                    <div class=\"d-flex\" style=\"margin-top:8px;\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\" {% if customer.sexe == 1 %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\" {% if customer.sexe == 0 %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                        </div>
                    </div>
                    <div style=\"width:352px;\">
                        <input type=\"text\" value=\"{{ customer.lastname }}\" style=\"width:329px;\">
                        <input type=\"text\" value=\"{{ customer.firstname }}\" style=\"width:330px;margin:0px;margin-top:7px;\">
                        <input type=\"text\" value=\"{{ customer.society }}\" style=\"width:329px;margin-top:6px;\">
                        </div>
                    <div class=\"d-flex\">
                        <input type=\"text\" value=\"{{ customer.adress }}\" style=\"width:328px;margin-top:6px;height:30px;\">
                        </div>
                    <div class=\"d-flex flex-row\">
                        <input type=\"text\" value=\"{{ customer.cp }}\" style=\"width:77px;margin-top:6px;margin-right:10px;\">
                        <input type=\"text\" value=\"{{ customer.town }}\" style=\"width:246px;margin-top:6px;\">
                    </div>
                        <input type=\"text\" value=\"{{ customer.phonenumber }}\" style=\"width:329px;margin-top:6px;\">
                    </div>
                <div class=\"col-md-6 d-flex justify-content-around flex-column\" style=\"height:270px;\">
                    <div class=\"\">
                        <input type=\"text\" value=\"{{ user.username }}\" style=\"width:329px;margin-top:38px;margin-left:22px;\">
                        <input type=\"text\" value=\"{{ user.email }}\" style=\"width:329px;margin-top:7px;margin-left:22px;\">
                    </div>
                    <div class=\"d-flex justify-content-between\" style=\"width:329px;margin-left:22px;\">
                        <a href=\"{{ path('fos_user_change_password') }}\"><input type=\"submit\" value=\"Modifier Password\" class=\"btn btn-primary\"></a>
                        <a href=\"{{ path('fos_user_profile_edit') }}\"><input type=\"submit\" value=\"Modifier Email\" class=\"btn btn-primary\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\" style=\"margin-top:15px;\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-between\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;margin-bottom:25px;\">
                    <h4>Mes récapitulatifs</h4>
                    <div>
                        <a class=\"btn btn-primary\" href=\"{{ path('recap_new') }}\">Modifier/Payer Commande</a>
                    </div>
                    <div class=\"d-flex\">
                      <p><strong>Paiement En Attente</strong></p>
                      <div class=\"foo blue\"></div>
                      <p><strong>Paiement Effectué</strong></p>
                      <div class=\"foo green\"></div>
                      <p><strong>Commande En Cours</strong></p>
                      <div class=\"foo orange\"></div>
                    </div>
                </div>
            </div>
            {% for ticket in tickets %}
            <div class=\"row\">
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;margin-bottom:10px;\">
                    <div class=\"collapseclient\">
                      {% if ticket.facture.status == 2 %}
                        <a class=\"btn btn-success collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-{{ ticket.id }}\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : {{ ticket.facture.number }}
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°{{ ticket.ticketNumber }}
                            </div>
                            <div class=\"col-md-2\">
                            Nom: {{ ticket.lastName }}
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: {{ ticket.firstName }}
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: {{ ticket.society }}
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : {{ ticket.price }}€
                            </div>
                        </div>
                        </a>
                        {% elseif ticket.facture.status == 1 %}
                        <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-{{ ticket.id }}\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : {{ ticket.facture.number }}
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°{{ ticket.ticketNumber }}
                            </div>
                            <div class=\"col-md-2\">
                            Nom: {{ ticket.lastName }}
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: {{ ticket.firstName }}
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: {{ ticket.society }}
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : {{ ticket.price }}€
                            </div>
                        </div>
                        </a>
                        {% else %}
                        <div class=\"d-flex\">
                            <a class=\"btn btn-danger orange collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-{{ ticket.id }}\">
                           <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : {{ ticket.facture.number }}
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°{{ ticket.ticketNumber }}
                            </div>
                            <div class=\"col-md-2\">
                            Nom: {{ ticket.lastName }}
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: {{ ticket.firstName }}
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: {{ ticket.society }}
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : {{ ticket.price }}€
                            </div>
                        </div>
                        </a>
                            <a href=\"{{ path('ticket_edit',{'id': ticket.id}) }}\" hidden><i class=\"fas fa-cogs\"></i></a>
                        </div>
                        {% endif %}

                        <div class=\"collapse\" id=\"collapse-{{ ticket.id }}\">
                            <div class=\"d-flex\">
                                <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                    {% if ticket.day1TransportTrain == true %}
                                        <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                                    {% else %}
                                        <p> </p>
                                    {% endif %}
                                    <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                    <p>Midi Pique Nique :
                                     {% if ticket.day1Breakfast == 1 %}
                                        <strong>choix 1</strong>
                                    {% elseif ticket.day1Breakfast == 2  %}
                                        <strong>choix 2</strong>
                                     {% else %}
                                        <strong>choix 3</strong>
                                    {% endif %}<br></p>
                                    <p>Apres-Midi :
                                     {% if ticket.day1Visite == 1 %}
                                        <strong>Visite 1</strong>
                                    {% elseif ticket.day1Visite == 2  %}
                                        <strong>Visite 2</strong>
                                     {% else %}
                                        <strong>Visite 3</strong>
                                    {% endif %}
                                    <br></p>
                                     {% if ticket.day1TransportBus == true %}
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                               {% else %}
                                        <p> </p>
                                    {% endif %}
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                     {% if ticket.day2TransportBus == true %}
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                   {% else %}
                                        <p> </p>
                                    {% endif %}
                                    <p>Matin 9h-12h:  {% if ticket.day2Visite == 1 %}
                                        <strong>Visite 1</strong>
                                    {% elseif ticket.day2Visite == 2  %}
                                        <strong>Visite 2</strong>
                                     {% else %}
                                        <strong>Visite 3</strong>
                                    {% endif %}
                                    <br></p>
                                    <p>Midi Pique Nique :
                                    {% if ticket.day2Breakfast == 1 %}
                                         <strong>choix 1</strong>
                                    {% elseif ticket.day2Breakfast == 2  %}
                                         <strong>choix 2</strong>
                                    {% else %}
                                         <strong>choix 3</strong>
                                    {% endif %}<br></p>
                                    <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                                   {% if ticket.day2TransportTrain == true %}
                                         <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    {% else %}
                                        <p> </p>
                                    {% endif %}
                                    {% if ticket.day2Night == true %}
                                          <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                     {% else %}
                                        <p> </p>
                                    {% endif %}
                                   {% if ticket.day2TransportBusNight == true %}
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                     {% else %}
                                        <p> </p>
                                    {% endif %}
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la {% if ticket.optionVisite == 1 %}
                                        <strong>Visite 1</strong>
                                    {% elseif ticket.optionVisite == 2  %}
                                        <strong>Visite 2</strong>
                                     {% else %}
                                       <strong>Visite 3</strong>
                                    {% endif %} du samedi matin.<br></p>

                                    {% if ticket.optionArtDeco == false %}
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                                     {% else %}
                                        <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                                    {% endif %}
                                    </p>
                                  {% if ticket.optionExpo == true %}
                                 <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                         {% else %}
                                        <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                                    {% endif %}
                                        {% if ticket.optionDecouverte == true %}
                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                        <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                        : Prix 9 €<br></p>
                                          {% else %}
                                        <p> </p>
                                    {% endif %}
                                         {% if ticket.optionGrandSite == true %}
                                         <p>Vous avez choisi de participer a la Visite guidée
                                        <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                        <br>2019 a 15H : Prix 6 €<br></p>
                                         {% else %}
                                        <p> </p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
<div>
    <div class=\"container\" style=\"margin-bottom:20px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding:0px;margin-top:5px;\">
                <h4>Mes Factures</h4>
            </div>
        </div>
        {% for facture in factures %}
        <div class=\"row\">
            <div class=\"col d-flex\" style=\"padding:0px;\">
                <p style=\"margin-bottom:0px;\">Facture : {{ facture.number }} &nbsp;&nbsp;</p>
                <a href=\"http://localhost/ColloqueOffice2019/web/files/{{facture.number}}.pdf\" target=\"_blank\">Télécharger votre facture</a>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

{% endblock %}
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
