<?php
session_start();
require_once('database.php');

function sendError($type, $message)
{
    echo $message;
}

function fullRegister($email, $username, $password, $passwordconfirm)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $password) && strlen($password) >= 8) {
            if ($password == $passwordconfirm) {
                $sql = "SELECT COUNT(*) as count FROM users WHERE email = :email";
                $stmt = PDO->prepare($sql);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result['count'] < 1) {

                    $password = password_hash($password, PASSWORD_BCRYPT);

                    $sql = "INSERT INTO users(username, email, `password`) VALUES(:username, :email, :pass)";
                    $stmt = PDO->prepare($sql);
                    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                    $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
                    if ($stmt->execute()) {
                        echo "true";
                    } else {
                        sendError("danger", "Une erreur est survenue");
                    }
                } else {
                    sendError("danger", "L'adresse e-mail est déjà utilisé");
                }
            } else {
                sendError("danger", "Le mot de passe ne correspondent pas");
            }
        } else {
            sendError("danger", "Le mot de passe n'est pas assez sécurisé");
        }
    } else {
        sendError("danger", "Merci de vérifier l'adresse email saisie.");
    }
}


function fullLogin($email, $password)
{

    $sql = "SELECT * FROM users WHERE email=:email LIMIT 1";
    $stmt = PDO->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!empty($result)) {
        if (password_verify($password, $result['password'])) {
            session_regenerate_id(true);
            $_SESSION['user'] = [
                'id' => $result['id'],
                'username' => $result['username'],
            ];
            echo "true";
        } else {
            sendError("danger", "Mot de passe incorrect");
        }
    } else {
        sendError("danger", "L'email renseignée ne correspond à aucun compte");
    }
}

function isValidSession($userData) {
    if (!isset($userData['id']) || !isset($userData['username'])) {
        return false; 
    }

    if (!is_numeric($userData['id']) || $userData['id'] <= 0) {
        return false;
    }

  

    $sql = "SELECT COUNT(*) FROM users WHERE id = :id AND username = :username";
    $stmt = PDO->prepare($sql);
    $stmt->bindParam(':id', $userData['id'], PDO::PARAM_INT);
    $stmt->bindParam(':username', $userData['username'], PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->fetchColumn() == 0) {
        return false; 
    }

    return true; 
}

