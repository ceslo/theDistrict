<?php 
namespace App\Model;
class User
{
    public int $age;
    public array $films_favoris = [];
    public string $nom;
    // @param int $age
    // @param string $nom
    public function__construct(int$age,string$nom)
    {
        $this->age=$age;
        $this->nom=$nom;
    }
    public function afficherNom(): string
    {
        return
"Je m'appelle".$this->nom.".";
    }
    public function afficherAge():string 
    {
        return "j'ai".$this->age."ans.";
    }
    public function ajouterFilmsFavoris(string $film):bool 
    {
        $this->film_favoris[]=$film;
        return true
    }
    public function supprimerFilmsFavoris(string $films):bool 
    {
        if(!in_array($film, $this->films_favoris)) throw new InvalidArgumentException("Film inconnu:".$film);
        unset($this->films_favoris[array_search($film,$this->films_favoris)]);
        return true;
    };
};
use PHPUnit\Framework\TestCase;
require 'Model/user.php';
use App\Model\User;

class UserTest extends TestCase
{
    public function testAfficherNom()
    {
        user=new User(18, 'John');
        $this->assertIsString($user->afficherNom());
        $this->assertStringContainsStringIgnoringCase('John',$user->afficherNom());
        $this->assertEquals("je m'appelle John.", $user->afficherNom(),"Le nom de lm'utilisateur n'est pas correct");
    }
}
