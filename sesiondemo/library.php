<?php
session_start();

function cleanupSession()
{
    $_SESSION = [];
    session_destroy();
}

const SESSION_KEY = "nw_session_demo";

function addToSession($strKey, $value)
{
    if (isset($_SESSION[SESSION_KEY])) {
        $_SESSION[SESSION_KEY][$strKey] = $value;
    } else {
        $_SESSION[SESSION_KEY] = [];
        $_SESSION[SESSION_KEY][$strKey] = $value;
    }
}

function getFromSession($strKey)
{
    if (
        isset($_SESSION[SESSION_KEY])
        && isset($_SESSION[SESSION_KEY][$strKey])
    ) {
        return $_SESSION[SESSION_KEY][$strKey];
    }
    return null;
}

const CONTACTOS_KEY = "contactos";
function addContact($nombre, $correo, $telefono)
{
    $contacto = [
        "nombre" => $nombre,
        "correo" => $correo,
        "telefono" => $telefono
    ];
    $contactos = getFromSession(CONTACTOS_KEY);
    if (is_null($contactos)) {
        $contactos = [];
    }
    $contactos[] = $contacto;
    addToSession(CONTACTOS_KEY, $contactos);
}

function getContacts()
{
    $contactos = getFromSession(CONTACTOS_KEY) ?? [];
    return $contactos;
}
