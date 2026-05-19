-- Agregar tabla producto si no la tienes
CREATE TABLE IF NOT EXISTS producto (
    id_producto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100) NOT NULL,
    tipo        VARCHAR(100) NOT NULL,
    stock       INT DEFAULT 0,
    precio_unit DECIMAL(20,6) DEFAULT 0.000000
);

-- Llenar productos
INSERT INTO producto (nombre, tipo, stock, precio_unit) VALUES
('Cal', 'Agrícola', 150, 45.50),
('Cal', 'De Construcción', 200, 38.00),
('Cal', 'Química', 80, 62.75),
('Adhesivos', 'American Finish White', 120, 95.00),
('Adhesivos', 'AF Porcelánico', 90, 110.50),
('Adhesivos', 'Pegazulejo B3 Blanco', 75, 88.25),
('Recubrimiento', 'Masilla American Finish', 60, 72.00),
('Recubrimiento', 'Mezcla de Albañilería', 110, 35.50),
('Recubrimiento', 'Pasta Fina Blanca', 95, 58.00);

-- Llenar clientes
INSERT INTO cliente (nombre, telefono, numero_cliente, genero, activo, credito) VALUES
('Juan Pérez', '9991234567', 1001, 'Masculino', 1, 5000),
('María López', '9997654321', 1002, 'Femenino', 1, 3000),
('Carlos Ruiz', '9993456789', 1003, 'Masculino', 1, 4500);