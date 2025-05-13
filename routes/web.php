<?php
session_start();

// Cargar controladores
require_once '../app/controllers/SexoController.php';
require_once '../app/controllers/PersonaController.php';
require_once '../app/controllers/DireccionController.php';
require_once '../app/controllers/EstadocivilController.php';
require_once '../app/controllers/TelefonoController.php';

$requestUri = $_SERVER["REQUEST_URI"];
$basePath = '/whatsapp6a/public/';

$route = str_replace($basePath, '', $requestUri);
$route = strtok($route, '?'); // sin parámetros GET

switch ($route) {
    // MENÚ PRINCIPAL
    case '':
        echo "<h2>Selecciona un módulo CRUD</h2>";
        echo "<ul>
            <li><a href='persona'>CRUD Persona</a></li>
            <li><a href='direccion'>CRUD Dirección</a></li>
            <li><a href='estadocivil'>CRUD Estado Civil</a></li>
            <li><a href='telefono'>CRUD Teléfono</a></li>
            <li><a href='sexo'>CRUD Sexo</a></li>
        </ul>";
        break;

    // ---------------------- CRUD SEXO ----------------------
    case 'sexo':
    case 'sexo/index':
        (new SexoController())->index();
        break;
    case 'sexo/edit':
        (new SexoController())->edit($_GET['id'] ?? null);
        break;
    case 'sexo/eliminar':
        (new SexoController())->eliminar($_GET['id'] ?? null);
        break;
    case 'sexo/delete':
        (new SexoController())->delete();
        break;
    case 'sexo/update':
        (new SexoController())->update();
        break;

    // ---------------------- CRUD PERSONA ----------------------
    case 'persona':
    case 'persona/index':
        (new PersonaController())->index();
        break;
    case 'persona/edit':
        (new PersonaController())->edit($_GET['id'] ?? null);
        break;
    case 'persona/eliminar':
        (new PersonaController())->eliminar($_GET['id'] ?? null);
        break;
    case 'persona/delete':
        (new PersonaController())->delete();
        break;
    case 'persona/update':
        (new PersonaController())->update();
        break;

    // ---------------------- CRUD DIRECCIÓN ----------------------
    case 'direccion':
    case 'direccion/index':
        (new DireccionController())->index();
        break;
    case 'direccion/edit':
        (new DireccionController())->edit($_GET['id'] ?? null);
        break;
    case 'direccion/eliminar':
        (new DireccionController())->eliminar($_GET['id'] ?? null);
        break;
    case 'direccion/delete':
        (new DireccionController())->delete();
        break;
    case 'direccion/update':
        (new DireccionController())->update();
        break;

    // ---------------------- CRUD ESTADO CIVIL ----------------------
    case 'estadocivil':
    case 'estadocivil/index':
        (new EstadoCivilController())->index();
        break;
    case 'estadocivil/edit':
        (new EstadoCivilController())->edit($_GET['id'] ?? null);
        break;
    case 'estadocivil/eliminar':
        (new EstadoCivilController())->eliminar($_GET['id'] ?? null);
        break;
    case 'estadocivil/delete':
        (new EstadoCivilController())->delete();
        break;
    case 'estadocivil/update':
        (new EstadoCivilController())->update();
        break;

    // ---------------------- CRUD TELÉFONO ----------------------
    case 'telefono':
    case 'telefono/index':
        (new TelefonoController())->index();
        break;
    case 'telefono/edit':
        (new TelefonoController())->edit($_GET['id'] ?? null);
        break;
    case 'telefono/eliminar':
        (new TelefonoController())->eliminar($_GET['id'] ?? null);
        break;
    case 'telefono/delete':
        (new TelefonoController())->delete();
        break;
    case 'telefono/update':
        (new TelefonoController())->update();
        break;

    // ---------------------- RUTA NO ENCONTRADA ----------------------
    default:
        echo "Error 404: Página no encontrada.";
        break;
}
?>



    default:
        echo "Error 404: Página no encontrada.";
        break;
}
