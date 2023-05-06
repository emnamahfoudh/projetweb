<?php
include '../config.php';
include '../Model/Course.php';

class CourseC
{
    function showCourse($libelle)
    {
        $sql = "SELECT * FROM evenement WHERE label LIKE '%" . $libelle . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $courses = $query->fetchAll();
            return $courses;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function upcomingCourse()
    {
        echo date("Y/m/d");
        $sql = "SELECT * FROM evenement WHERE date >= '" . date("Y-m-d") . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $courses = $query->fetchAll();
            return $courses;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listCourses()
    {
        $sql = "SELECT * FROM evenement";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function bookCourse($idevent, $idClient)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :idClient,:idevent)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idClient' => $idClient,
                'idevent' => $idevent
            ]);
            /*$course = $this->getCourse($idevent);
            echo $course['nbPlaces'] - 1;
            $query = $db->prepare(
                'UPDATE evenement SET nbPlaces = ' . $course['nbPlaces'] - 1
                    . ' WHERE idevent= ' . $idevent*/
                    $course = $this->getCourse($idevent);
        $nbPlaces = $course['nbPlaces'] - 1;
        $query = $db->prepare(
            'UPDATE evenement SET nbPlaces = ' . $nbPlaces
                . ' WHERE idevent= ' . $idevent
            );
            $query->execute();
            header("Location: confirmation.php?idevent=$idevent&idClient=$idClient");
        exit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getCourse($id)
    {
        $sql = "SELECT * from evenement where idevent = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $course = $query->fetch();
            return $course;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
