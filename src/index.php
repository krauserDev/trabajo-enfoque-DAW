<?php
$host = getenv('MYSQL_HOST') ?: 'db'; /* Nombre del servicio de la base de datos en Docker */
$db   = getenv('MYSQL_DATABASE') ?: 'mi_app_db'; /* Nombre de la base de datos */
$user = getenv('MYSQL_USER') ?: 'mi_app_user'; /* Usuario de la base de datos */
$pass = getenv('MYSQL_PASSWORD') ?: 'mi_pass'; /* Contraseña de la base de datos */

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass); /* Conexión a la base de datos */
    echo "Conexión a la base de datos OK. Base: $db"; /* Mensaje de éxito */
} catch (PDOException $e) { /* Manejo de errores */
    echo "Error conexión BBDD: " . $e->getMessage(); /* Mensaje de error */
}
