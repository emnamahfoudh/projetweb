<?php
include '../config.php';
include '../Model/Client.php';

class ClientC
{
    public function listClients()
    {
        $sql = "SELECT * FROM participants";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($id)
    {
        $sql = "DELETE FROM participants WHERE idClient = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($client)
    {
        $sql = "INSERT INTO participants  
        VALUES (NULL, :fn,:ln, :ad,:dob, :e)";
        $db = config::getConnexion();
        try {
            print_r($client->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $client->getLastName(),
                'fn' => $client->getFirstName(),

                'ad' => $client->getAddress(),
                'dob' => $client->getDob()->format('Y/m/d'),
                'e' => $client->getid_event(),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET 
                    lastName = :lastName, 
                    firstName = :firstName, 

                    address = :address, 
                    dob = :dob,
                    id_event = :id_event
                WHERE idClient= :idClient'
            );
            $query->execute([
                'idClient' => $id,
                'lastName' => $client->getLastName(),
                'firstName' => $client->getFirstName(),

                'address' => $client->getAddress(),
                'dob' => $client->getDob()->format('Y/m/d'),
                'id_event' => $client->getid_event()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($id)
    {
        $sql = "SELECT * from participants where idClient = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
