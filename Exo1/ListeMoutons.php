<?php

/**
 * Classe representant une liste de moutons
 * @author Hugo COLLIN
 */
class ListeMoutons
{
    /**
     * Chaine de lettre utilisee pour la generation automatique de noms de moutons
     */
    public const CHAINE = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSUTVWXYZ";

    /**
     * @var array tableau qui constitue la liste des moutons
     */
    private array $moutons;

    /**
     * Constructeur
     * @param array $mListe ajoute les moutons du tableau à la liste initiale (optionnel)
     * @throws PasUnMoutonException
     */
    public function __construct(array $mListe = [])
    {
        $this->ajouterTableauMoutons($mListe);
    }

    /**
     * Permet d'ajouter un ensemble de moutons au tableau de moutons existant
     * @throws PasUnMoutonException
     */
    public function ajouterTableauMoutons(array $mListe) : void
    {
        foreach ($mListe as $m)
            if ($m instanceof Mouton)
                $this->ajouterMouton($m);
            else throw new PasUnMoutonException();
    }

    /**
     * Permet d'ajouter un mouton
     * @param Mouton $m
     * @return void
     */
    public function ajouterMouton(Mouton $m) : void
    {
        $this->moutons[] = $m;
    }

    /**
     * Calcule la moyenne des valeurs des monutons de la liste
     * @return int moyenne des valeurs des moutons de la liste
     */
    public function calculerMoyenne(): int
    {
        $sumValMoutons = 0;
        foreach ($this->moutons as $mouton)
            $sumValMoutons += $mouton->getValeur();

        return $sumValMoutons / $this->nbMoutons();
    }

    /**
     * Retourne le nombre de moutons dans la liste
     * @return int taille du tableau de moutons
     */
    public function nbMoutons(): int
    {
        return sizeof($this->moutons);
    }

    /**
     * Ajoute des moutons generes aleatoirement a la liste de moutons
     * @param int $nb nombre de moutons a ajouter
     * @return void
     */
    public function ajouterMoutonsAlea(int $nb) : void
    {
        $nbChars = strlen(self::CHAINE);
        for ($j = 0; $j < $nb; $j++) {
            $randNameMouton = "";
            $nbCharsNameMouton = rand(3, 15);
            $randValMoutons = rand(10, 200);

            for ($k = 0; $k < $nbCharsNameMouton; $k++)
                $randNameMouton .= self::CHAINE[rand(0, ($nbChars - 1))];

            $this->ajouterMouton(new Mouton($randNameMouton, $randValMoutons));
        }
    }
}