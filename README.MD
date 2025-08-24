## CATALOGO DE PRODUCTOS - CRUD CON CodeIgniter

Este proyecto es un CRUD básico desarrollado en CodeIgniter 4 para la gestión de un catálogo de productos.
Permite listar, registrar, editar y eliminar productos, además de subir archivos relacionados.

## Tecnologias Utilizadas
* PHP
* CodeIgniter4
* Heydi
* BOOTSTRAP5

## Rutas Principales
 * / <- Pagina de Inicio
 * /catalogo/listar <- Lista de productos 
 * /registrar <- permitira Registrar
 * /catalogo/editar/{id} → Editar producto
 * /catalogo/eliminar/{id} → Eliminar producto

 ## Creacion de la base de Datos:
´´´´
 CREATE DATABASE MascotasDB;

    USE mascotas;

    -- 2. Crear la tabla de productos
    CREATE TABLE productosmascota (
        id_producto INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        categoria VARCHAR(50) NOT NULL,
        marca VARCHAR(50),
        precio DECIMAL(10,2) NOT NULL,
        expediente VARCHAR(255) -- nombre del archivo (ej. PDF, imagen, doc)
    );


    INSERT INTO productosmascota (nombre, categoria, marca, precio, expediente) VALUES 
    ('Collar Antipulgas', 'Accesorios', 'PetSafe', 25.00, 'collar_manual.pdf'),
    ('Alimento Dog Chow Adulto 15kg', 'Alimentos', 'Purina', 120.50, 'dogchow_certificado.pdf'),
    ('Shampoo Canino Aloe Vera', 'Higiene', 'PetLover', 35.00, NULL),
    ('Pelota de Goma para Perro', 'Juguetes', 'Kong', 15.75, 'pelota_ficha.pdf'),
    ('Comedero Acero Inoxidable', 'Accesorios', 'PetSteel', 20.00, NULL);

    SELECT * FROM productosmascota; 
  ´´´´
## Proyecto Seguira en Mejora 
 * Paginaciones
 * Validaciones avanzadas 

 ## Autor
 * Sandra De La Cruz Magallanes. 
 * Proyecto en desarrollo para fines académicos y de práctica.