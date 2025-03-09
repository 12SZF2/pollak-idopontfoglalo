<?php

class VersenyModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Versenyek adatainak lekérdezése
    public function kartyaLekerdezes()
    {
        $this->db->query(
            'SELECT
                e.tema, e.versenynev, e.idopont,e.jelentkezesiHatarido,e.kep, e.id AS "esemeny_id",
                count(j.email) as "jelentkezok"
            FROM
                versenyek e
            LEFT JOIN
                versenyjelentkezok j ON e.id = j.versenyID AND j.torolt = false
            WHERE
                e.torolt = false
            GROUP BY
                e.versenynev, e.idopont, e.id
            '
        );

        $results = $this->db->resultSet();

        return $results;
    }
}
