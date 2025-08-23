USE MascotasDB;

-- 2. Crear la tabla de productos
CREATE TABLE productosmascota(
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    marca VARCHAR(50),
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    descripcion TEXT,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM productosmascotas;
productosmascotas
-- 3. Insertar registros de ejemplo
INSERT INTO productosmascotas (nombre, categoria, marca, precio, stock, descripcion) VALUES
('Alimento Balanceado Adulto Perro', 'Alimento', 'DoggyFood', 120.50, 50, 'Alimento completo para perros adultos de todas las razas.'),
('Alimento Balanceado Gato', 'Alimento', 'CatDelight', 90.00, 40, 'Alimento premium para gatos adultos.'),
('Arena para Gato', 'Accesorios', 'CatSand', 35.00, 60, 'Arena higiénica aglomerante para gatos.'),
('Juguete Pelota Perro', 'Juguetes', 'FunPet', 15.00, 100, 'Pelota de goma para perros, resistente y segura.'),
('Collar Ajustable Perro', 'Accesorios', 'PetStyle', 25.50, 75, 'Collar ajustable para perros pequeños y medianos.'),
('Cama Mascota Mediana', 'Muebles', 'ComfortPet', 150.00, 30, 'Cama cómoda para mascotas medianas, lavable y resistente.'),
('Snack Dentales Perro', 'Alimento', 'HealthyDog', 45.00, 80, 'Snacks para limpiar dientes y fortalecer encías de perros.'),
('Transportadora Gato', 'Accesorios', 'TravelPet', 200.00, 20, 'Transportadora cómoda y segura para gatos y perros pequeños.'),
('Rascador Gato', 'Juguetes', 'CatFun', 120.00, 15, 'Rascador de cartón y sisal para mantener entretenido a tu gato.'),
('Arnés Ajustable Perro', 'Accesorios', 'SafeWalk', 60.00, 50, 'Arnés ergonómico y seguro para paseos con perros.');