<?php
//require_once '../../public/template/css';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="produit")
 **/
class Produit{

    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
private $id;
   /** @ORM\Column(type="string") **/
private $nom;
   /** @ORM\Column(type="integer") **/
private $qte;
  /**
     * Many produit have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="produit")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
private $users;

 public function __construct()
{
}
/**
 * @return mixed
*/
 public function getId()
 {
   return $this->$id;
 }
 /**
  * @param mixed $id
 */
public function setId($id)
{
 $this->id =$id;
}
/**
 * @return mixed
*/
public function getNom(){
  return $this->$nom;
}
/**
  * @param mixed $nom
 */
public function setNom($nom)
{
  $this->nom =$nom;
}
/**
 * @return mixed
*/
public function getQte()
{
  return $this->$qte;
}
/**
  * @param mixed $qte
 */
public function setQte($qte)
{
  $this->qte = $qte;
}
/**
 * @return mixed
*/
public function getUsers()
{
  return $this->$users;
}
/**
  * @param mixed $user
 */
public function setUsers($users)
{
  $this->users=$users;
}
}


?>