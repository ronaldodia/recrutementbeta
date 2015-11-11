<?php


namespace Utilisateur\UtilisateurBundle\Entity;
class Role{
      
protected function getRole() {
         $roles = array();
         
        foreach ($this->container->getParameter('security.role_hierarchy.roles') as $name => $rolesHierarchy) {
            $roles[$name] = $name;
         
            foreach ($rolesHierarchy as $role) {
                if (!isset($roles[$role])) {
                    $roles[$role] = $role;
                }
            }
        }
         
        return $roles;
    }
   
}
?>