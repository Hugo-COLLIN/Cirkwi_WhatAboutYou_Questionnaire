<?php

/**
 * Classe representant un mouton
 * @author Hugo COLLIN
 */
class Mouton
{
    /**
     * Chaine de lettre utilisee pour la generation automatique de noms de moutons
     */
    private const CHAINE = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSUTVWXYZ";

    /**
     * @var string nom du mouton
     */
    private string $nom;

    /**
     * @var int valeur du mouton
     */
    private int $valeur;

    /**
     * Constructeur
     * @param string $n nom du mouton
     * @param int $v valeur du mouton
     */
    public function __construct(string $n, int $v)
    {
        $this->nom = $n;
        $this->valeur = $v;
    }

    /**
     * Getter de nom
     * @return string nom du mouton
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Getter de valeur
     * @return int valeur du mouton
     */
    public function getValeur(): int
    {
        return $this->valeur;
    }

    /**
     * Retourne un nom de mouton genere aleatoirement
     * @return string nom genere aleatoirement
     */
    public static function randName() : string
    {
        $randNameMouton = "";
        $nbChars = strlen(self::CHAINE);
        $nbCharsNameMouton = rand(3, 15);
        for ($k = 0; $k < $nbCharsNameMouton; $k++)
            $randNameMouton .= self::CHAINE[rand(0, ($nbChars - 1))];
        return $randNameMouton;
    }

    /**
     * Retourne une valeur pour le mouton genere aleatoirement
     * @return int entier genere aleatoirement
     */
    public static function randVal() : int
    {
        return rand(10, 200);
    }
}