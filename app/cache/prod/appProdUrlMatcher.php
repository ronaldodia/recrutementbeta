<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // annonce_homepage
        if (0 === strpos($pathinfo, '/filtre') && preg_match('#^/filtre(?:/(?P<typeoffre>[^/]+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_homepage')), array (  '_controller' => 'Annonces\\AnnoncesBundle\\Controller\\DefaultController::indexAction',  'typeoffre' => 'tout',));
        }

        // annonce_showcompany
        if (0 === strpos($pathinfo, '/showcompany') && preg_match('#^/showcompany/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_showcompany')), array (  '_controller' => 'Annonces\\AnnoncesBundle\\Controller\\DefaultController::showcompanyAction',));
        }

        // annonce_403
        if ($pathinfo === '/pasledroit403') {
            return array (  '_controller' => 'Annonces\\AnnoncesBundle\\Controller\\DefaultController::pasdroitAction',  '_route' => 'annonce_403',);
        }

        // annonce_detailsoffre
        if (0 === strpos($pathinfo, '/offre') && preg_match('#^/offre/(?P<id>\\d+)(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_detailsoffre')), array (  '_controller' => 'Annonces\\AnnoncesBundle\\Controller\\DetailsoffreController::indexAction',  '_format' => 'html',));
        }

        // annonce_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'annonce_index');
            }

            return array (  '_controller' => 'Annonces\\AnnoncesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'annonce_index',);
        }

        // utilisateur_redirection
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\RedirectionController::indexAction',  '_route' => 'utilisateur_redirection',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_creationville
            if ($pathinfo === '/admin/creerville') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::addvilleAction',  '_route' => 'admin_creationville',);
            }

            if (0 === strpos($pathinfo, '/admin/add')) {
                // admin_adduser
                if ($pathinfo === '/admin/adduser') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UtilisateursController::addusersAction',  '_route' => 'admin_adduser',);
                }

                // admin_addentreprise
                if ($pathinfo === '/admin/addcompany') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::addcompanyAction',  '_route' => 'admin_addentreprise',);
                }

                // admin_adddomainecompetence
                if ($pathinfo === '/admin/adddomainecompetence') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::adddomainecompetenceAction',  '_route' => 'admin_adddomainecompetence',);
                }

                // admin_addmetier
                if ($pathinfo === '/admin/addmetier') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::addmetierAction',  '_route' => 'admin_addmetier',);
                }

                // admin_addsecteur
                if ($pathinfo === '/admin/addsecteur') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::addsecteurAction',  '_route' => 'admin_addsecteur',);
                }

                // admin_addoffre
                if ($pathinfo === '/admin/addoffre') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::addoffreAction',  '_route' => 'admin_addoffre',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/show')) {
                // admin_showville
                if ($pathinfo === '/admin/showville') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::showvilleAction',  '_route' => 'admin_showville',);
                }

                // admin_showoffres
                if (rtrim($pathinfo, '/') === '/admin/showoffres') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_showoffres');
                    }

                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::showoffresAction',  '_route' => 'admin_showoffres',);
                }

                // admin_showdomainecompetence
                if ($pathinfo === '/admin/showdomainecompetence') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::showdomainecompetenceAction',  '_route' => 'admin_showdomainecompetence',);
                }

                // admin_showutilisateur
                if (rtrim($pathinfo, '/') === '/admin/showutilisateur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_showutilisateur');
                    }

                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UtilisateursController::showutilisateursAction',  '_route' => 'admin_showutilisateur',);
                }

                // admin_showsecteur
                if ($pathinfo === '/admin/showsecteur') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::showsecteurAction',  '_route' => 'admin_showsecteur',);
                }

                if (0 === strpos($pathinfo, '/admin/showe')) {
                    // admin_showentreprise
                    if ($pathinfo === '/admin/showentreprise') {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::showcompaniesAction',  '_route' => 'admin_showentreprise',);
                    }

                    // admin_showoffreexpire
                    if ($pathinfo === '/admin/showeoffreexpire') {
                        return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::showoffresexpireAction',  '_route' => 'admin_showoffreexpire',);
                    }

                }

                // admin_showcompany
                if (0 === strpos($pathinfo, '/admin/showcompany') && preg_match('#^/admin/showcompany/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_showcompany')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::showcompanyAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/edit')) {
                // admin_editcompany
                if (0 === strpos($pathinfo, '/admin/editcompany') && preg_match('#^/admin/editcompany/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editcompany')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::editcompanyAction',));
                }

                // admin_editoffre
                if (0 === strpos($pathinfo, '/admin/editoffre') && preg_match('#^/admin/editoffre/(?P<idoffre>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_editoffre');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editoffre')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::editoffreAction',));
                }

            }

            // admin_activeoffre
            if (0 === strpos($pathinfo, '/admin/activeoffre') && preg_match('#^/admin/activeoffre/(?P<idoffre>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_activeoffre');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_activeoffre')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\AdminController::activeroffreAction',));
            }

            // admin_showmetier
            if ($pathinfo === '/admin/showmetier') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::showmetierAction',  '_route' => 'admin_showmetier',);
            }

            if (0 === strpos($pathinfo, '/admin/edit')) {
                // admin_editsecteur
                if (0 === strpos($pathinfo, '/admin/editsecteur') && preg_match('#^/admin/editsecteur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editsecteur')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::editsecteurAction',));
                }

                // admin_editmetier
                if (0 === strpos($pathinfo, '/admin/editmetier') && preg_match('#^/admin/editmetier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editmetier')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::editmetierAction',));
                }

                // admin_editville
                if (0 === strpos($pathinfo, '/admin/editville') && preg_match('#^/admin/editville/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editville')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::editvilleAction',));
                }

                // admin_editdomainecompetence
                if (0 === strpos($pathinfo, '/admin/editdomainecompetence') && preg_match('#^/admin/editdomainecompetence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editdomainecompetence')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::editdomainecompetenceAction',));
                }

            }

            // admin_removeville
            if (0 === strpos($pathinfo, '/admin/removeville') && preg_match('#^/admin/removeville/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_removeville')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DonneesController::removevilleAction',));
            }

            // admin_editutilisateur
            if (0 === strpos($pathinfo, '/admin/editutilisateur') && preg_match('#^/admin/editutilisateur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editutilisateur')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\UtilisateursController::editutilisateurAction',));
            }

        }

        if (0 === strpos($pathinfo, '/entreprise')) {
            // entreprise_homepage
            if (rtrim($pathinfo, '/') === '/entreprise') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entreprise_homepage');
                }

                return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entreprise_homepage',);
            }

            // entreprise_informations
            if ($pathinfo === '/entreprise/informations') {
                return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\InformationController::indexAction',  '_route' => 'entreprise_informations',);
            }

            // entreprise_editerinformation
            if ($pathinfo === '/entreprise/editerinformations') {
                return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\InformationController::editinformationAction',  '_route' => 'entreprise_editerinformation',);
            }

            // entreprise_addoffre
            if ($pathinfo === '/entreprise/addoffre') {
                return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::indexAction',  '_route' => 'entreprise_addoffre',);
            }

            if (0 === strpos($pathinfo, '/entreprise/show')) {
                // entreprise_showoffres
                if ($pathinfo === '/entreprise/showoffres') {
                    return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::mesannoncesAction',  '_route' => 'entreprise_showoffres',);
                }

                // entreprise_showallcvs
                if ($pathinfo === '/entreprise/showallcvs') {
                    return array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::showallcvsAction',  '_route' => 'entreprise_showallcvs',);
                }

                // entreprise_postulants
                if (0 === strpos($pathinfo, '/entreprise/showpostulants') && preg_match('#^/entreprise/showpostulants/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_postulants')), array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::postulantsAction',));
                }

                // entreprise_showcv
                if (0 === strpos($pathinfo, '/entreprise/showcv') && preg_match('#^/entreprise/showcv/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_showcv')), array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::showcvAction',));
                }

            }

            // entreprise_editoffre
            if (0 === strpos($pathinfo, '/entreprise/editoffre') && preg_match('#^/entreprise/editoffre/(?P<idoffre>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entreprise_editoffre');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_editoffre')), array (  '_controller' => 'Entreprise\\EntrepriseBundle\\Controller\\OffresController::editoffreAction',));
            }

        }

        if (0 === strpos($pathinfo, '/candidat')) {
            // candidat_homepage
            if (rtrim($pathinfo, '/') === '/candidat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidat_homepage');
                }

                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CandidatController::indexAction',  '_route' => 'candidat_homepage',);
            }

            // candidat_add
            if (rtrim($pathinfo, '/') === '/candidat/addcandidat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidat_add');
                }

                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CandidatController::addcandidatAction',  '_route' => 'candidat_add',);
            }

            if (0 === strpos($pathinfo, '/candidat/e')) {
                // candidat_edit
                if (rtrim($pathinfo, '/') === '/candidat/editcandidat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_edit');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CandidatController::editcandidatAction',  '_route' => 'candidat_edit',);
                }

                // candidat_etatcivile
                if (rtrim($pathinfo, '/') === '/candidat/etatcivile') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_etatcivile');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CandidatController::etatcivileAction',  '_route' => 'candidat_etatcivile',);
                }

            }

            // candidat_addlangue
            if (rtrim($pathinfo, '/') === '/candidat/addlangue') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidat_addlangue');
                }

                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\LangueController::addlangueAction',  '_route' => 'candidat_addlangue',);
            }

            // candidat_editlangue
            if (0 === strpos($pathinfo, '/candidat/editlangue') && preg_match('#^/candidat/editlangue/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_editlangue')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\LangueController::editlangueAction',));
            }

            // candidat_deletelangue
            if (0 === strpos($pathinfo, '/candidat/deletelangue') && preg_match('#^/candidat/deletelangue/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_deletelangue')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\LangueController::deletelangueAction',));
            }

            // candidat_addexperience
            if (rtrim($pathinfo, '/') === '/candidat/addexperience') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidat_addexperience');
                }

                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\ExperienceController::addexperienceAction',  '_route' => 'candidat_addexperience',);
            }

            // candidat_editexperience
            if (0 === strpos($pathinfo, '/candidat/editexperience') && preg_match('#^/candidat/editexperience/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_editexperience')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\ExperienceController::editexperienceAction',));
            }

            // candidat_deleteexperience
            if (0 === strpos($pathinfo, '/candidat/deleteexperience') && preg_match('#^/candidat/deleteexperience/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_deleteexperience')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\ExperienceController::deleteexperienceAction',));
            }

            if (0 === strpos($pathinfo, '/candidat/a')) {
                // candidat_afficherexperience
                if (rtrim($pathinfo, '/') === '/candidat/afficherexperience') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_afficherexperience');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\ExperienceController::showexperienceAction',  '_route' => 'candidat_afficherexperience',);
                }

                // candidat_addcompetence
                if (rtrim($pathinfo, '/') === '/candidat/addcompetence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_addcompetence');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CompetenceController::addcompetenceAction',  '_route' => 'candidat_addcompetence',);
                }

            }

            // candidat_editcompetence
            if (0 === strpos($pathinfo, '/candidat/editcompetence') && preg_match('#^/candidat/editcompetence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_editcompetence')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CompetenceController::editcompetenceAction',));
            }

            // candidat_deletecompetence
            if (0 === strpos($pathinfo, '/candidat/deletecompetence') && preg_match('#^/candidat/deletecompetence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_deletecompetence')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CompetenceController::deletecompetenceAction',));
            }

            if (0 === strpos($pathinfo, '/candidat/a')) {
                // candidat_affichercompetence
                if (rtrim($pathinfo, '/') === '/candidat/affichercompetence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_affichercompetence');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CompetenceController::showcompetenceAction',  '_route' => 'candidat_affichercompetence',);
                }

                // candidat_addformation
                if (rtrim($pathinfo, '/') === '/candidat/addformation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_addformation');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\FormationController::addformationAction',  '_route' => 'candidat_addformation',);
                }

                // candidat_showformation
                if (rtrim($pathinfo, '/') === '/candidat/afficherformation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat_showformation');
                    }

                    return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\FormationController::showformationAction',  '_route' => 'candidat_showformation',);
                }

            }

            // candidat_editformation
            if (0 === strpos($pathinfo, '/candidat/editerformation') && preg_match('#^/candidat/editerformation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_editformation')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\FormationController::editformationAction',));
            }

            // candidat_deleteformation
            if (0 === strpos($pathinfo, '/candidat/deleteformation') && preg_match('#^/candidat/deleteformation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_deleteformation')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\FormationController::deleteformationAction',));
            }

            // candidat_showcv
            if (rtrim($pathinfo, '/') === '/candidat/affichercv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidat_showcv');
                }

                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\CvController::showcvAction',  '_route' => 'candidat_showcv',);
            }

            // candidat_postuler
            if (0 === strpos($pathinfo, '/candidat/postuler') && preg_match('#^/candidat/postuler/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_postuler')), array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\PostulerController::postulerAction',));
            }

            // candidat_offrepostulees
            if ($pathinfo === '/candidat/offrespostulees') {
                return array (  '_controller' => 'Candidat\\CandidatBundle\\Controller\\PostulerController::offrepostuleesAction',  '_route' => 'candidat_offrepostulees',);
            }

        }

        // utilisateur_homepage
        if (rtrim($pathinfo, '/') === '/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'utilisateur_homepage');
            }

            return array (  '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'utilisateur_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
